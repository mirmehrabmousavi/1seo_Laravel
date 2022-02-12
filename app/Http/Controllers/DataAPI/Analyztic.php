<?php

namespace App\Http\Controllers\DataAPI;

use DOMDocument;

class Analyztic
{
    private $WHOIS_SERVERS = array(

        "com" => array("whois.verisign-grs.com", "/Creation Date:(.*)/"),

        "net" => array("whois.verisign-grs.com", "/Creation Date:(.*)/"),

        "org" => array("whois.pir.org", "/Created On:(.*)/"),

        "info" => array("whois.afilias.info", "/Created On:(.*)/"),

        "biz" => array("whois.neulevel.biz", "/Domain Registration Date:(.*)/"),

        "us" => array("whois.nic.us", "/Domain Registration Date:(.*)/"),

        "uk" => array("whois.nic.uk", "/Registered on:(.*)/"),

        "ca" => array("whois.cira.ca", "/Creation date:(.*)/"),

        "tel" => array("whois.nic.tel", "/Domain Registration Date:(.*)/"),

        "ie" => array("whois.iedr.ie", "/registration:(.*)/"),

        "it" => array("whois.nic.it", "/Created:(.*)/"),

        "cc" => array("whois.nic.cc", "/Creation Date:(.*)/"),

        "ws" => array("whois.nic.ws", "/Domain Created:(.*)/"),

        "sc" => array("whois2.afilias-grs.net", "/Created On:(.*)/"),

        "mobi" => array("whois.dotmobiregistry.net", "/Created On:(.*)/"),

        "pro" => array("whois.registrypro.pro", "/Created On:(.*)/"),

        "edu" => array("whois.educause.net", "/Domain record activated:(.*)/"),

        "tv" => array("whois.nic.tv", "/Creation Date:(.*)/"),

        "travel" => array("whois.nic.travel", "/Domain Registration Date:(.*)/"),

        "in" => array("whois.inregistry.net", "/Created On:(.*)/"),

        "me" => array("whois.nic.me", "/Domain Create Date:(.*)/"),

        "cn" => array("whois.cnnic.cn", "/Registration Date:(.*)/"),

        "asia" => array("whois.nic.asia", "/Domain Create Date:(.*)/"),

        "ro" => array("whois.rotld.ro", "/Registered On:(.*)/"),

        "aero" => array("whois.aero", "/Created On:(.*)/"),

        "nu" => array("whois.nic.nu", "/created:(.*)/")
    );

    public function age($domain)
    {

        $domain = trim($domain);

        if (substr(strtolower($domain), 0, 7) == "http://")
            $domain = substr($domain, 7); // remove http:// if included

        if (substr(strtolower($domain), 0, 4) == "www.")
            $domain = substr($domain, 4);//remove www from domain

        if (preg_match("/^([-a-z0-9]{2,100}).([a-z.]{2,8})$/i", $domain)) {

            $domain_parts = explode(".", $domain);

            $tld = strtolower(array_pop($domain_parts));

            if (!$server = $this->WHOIS_SERVERS[$tld][0]) {

                return false;

            }

            $res = $this->queryWhois($server, $domain);

            if (preg_match($this->WHOIS_SERVERS[$tld][1], $res, $match)) {

                date_default_timezone_set('UTC');

                $time = time() - strtotime($match[1]);

                $years = floor($time / 31556926);

                $days = floor(($time % 31556926) / 86400);

                if ($years == "1") {
                    $y = "1 year";

                } else {
                    $y = $years . " years";
                }
                if ($days == "1") {
                    $d = "1 day";
                } else {
                    $d = $days . " days";
                }
                return "$y, $d";

            } else

                return false;
        } else

            return false;

    }

    private function queryWhois($server, $domain)

