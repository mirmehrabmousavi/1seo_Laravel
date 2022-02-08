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

        $pageAuthority = 12/*$json_a->upa*/; // * Use the round() function to return integer
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
        $domainAuthority = 12/*round($json_a->pda, 0)*/;
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
        $externalLinks = $json_a->ueid;
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
        for ($i = 0; $i < $length; $i++)
        {
            $Check *= $Magic;
            if ($Check >= $Int32Unit)
            {
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

}
