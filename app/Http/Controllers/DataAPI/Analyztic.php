<?php

namespace App\Http\Controllers\DataAPI;

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
        $pageAuthority = $json_a->upa;

        if ($pageAuthority > 30) {
            $pageAuthNum = 5;
        } else if ($pageAuthority > 10 && $pageAuthority < 30) {
            $pageAuthNum = 3;
        } else if ($pageAuthority < 10) {
            $pageAuthNum = 0;
        }

        return [$pageAuthority, $pageAuthNum];
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
        $domainAuthority = round($json_a->pda, 0);

        if ($domainAuthority > 30) {
            $domainAuthNum = 5;
        } else if ($domainAuthority > 10 && $domainAuthority < 30) {
            $domainAuthNum = 3;
        } else if ($domainAuthority < 10) {
            $domainAuthNum = 0;
        }

        return [$domainAuthority, $domainAuthNum];
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
        $externalLinks = $json_a->ueid;;
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
        $dataTitle = file_get_contents($url);
        $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $dataTitle, $matches) ? $matches[1] : null;
        $t = strlen($title);
        $titleNum = 0;
        if ($t > 10 && $t < 60) {
            $dataTitle = 'طول متن : ' . $t;
            $titleCssStyle = 'alert alert-success';
            $titleNum = 5;
        } else if ($t > 60 && $t < 100) {
            $dataTitle = 'طول متن : ' . $t;
            $titleCssStyle = 'alert alert-warning';
            $titleNum = 3;
        } else {
            $dataTitle = 'طول عنوان شما مناسب نیست';
            $titleCssStyle = 'alert alert-danger';
            $titleNum = 0;
        }
        return [$title, $dataTitle, $titleCssStyle, $titleNum];
    }

    public function getDescription($url)
    {
        $metatagarray = get_meta_tags($url);
        try {
            $description = $metatagarray["description"];
            $descLen = strlen($description);

            if ($descLen > 70 && $descLen < 120) {
                $dataDesc = 'طول متن : ' . $descLen;
                $descCssStyle = 'alert alert-success';
                $descNum = 5;
            } else if ($descLen > 120 && $descLen < 170) {
                $dataDesc = 'طول متن : ' . $descLen;
                $descCssStyle = 'alert alert-warning';
                $descNum = 3;
            } else {
                $dataDesc = 'طول توضیحات شما مناسب نیست';
                $descCssStyle = 'alert alert-danger';
                $descNum = 0;
            }

            return [$description, $dataDesc, $descCssStyle, $descNum];
        }catch (\Throwable $e) {
            report($e);
        }
    }

    function get_headings_tag($html)
    {

        $headings = array(
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
        );
        $pattern = "<(h[1-6]{1})(.+)?>(.*)</h[1-6]{1}(?:[^>]*)>";
        preg_match_all("#{$pattern}#iUs", $html, $matches);
        $sizes = isset($matches[1]) ? $matches[1] : array();
        foreach ($sizes as $id => $size) {
            $headings[strtolower($size)][] = strip_tags(trim($matches[3][$id]));
        }
        return $headings;
    }

    public function getHeader($url)
    {
        $html = file_get_contents($url);
        $getheading = $this->get_headings_tag($html);
        $headingNum = 6;
        return [$getheading, $headingNum];
    }

    public function getAltImage($url)
    {
        $content = file_get_contents($url);

        preg_match_all('/<img(.*?)>/is', $content, $page_images);
        $total_images = count($page_images[1]);

        preg_match_all('/<img(.*?)alt="(.*?)"(.*?)>/is', $content, $alt_images);
        $total_alt = count($alt_images[2]);
        $missing_alt = $total_images - $total_alt;

        if ($missing_alt > 1 && $missing_alt < 5) {
            $checkMissingAlt = 'alert alert-warning';
            $altNum = 3;
        } else if ($missing_alt > 5) {
            $checkMissingAlt = 'alert alert-danger';
            $altNum = 0;
        } else {
            $checkMissingAlt = 'alert alert-success';
            $altNum = 5;
        }
        $missingAltImage = $total_images . 'عکس موجود می باشد' . $missing_alt . 'عکس بدون ویژگی alt می باشند ';
        return [$missingAltImage, $checkMissingAlt, $altNum];
    }


    function ratio_file_get_contents_curl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    function ratio_strip_html_tags($text)
    {
        $text = preg_replace(
            array(
                '@<head[^>]*?>.*?</head>@siu',
                '@<style[^>]*?>.*?</style>@siu',
                '@<script[^>]*?.*?</script>@siu',
                '@<object[^>]*?.*?</object>@siu',
                '@<embed[^>]*?.*?</embed>@siu',
                '@<applet[^>]*?.*?</applet>@siu',
                '@<noframes[^>]*?.*?</noframes>@siu',
                '@<noscript[^>]*?.*?</noscript>@siu',
                '@<noembed[^>]*?.*?</noembed>@siu',
                '@</?((address)|(blockquote)|(center)|(del))@iu',
                '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
                '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
                '@</?((table)|(th)|(td)|(caption))@iu',
                '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
                '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
                '@</?((frameset)|(frame)|(iframe))@iu',
                '#<[\/\!]*?[^<>]*?>#siu',         // Strip out HTML tags
                '#<![\s\S]*?--[ \t\n\r]*>#siu',  // Strip multi-line comments including CDATA
            ),
            array(
                ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
                "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
                "\n\$0", "\n\$0",
            ), $text);
        return strip_tags($text);
    }


    function ratio_check_ratio($url)
    {
        $real_content = $this->ratio_file_get_contents_curl($url);
        $page_size = mb_strlen($real_content, '8bit');
        $content = $this->ratio_strip_html_tags($real_content);
        $text_size = mb_strlen($content, '8bit');
        $content = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", " ", $content);

        $len_real = strlen($real_content);
        $len_strip = strlen($content);
        return round((($len_strip / $len_real) * 100), 2);
    }

    public function getRatio($url)
    {
        $page_size = 0;
        $text_size = 0;
        $real_content = $this->ratio_file_get_contents_curl($url);
        $page_size = mb_strlen($real_content, '8bit');
        $content = $this->ratio_strip_html_tags($real_content);
        $text_size = mb_strlen($content, '8bit');
        $getRatio = $this->ratio_check_ratio($url);


        if ($getRatio > 8) {
            $ratioNum = 5;
            $checkRatio = 'alert alert-success';
        } else if ($getRatio > 5 && $getRatio < 8) {
            $ratioNum = 3;
            $checkRatio = 'alert alert-warning';
        } else if ($getRatio < 5) {
            $ratioNum = 0;
            $checkRatio = 'alert alert-danger';
        }
        $getRatio .= '%';

        return [$getRatio, $text_size, $page_size, $checkRatio, $ratioNum];
    }

    public function gzip($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        if ($resp) {
            $gzipNum = 4;
            return ['عالی سایت شما GZIP است.', $gzipNum];
        } else {
            $gzipNum = 0;
            return ['اوه سایت شما GZIP نیست.', $gzipNum];
        }
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
            $isUrlCanonicalization = 'Yes, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' resolve to the same URL.';
        } else {
            $parsedRedirect = $this->getDomainName($get_redirect);

            if ($parsedRedirect == $parsedUrl) {
                $check_url_canonicalization = 'alert alert-success';
                $isUrlCanonicalization = 'Yes, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' resolve to the same URL.';
            } elseif ($parsedRedirect == $url_WWW) {
                $check_url_canonicalization = 'alert alert-success';
                $isUrlCanonicalization = 'Yes, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' resolve to the same URL.';

            } else {
                $isUrlCanonicalization = 'No, your site\'s url ' . $url_WWW . ' and ' . $parsedUrl . ' don\'t resolve to the same URL.';
                $check_url_canonicalization = 'alert alert-danger';
            }
        }

        return [$isUrlCanonicalization, $check_url_canonicalization];
    }

    public function robotFile($url)
    {
        $robots = $url . "/robots.txt";
        $check_robots_txt = 'alert alert-success';
        $robotsNum = 5;
        return [$robots, $check_robots_txt, $robotsNum];
    }

    public function getSitemap($url)
    {
        $site_map = $url . '/sitemap.xml';
        $check_xml_sitemaps = 'alert alert-success';
        $sitemapNum = 5;
        return [$site_map, $check_xml_sitemaps, $sitemapNum];
    }

    function is_Iframe($html)
    {
        $pattern = "#<iframe[^>]+>.*?</iframe>#is";
        return preg_match("$pattern", $html);
    }

    public function isIframe($url)
    {
        // Get Meta Tags information
        $html = file_get_contents($url);

        $issetIframe = $this->is_Iframe($html);

        if ($issetIframe == 0) {
            $check_Iframe = 'alert alert-success';
            $isIframe = 'iFrame در سایت شما یافت نشد :)';
            $iframeNum = 4;
        } else {
            $check_Iframe = 'alert alert-danger';
            $isIframe = 'متاسفانه iFrame در سایت شما یافت شد :(';
            $iframeNum = 0;
        }

        return [$isIframe, $check_Iframe, $iframeNum];
    }

    function is_Flash($html)
    {
        $pattern = "#<object[^>]*>(.*?)</object>#is";
        return preg_match("$pattern", $html);
    }

    public function isFlash($url)
    {
        $html = file_get_contents($url);

        $issetFlash = $this->is_Flash($html);

        if ($issetFlash == 0) {
            $check_Flash = 'alert alert-success';
            $isFlash = 'ایول فایل Flash یافت نشد';
            $flashNum = 4;
        } else {
            $check_Flash = 'alert alert-danger';
            $isFlash = 'اوپس سایت شما دارای فایل Flash می باشد';
            $flashNum = 0;
        }

        return [$isFlash, $check_Flash, $flashNum];
    }

    public function urlCheck($url)
    {
        $url_domain = $this->getDomainName($url);

        $ext = strstr($url_domain, '.'); // extension

        $index = strpos($url_domain, '.');

        $arr = str_split($url_domain, $index);

        $domain = $arr[0]; // domain name

        return 'طول دامنه شما ' . strlen($domain);
    }

    public function getFavicon($url)
    {
        return 'http://www.google.com/s2/favicons?domain=' . $url;
    }

    public function getPageSize($url)
    {
        $pageSize = strlen(file_get_contents($url));
        if ($pageSize < 300000) {
            $checkPageSize = 'alert alert-success';
            $pageSizeNum = 5;
        } elseif ($pageSize > 300000 && $pageSize < 500000) {
            $checkPageSize = 'alert alert-warning';
            $pageSizeNum = 3;
        } elseif ($pageSize > 500000) {
            $checkPageSize = 'alert alert-danger';
            $pageSizeNum = 0;
        }

        return [$pageSize, $checkPageSize, $pageSizeNum];
    }

    public function getSpeed($url)
    {
        $response_time = $this->getPageSpeed($url);
        $response_time = substr($response_time, 0, 5);


        if ($response_time < 1) {
            $check_load_time = 'alert alert-success';
            $loadTimeNum = 5;
        } else if ($response_time > 1 && $response_time < 3) {
            $check_load_time = 'alert alert-warning';
            $loadTimeNum = 3;
        } else {
            $check_load_time = 'alert alert-danger';
            $loadTimeNum = 0;
        }

        return [$response_time, $check_load_time, $loadTimeNum];
    }

    function getLanguageID($html)
    {
        $pattern = '<html[^>]+lang=[\'"]?(.*?)[\'"]?[\/\s>]';
        preg_match("#{$pattern}#is", $html, $matches);
        if (isset($matches[1])) {
            return trim(mb_substr($matches[1], 0, 5));
        }
        $pattern = '<meta[^>]+http-equiv=[\'"]?content-language[\'"]?[^>]+content=[\'"]?(.*?)[\'"]?[\/\s>]';
        preg_match("#{$pattern}#is", $html, $matches);
        return isset($matches[1]) ? trim(mb_substr($matches[1], 0, 5)) : null;
    }

    public function getLang($url)
    {
        $html = file_get_contents($url);

        $getLanguageID = $this->getLanguageID($html);

        if ($getLanguageID != '') {
            $check_language = 'alert alert-success';
            $isLanguage = 'خیلی هم عالیییی ،زبان انتخابی شما' . ' ' . ucwords($getLanguageID);
            $langNum = 3;
        } else {
            $check_language = 'alert alert-danger';
            $isLanguage = 'وب سایت شما زبان انتخابی ندارد :|';
            $langNum = 0;
        }

        return [$isLanguage, $check_language, $langNum];
    }

    public function getSSL($url)
    {
        $get_redirect = $this->get_redirect($url);
        if ($get_redirect == null) {
            $get_redirect = $url;
        }

        if (strpos($get_redirect, 'https') !== false) {
            $is_https = 'عالی ،وبسایت شما دارای گواهی اس اس ال است.';
            $check_https = 'alert alert-success';
            $sslNum = 5;
        } else {
            $is_https = ':| اوپس ،وبسایت شما از گواهی اس اس ال استفاده نمی کند.';
            $check_https = 'alert alert-danger';
            $sslNum = 0;
        }
        return [$is_https, $check_https, $sslNum];
    }

    function isEmail($html)
    {
        $pattern = "(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])";
        return preg_match("/{$pattern}/is", $html);
    }

    public function getEmailPrivacy($url)
    {
        $html = file_get_contents($url);

        $issetEmail = $this->isEmail($html);

        if ($issetEmail == 0) {
            $check_email_security = 'alert alert-success';
            $ChEmail = 'Good, no email address has been found in plain text.';
        } else {
            $check_email_security = 'alert alert-danger';
            $ChEmail = 'Bad, email address has been found in plain text.';
        }

        return [$ChEmail, $check_email_security];
    }

    function checkSafeBrowsing($longUrl)
    {
        $safebrowsing[] = null;
        $safebrowsing['api_key'] = "ABQIAAAAOQY5PG65Sz64pzYOK6KlmhQjd04VwKOOk1G-Nk48V5R2oPhf3g";
        $safebrowsing['api_url'] = "https://sb-ssl.google.com/safebrowsing/api/lookup";

        $url = $safebrowsing['api_url'] . "?client=checkURLapp&";
        $url .= "apikey=" . $safebrowsing['api_key'] . "&appver=1.0&";
        $url .= "pver=3.0&url=" . urlencode($longUrl);

        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $httpStatus;
    }

    public function getSafeBrowse($url)
    {
        $safe_value = $this->checkSafeBrowsing($url);


        if ($safe_value == 204) {

            $check_safe_browsing = 'alert alert-success';
            $isSafe = 'The website is not blacklisted and looks safe to use.';
            $safeNum = 3;

        } else if ($safe_value == 501) {

            $check_safe_browsing = 'alert alert-info';
            $isSafe = 'Something went wrong on the server. Please try again.';
            $safeNum = 3;

        } else if ($safe_value == 200) {

            $check_safe_browsing = 'alert alert-danger';
            $isSafe = 'The website is blacklisted.';
            $safeNum = 0;

        } else {

            $check_safe_browsing = 'alert alert-info';
            $isSafe = 'Please enter URL.';
            $safeNum = 3;

        }
        return [$isSafe, $check_safe_browsing, $safeNum];
    }

    function issetNestedTables($html)
    {
        $pattern = "<(td|th)(?:[^>]*)>(.*?)<table(?:[^>]*)>(.*?)</table(?:[^>]*)>(.*?)</(td|th)(?:[^>]*)>";
        return preg_match("#{$pattern}#is", $html);
    }

    public function getNestedHTML($url)
    {
        $html = file_get_contents($url);
        $issetNestedTables = $this->issetNestedTables($html);

        if ($issetNestedTables == 0) {
            $isNestedTable = 'Excellent, your website doesn\'t use nested tables.';
            $check_NestedTable = 'alert alert-success';
            $nestedNum = 2;
        } else {
            $isNestedTable = 'Bad, your website does use nested tables.';
            $check_NestedTable = 'alert alert-info';
            $nestedNum = 2;
        }

        return [$isNestedTable, $check_NestedTable, $nestedNum];
    }


    function getCssCount($html)
    {
        $tagPattern = '<link[^>]*>';
        $cssPattern = '(?=.*\bstylesheet\b)(?=.*\bhref=("[^"]*"|\'[^\']*\')).*';
        $css_count = 0;
        preg_match_all("#{$tagPattern}#is", $html, $matches);
        if (!isset($matches[0])) {
            return $css_count;
        }
        foreach ($matches[0] as $tag) {
            if (preg_match("#{$cssPattern}#is", $tag))
                $css_count++;
        }
        return $css_count;
    }


    function getJsCount($html)
    {
        $tagPattern = '<script[^>]*>';
        $jsPattern = 'src=("[^"]*"|\'[^\']*\')';
        $js_count = 0;
        preg_match_all("#{$tagPattern}#is", $html, $matches);
        if (!isset($matches[0])) {
            return $js_count;
        }
        foreach ($matches[0] as $tag) {
            if (preg_match("#{$jsPattern}#is", $tag))
                $js_count++;
        }
        return $js_count;
    }

    function isInlineCss($html)
    {
        $pattern = "#<(.+)style=\"[^\"].+\"[^>]*>(.*?)<\/[^>]*>#is";
        return preg_match("$pattern", $html);
    }

    public function getSpeedTip($url)
    {
        $html = file_get_contents($url);

        $getCssFilesCount = $this->getCssCount($html);
        $getJsFilesCount = $this->getJsCount($html);


        $issetInlineCss = $this->isInlineCss($html);


        if ($issetInlineCss == 0 && $getJsFilesCount < 7 && $getCssFilesCount < 4) {
            $check_speed_tips = 'alert alert-success';
            $speedNum = 5;
        } else {
            $check_speed_tips = 'alert alert-danger';
            $speedNum = 3;
        }

        return [$getCssFilesCount, $getJsFilesCount, $issetInlineCss, $check_speed_tips, $speedNum];
    }

    public function getGoogleAnalystic($url)
    {
        $html = file_get_contents($url);

        $analytics_technologies = null;

        if (preg_match("/\bua-\d{4,9}-\d{1,4}\b/i", $html)) {
            $analytics_technologies = 'Google Analytics was found.';
            $check_analytics_technologies = 'alert alert-success';
            $analyticNum = 4;
        } else {
            $analytics_technologies = 'Google Analytics was not found.';
            $check_analytics_technologies = 'alert alert-danger';
            $analyticNum = 0;
        }
        return [$analytics_technologies, $check_analytics_technologies, $analyticNum];
    }

    function Doctype($html)
    {
        $doctypes = array(
            'HTML 5' => '<!DOCTYPE html>',
            'HTML 4.01 Strict' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',
            'HTML 4.01 Transitional' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
            'HTML 4.01 Frameset' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">',
            'XHTML 1.0 Strict' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
            'XHTML 1.0 Transitional' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
            'XHTML 1.0 Frameset' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
            'XHTML 1.1' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
        );
        preg_match("#<!DOCTYPE[^>]*>#is", $html, $matches);
        if (!isset($matches[0])) {
            return false;
        }
    }

    public function getDocType($url)
    {
        $html = file_get_contents($url);
        $getDocument = $this->Doctype($html);

        if ($getDocument == '') {
            $check_doctype = 'alert alert-danger';
            $doctype = 'Not Found Doctype';
            $doctypeNum = 0;
        } else {
            $check_doctype = 'alert alert-info';
            $doctype = $getDocument;
            $doctypeNum = 2;
        }
        return [$doctype, $check_doctype, $doctypeNum];
    }

    function getCharset($html)
    {

        preg_match('#<meta[^>]+charset=[\'"]?(.*?)[\'"]?[\/\s>]#is', $html, $matches);
        return isset($matches[1]) ? mb_strtoupper(trim($matches[1])) : null;
    }

    public function getEncoding($url)
    {
        $html = file_get_contents($url);
        $getMetaTags_class = $this->getCharset($html);

        if ($getMetaTags_class == 'UTF-8') {
            $check_encoding = 'alert alert-success';
            $encoding = 'Good, language/character encoding is specified:  UTF-8';
            $encodingNum = 2;
        } else {
            $check_encoding = 'alert alert-danger';
            $encoding = 'Bad, language/character encoding is specified:  No UTF-8';
            $encodingNum = 0;
        }
        return [$encoding, $check_encoding, $encodingNum];
    }

    function getDeprecatedTags($html)
    {
        $deprecated = array();
        $deprectaedTags = array(
            'acronym', 'applet', 'basefont', 'listing', 'plaintext', 'big', 'center', 'dir', 'font', 'frame', 'frameset',
            'isindex', 'noframes', 'xmp', 's', 'strike', 'tt', 'u',
        );
        $pattern = "<(" . implode("|", $deprectaedTags) . ")( [^>]*)?>";
        preg_match_all("#{$pattern}#is", $html, $matches);
        foreach ($matches[1] as $tag) {
            if (isset($deprecated[$tag]))
                $deprecated[$tag]++;
            else
                $deprecated[$tag] = 1;
        }
        return $deprecated;
    }

    public function getDeprecatedHTML($url)
    {
        $html = file_get_contents($url);
        $deprecated = $this->getDeprecatedTags($html);

        if (!empty($deprecated)) {
            $dphtml = 'Good! We haven\'t found deprecated HTML tags in your HTML';
            $check_dphtml = 'alert alert-danger';
            $dphtmlNum = 0;
        } else {
            $check_dphtml = 'alert alert-success';
            $dphtml = 'Check if web page is using old tag or deprecated HTML tags. Deprecated tags and attributes are those that have been replaced by other, newer HTML constructs.';
            $dphtmlNum = 2;
        }

        return [$dphtml, $check_dphtml, $dphtmlNum];
    }

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}