    {

        $fp = @fsockopen($server, 43, $errno, $errstr, 20) or die("Socket Error "
            . $errno . " - " . $errstr);

        if ($server == "whois.verisign-grs.com")

            $domain = "=" . $domain;

        fputs($fp, $domain . "\r\n");
        $out = "";

        while (!feof($fp)) {

            $out .= fgets($fp);

        }
        fclose($fp);

        return $out;
    }

    public function checkOnline($domain)
    {
        $curlInit = curl_init($domain);
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curlInit, CURLOPT_HEADER, true);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

        //get answer
        $response = curl_exec($curlInit);

        curl_close($curlInit);
        if ($response) return true;
        return false;
    }

    protected $accessID = "mozscape-4e579e0d4d";
    protected $secretKey = "fd4a92b461febf50ce8d99ce5878e78c";

    public function pageAuthority($domain)
    {
        // Set your expires for several minutes into the future.
        // Values excessively far in the future will not be honored by the Mozscape API.
        $expires = time() + 300;

        // A new linefeed is necessary between your AccessID and Expires.
        $stringToSign = $this->accessID . "\n" . $expires;

        // Get the "raw" or binary output of the hmac hash.
        $binarySignature = hash_hmac('sha1', $stringToSign, $this->secretKey, true);

        // We need to base64-encode it and then url-encode that.
        $urlSafeSignature = urlencode(base64_encode($binarySignature));

        // This is the URL that we want link metrics for.
        $objectURL = $domain;

        // Add up all the bit flags you want returned.
        // Learn more here: http://apiwiki.seomoz.org/categories/api-reference
        $cols = "103079215140";

        // Now put your entire request together.
        // This example uses the Mozscape URL Metrics API.
        $requestUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/" . urlencode($objectURL) . "?Cols=" . $cols . "&AccessID=" . $this->accessID . "&Expires=" . $expires . "&Signature=" . $urlSafeSignature;

        // We can easily use Curl to send off our request.
        $options = array(
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init($requestUrl);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);

        // * Store URL metrics in array

        $json_a = json_decode($content);

        // * Assign URL metrics to separate variables

        $pageAuthority = 12/*$json_a->upa*/
        ; // * Use the round() function to return integer
        /*$domainAuthority = round($json_a->pda, 0);
        $externalLinks = $json_a->ueid;
        $theUrl = $json_a->uu;*/

        return $pageAuthority;
    }

    public function domainAuthority($domain)
    {
        // Set your expires for several minutes into the future.
        // Values excessively far in the future will not be honored by the Mozscape API.
        $expires = time() + 300;

        // A new linefeed is necessary between your AccessID and Expires.
        $stringToSign = $this->accessID . "\n" . $expires;

        // Get the "raw" or binary output of the hmac hash.
        $binarySignature = hash_hmac('sha1', $stringToSign, $this->secretKey, true);

        // We need to base64-encode it and then url-encode that.
        $urlSafeSignature = urlencode(base64_encode($binarySignature));

        // This is the URL that we want link metrics for.
        $objectURL = $domain;

        // Add up all the bit flags you want returned.
        // Learn more here: http://apiwiki.seomoz.org/categories/api-reference
        $cols = "103079215140";

        // Now put your entire request together.
        // This example uses the Mozscape URL Metrics API.
        $requestUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/" . urlencode($objectURL) . "?Cols=" . $cols . "&AccessID=" . $this->accessID . "&Expires=" . $expires . "&Signature=" . $urlSafeSignature;

        // We can easily use Curl to send off our request.
        $options = array(
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init($requestUrl);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);

        // * Store URL metrics in array

        $json_a = json_decode($content);

        // * Assign URL metrics to separate variables

        /* $pageAuthority = round($json_a->upa, 0);*/ // * Use the round() function to return integer
        $domainAuthority = 12/*round($json_a->pda, 0)*/
        ;
        /*   $externalLinks = $json_a->ueid;
           $theUrl = $json_a->uu;*/

        return $domainAuthority;
    }

    public function externalLinks($domain)
    {
        // Set your expires for several minutes into the future.
        // Values excessively far in the future will not be honored by the Mozscape API.
        $expires = time() + 300;

        // A new linefeed is necessary between your AccessID and Expires.
        $stringToSign = $this->accessID . "\n" . $expires;

        // Get the "raw" or binary output of the hmac hash.
        $binarySignature = hash_hmac('sha1', $stringToSign, $this->secretKey, true);

        // We need to base64-encode it and then url-encode that.
        $urlSafeSignature = urlencode(base64_encode($binarySignature));

        // This is the URL that we want link metrics for.
        $objectURL = $domain;

        // Add up all the bit flags you want returned.
        // Learn more here: http://apiwiki.seomoz.org/categories/api-reference
        $cols = "103079215140";

        // Now put your entire request together.
        // This example uses the Mozscape URL Metrics API.
        $requestUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/" . urlencode($objectURL) . "?Cols=" . $cols . "&AccessID=" . $this->accessID . "&Expires=" . $expires . "&Signature=" . $urlSafeSignature;

        // We can easily use Curl to send off our request.
        $options = array(
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init($requestUrl);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);

        // * Store URL metrics in array

        $json_a = json_decode($content);

        // * Assign URL metrics to separate variables

        /* $pageAuthority = round($json_a->upa, 0); // * Use the round() function to return integer
         $domainAuthority = round($json_a->pda, 0);*/
        $externalLinks = 1212/*$json_a->ueid*/
        ;
        /*    $theUrl = $json_a->uu;*/

        return $externalLinks;
    }

    public function getPageSpeed($url)
    {

        $Start = microtime(true);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0');
        curl_setopt($ch, CURLOPT_REFERER, 'http://google.com');
        $html = curl_exec($ch);
        curl_close($ch);
        $End = microtime(true);
        $Time = $End - $Start;

        return $Time;
    }

    public function get_redirect($url)
    {
        $curlInit = curl_init($url);
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($curlInit, CURLOPT_HEADER, true);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlInit);
        $response_time = curl_getinfo($curlInit);
        curl_close($curlInit);
        return $response_time['redirect_url'];
    }

    public function get_Page_Data($url)
    {
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            if ((ini_get('open_basedir') == '') && (ini_get('safe_mode') == 'Off')) {
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            }
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_FAILONERROR, 1);
            return @curl_exec($ch);
        } else {
            return @file_get_contents($url);
        }
    }

    public function getAlexaRank($url)
    {
        $request = "http://data.alexa.com/data?cli=10&amp;dat=s&amp;url=" . $url;
        $data = $this->get_Page_Data($request);
        preg_match('/<POPULARITY URL="(.*?)" TEXT="([\d]+)"/si', $data, $p);
        $value = ($p[2]) ? number_format($p[2]) : "n/a";
        return $value;
    }

    public function StrToNum($Str, $Check, $Magic)
    {
        $Int32Unit = 4294967296; // 2^32

        $length = strlen($Str);
        for ($i = 0; $i < $length; $i++) {
            $Check *= $Magic;
            if ($Check >= $Int32Unit) {
                $Check = ($Check - $Int32Unit * (int)($Check / $Int32Unit));
                //if the check less than -2^31
                $Check = ($Check < -2147483648) ? ($Check + $Int32Unit) : $Check;
            }
            $Check += ord($Str{$i});
        }
        return $Check;
    }

    public function HashURL($String)
    {
        $Check1 = $this->StrToNum($String, 0x1505, 0x21);
        $Check2 = $this->StrToNum($String, 0, 0x1003F);

        $Check1 >>= 2;
        $Check1 = (($Check1 >> 4) & 0x3FFFFC0) | ($Check1 & 0x3F);
        $Check1 = (($Check1 >> 4) & 0x3FFC00) | ($Check1 & 0x3FF);
        $Check1 = (($Check1 >> 4) & 0x3C000) | ($Check1 & 0x3FFF);

        $T1 = (((($Check1 & 0x3C0) << 4) | ($Check1 & 0x3C)) << 2) | ($Check2 & 0xF0F);
        $T2 = (((($Check1 & 0xFFFFC000) << 4) | ($Check1 & 0x3C00)) << 0xA) | ($Check2 &
                0xF0F0000);

        return ($T1 | $T2);
    }


    public function CheckHash($Hashnum)
    {
        $CheckByte = 0;
        $Flag = 0;

        $HashStr = sprintf('%u', $Hashnum);
        $length = strlen($HashStr);

        for ($i = $length - 1; $i >= 0; $i--) {
            $Re = $HashStr{$i};
            if (1 === ($Flag % 2)) {
                $Re += $Re;
                $Re = (int)($Re / 10) + ($Re % 10);
            }
            $CheckByte += $Re;
            $Flag++;
        }

        $CheckByte %= 10;
        if (0 !== $CheckByte) {
            $CheckByte = 10 - $CheckByte;
            if (1 === ($Flag % 2)) {
                if (1 === ($CheckByte % 2)) {
                    $CheckByte += 9;
                }
                $CheckByte >>= 1;
            }
        }

        return '7' . $CheckByte . $HashStr;
    }

    public function getch($url)
    {
        return $this->CheckHash($this->HashURL($url));
    }

    public function getTitle($url)
    {
        $data = file_get_contents($url);
        $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $data, $matches) ? $matches[1] : null;
        $t = strlen($title);
        if ($t > 10 && $t < 70) {
            $data = 'طول متن : ' . $t;
            $cssStyle = 'alert alert-success';
        } else {
            $data = 'طول عنوان شما مناسب نیست';
            $cssStyle = 'alert alert-danger';
        }
        return [$title, $data, $cssStyle];
    }

    public function getDescription($url)
    {
        $metatagarray = get_meta_tags($url);
        $description = $metatagarray["description"];

        return $description;
    }

    public function getHeader($url, $headingtag)
    {
        $headingText = '';
        preg_match_all('|<' . $headingtag . '>(.*)</' . $headingtag . '>|iU', $url, $headings);
        foreach ($headings[0] as $headh2val) {
            $headingText .= $headh2val;
        }
        return $headingText;
    }

    public function getAltImage($url)
    {
        $content = file_get_contents($url);

        preg_match_all('/<img(.*?)>/is', $content, $page_images);
        $total_images = count($page_images[1]);

        return $total_images . 'عکس موجود می باشد';
    }

    public function getMissedAltImage($url)
    {
        $content = file_get_contents($url);

        preg_match_all('/<img(.*?)>/is', $content, $page_images);
        $total_images = count($page_images[1]);

        preg_match_all('/<img(.*?)alt="(.*?)"(.*?)>/is', $content, $alt_images);
        $total_alt = count($alt_images[2]);

        $missing_alt = $total_images - $total_alt;


        return $missing_alt . ' alt attributes are empty or missing';
    }

    public function getRatio($url)
    {

        /*  //Get Text to HTML Ratio
          $page_size=0;
          $text_size=0;
          $real_content = ratio_file_get_contents_curl($url);
          $page_size = mb_strlen($real_content, '8bit');
          $content = ratio_strip_html_tags($real_content);
          $text_size = mb_strlen($content, '8bit');
          $getRatio = ratio_check_ratio($url);*/
    }

    public function gzip($url)
    {
        /* if (isset($_GET['gzip_compression_check'])) {
             //Get Gzip Compression

             $gzip_test = check_compressed($url);

             if ($gzip_test == 'None') {

                 $gzip_enable = false;

             } else {

                 $gzip_enable = true;

             }

             ob_start();
             Get_Content($url);
             $output = gzcompress(ob_get_contents());
             ob_end_clean();

             ob_start();
             Get_Content($url);
             $output2 = ob_get_contents();
             ob_end_clean();
             $after_gzip = strlen($output);
             $before_gzip = strlen($output2);

             $convert_before = bytesToSize($before_gzip);
             $convert_after = bytesToSize($after_gzip);

             $percentage = (($before_gzip - $after_gzip) / ($before_gzip)) * 100;


             if ($gzip_enable == true) {
                 $isGzip = '201';

             } else {
                 $isGzip = '202';
             }
         }*/

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        if ($resp)
            return 'ok';
        else
            return 'oops';
    }

    function getDomainName($url)
    {
        $url = Trim($url);
        $url = preg_replace("/^(http:\/\/)*/is", "", $url);
        $url = preg_replace("/^(https:\/\/)*/is", "", $url);
        $url = preg_replace("/\/.*$/is", "", $url);
        return $url;
    }

    function get_all_redirect($site)
    {
        $curlInit = curl_init($site);
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($curlInit, CURLOPT_HEADER, true);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlInit);
        $response_time = curl_getinfo($curlInit);
        curl_close($curlInit);
        return $response_time['url'];
    }

    function get_sv_Signature($url, $format = 0)
    {
        $url = parse_url($url);
        $end = "\r\n\r\n";
        $fp = fsockopen($url['host'], (empty($url['port']) ? 80 : $url['port']), $errno, $errstr, 30);
        if ($fp) {
            $out = "GET / HTTP/1.1\r\n";
            $out .= "Host: " . $url['host'] . "\r\n";
            $out .= "Connection: Close\r\n\r\n";
            $var = '';
            fwrite($fp, $out);
            while (!feof($fp)) {
                $var .= fgets($fp, 1280);
                if (strpos($var, $end))
                    break;
            }
            fclose($fp);

            $var = preg_replace("/\r\n\r\n.*\$/", '', $var);
            $var = explode("\r\n", $var);
            if ($format) {
                foreach ($var as $i) {
                    if (preg_match('/^([a-zA-Z -]+): +(.*)$/', $i, $parts))
                        $v[$parts[1]] = $parts[2];
                }
                return $v;
            } else
                return $var;
        }
    }

    public function serverSignature($url)
    {
        $html = file_get_contents($url);
        $headers = $this->get_sv_Signature($url, 1);

        $sv_Signature = null;
        if (isset($headers['Server'])) {
            $sv_Signature = $headers['Server'];
        }
        if (isset($headers['X-Powered-By'])) {
            $sv_Signature = $sv_Signature . ' ' . $headers['X-Powered-By'];
        }
        if ($sv_Signature == null || $sv_Signature == 'Apache') {
            $isSignature = 'امضای سرور شما خاموش است.';
            $check_Signature = 'alert alert-success';
        } else {
            $check_Signature = 'alert alert-danger';
            $isSignature = 'امضای سرور شما روشن است.' . "$sv_Signature";
        }

        return [$check_Signature, $isSignature];
    }

    function get_root_domain($url)
    {
        $pattern = '/\w+\..{2,3}(?:\..{2,3})?(?:$|(?=\/))/i';
        if (preg_match($pattern, $url, $matches) === 1) {
            return $matches[0];
        }
    }

    public function urlCanonication($url)
    {
        $parsedUrl = $this->get_root_domain($url);

        $url_WWW = 'www.' . $parsedUrl;
        $get_redirect = $this->get_redirect($url_WWW);

        $check_url_canonicalization = 'alert alert-success';
        $isUrlCanonicalization = 'No, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' don\'t resolve to the same URL.';


        if ($get_redirect == null) {
            $check_url_canonicalization = 'alert alert-success';
            $isUrlCanonicalization = 'Yes, your site\'s url <a href="http://' . $url_WWW . '" target="_blank" rel="nofollow">' . $url_WWW . '</a> and <a href="http://' . $parsedUrl . '" target="_blank" rel="nofollow">' . $parsedUrl . '</a> resolve to the same URL.';
        } else {
            $parsedRedirect = $this->getDomainName($get_redirect);

            if ($parsedRedirect == $parsedUrl) {
                $check_url_canonicalization = 'alert alert-success';
                $isUrlCanonicalization = 'Yes, your site\'s url <a href="http://' . $url_WWW . '" target="_blank" rel="nofollow">' . $url_WWW . '</a> and <a href="http://' . $parsedUrl . '" target="_blank" rel="nofollow">' . $parsedUrl . '</a> resolve to the same URL.';
            } elseif ($parsedRedirect == $url_WWW) {
                $check_url_canonicalization = 'alert alert-success';
                $isUrlCanonicalization = 'Yes, your site\'s url <a href="http://' . $url_WWW . '" target="_blank" rel="nofollow">' . $url_WWW . '</a> and <a href="http://' . $parsedUrl . '" target="_blank" rel="nofollow">' . $parsedUrl . '</a> resolve to the same URL.';

            } else {
                $isUrlCanonicalization = 'No, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' don\'t resolve to the same URL.';
                $check_url_canonicalization = 'alert alert-danger';
            }
        }

        return [$isUrlCanonicalization, $check_url_canonicalization];
    }

    public function robotFile($url)
    {
        $robots =$url."/robots.txt";
        $check_robots_txt = 'alert alert-success';
        return [$robots, $check_robots_txt];
    }

    public function sitemap($url)
    {

    }

    function is_Iframe($html) {
        $pattern = "#<iframe[^>]+>.*?</iframe>#is";
        return preg_match("$pattern", $html);
    }

    public function isIframe($url)
    {
        // Get Meta Tags information
        $html = file_get_contents($url);

        $issetIframe = $this->is_Iframe($html);

        if($issetIframe==0 ){
            $check_Iframe = 'alert alert-success';
            $isIframe = 'iFrame در سایت شما یافت نشد :)';
        }
        else{
            $check_Iframe = 'alert alert-danger';
            $isIframe = 'متاسفانه iFrame در سایت شما یافت شد :(';
        }

        return [$isIframe,$check_Iframe];
    }

    function is_Flash($html) {
        $pattern = "#<object[^>]*>(.*?)</object>#is";
        return preg_match("$pattern", $html);
    }

    public function isFlash($url)
    {
        $html = file_get_contents($url);

        $issetFlash = $this->is_Flash($html);

        if($issetFlash==0 ){
            $check_Flash = 'scoreHigh';
            $isFlash = 'ایول فایل Flash یافت نشد';
        }
        else{
            $check_Flash = 'scoreLow';
            $isFlash ='اوپس سایت شما دارای فایل Flash می باشد';
        }

        return [$isFlash,$check_Flash];
    }

    public function urlCheck($url)
    {
        $url_domain= $this->getDomainName ($url);

        $ext = strstr($url_domain, '.'); // extension

        $index = strpos($url_domain, '.');

        $arr = str_split($url_domain, $index);

        $domain = $arr[0]; // domain name

        return 'طول دامنه شما ' . strlen($domain);
    }

    public function getFavicon($url)
    {
        return 'http://www.google.com/s2/favicons?domain='.$url;
    }

    public function getPageSize($url){
        return strlen(file_get_contents($url));
    }

    public function getSpeed($url) {
        $response_time = $this->getPageSpeed($url);
        $response_time = substr($response_time, 0, 5);



        if($response_time < 3){
            $check_load_time = 'alert alert-success';
        }else if($response_time > 3 && $response_time < 5){
            $check_load_time = 'alert alert-info';
        }
        else{
            $check_load_time = 'alert alert-danger';
        }

        return [$response_time,$check_load_time];
    }

    public function getLang($url)
    {
      /*  $html = file_get_contents($url);

        $getLanguageID= getLanguageID($html);

        if($getLanguageID != ''){
            $check_language = 'scoreHigh';
            $isLanguage = $lang['138'].' '.ucwords($getLanguageID);
        }
        else{
            $check_language = 'scoreLow';
            $isLanguage = $lang['243'];
        }*/
    }
}
