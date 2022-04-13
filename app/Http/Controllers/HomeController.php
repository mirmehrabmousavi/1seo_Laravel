<?php

namespace App\Http\Controllers;

use App\Charts\BackLinkChart;
use App\Charts\DomainAuthority;
use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeoAction;
use App\Models\Notification;
use App\Models\OffSeoAction;
use App\Models\Site;
use Illuminate\Support\Str;
use Throwable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return string
     */
    public function index($url, BackLinkChart $chart , DomainAuthority $chart2)
    {
        $baseUrl = \auth()->user()->url;
        $email = \auth()->user()->email;
        $site = Site::where('sites',$baseUrl)->where('user_id',$email)->get();
        if(!Str::contains($site, $baseUrl)) {
            Site::create([
                'sites' => $baseUrl,
                'user_id' => $email
            ]);
        }
        $sites = Site::where('user_id',auth()->user()->email)->paginate(10);

        $domain = new Analyztic();
        $supported_domain = [
            '.com', '.net',
            '.org', '.info',
            '.biz', '.us',
            '.uk', '.ca',
            '.tel', '.ie',
            '.it', '.cc',
            '.ws', '.sc',
            '.mobi', '.pro',
            '.edu', '.tv',
            '.travel', '.in',
            '.me', '.cn',
            '.asia', '.ro',
            '.aero', '.nu'
        ];
        if (Str::contains($url, $supported_domain)) {
            $domainAge = $domain->age($url);
        } else {
            $domainAge = 'پشتیبانی نمی شود';
        }

        if ($domain->checkOnline($url)) {
            $online = 'آنلاین';
        } else {
            $online = 'آفلاین';
        }
        [$pageAuthority,$pageAuthNum] = $domain->pageAuthority($url);
        [$domainAuthority,$domainAuthNum] = $domain->domainAuthority($url);
        $externalLinks = $domain->externalLinks($url);
        $speed = $domain->getPageSpeed($url);
        $alexaRank = $domain->getAlexaRank($url);
        $alexaRank = ($alexaRank == '' ? "N/A" : $alexaRank);

        $initseo = InitSeoAction::where('done','0')->where('baseurl',$url)->paginate(2);
        $offseo = OffSeoAction::where('done','0')->where('baseurl',$url)->paginate(2);


        return view('home', ['chart' => $chart->build(),'chart2' => $chart2->build()], compact(
            'initseo',
            'offseo',
            'sites',
            'url',
            //Page Authority
            'pageAuthority',
            'pageAuthNum',
            //Domain Authority
            'domainAuthority',
            'domainAuthNum',
            'externalLinks',
            'speed',
            'domainAge',
            'online',
            'alexaRank',
        ));
    }

    public function tahlilTech($url)
    {
        $baseUrl = \auth()->user()->url;
        $email = \auth()->user()->email;
        $site = Site::where('sites',$baseUrl)->get();
        if(!Str::contains($site, $baseUrl)) {
            Site::create([
                'sites' => $baseUrl,
                'user_id' => $email
            ]);
        }
        $sites = Site::where('user_id',auth()->user()->email)->paginate(10);

        $domain = new Analyztic();
        $supported_domain = [
            '.com', '.net',
            '.org', '.info',
            '.biz', '.us',
            '.uk', '.ca',
            '.tel', '.ie',
            '.it', '.cc',
            '.ws', '.sc',
            '.mobi', '.pro',
            '.edu', '.tv',
            '.travel', '.in',
            '.me', '.cn',
            '.asia', '.ro',
            '.aero', '.nu'
        ];
        if (Str::contains($url, $supported_domain)) {
            $domainAge = $domain->age($url);
        } else {
            $domainAge = 'پشتیبانی نمی شود';
        }

        if ($domain->checkOnline($url)) {
            $online = 'آنلاین';
        } else {
            $online = 'آفلاین';
        }
        [$pageAuthority,$pageAuthNum] = $domain->pageAuthority($url);
        [$domainAuthority,$domainAuthNum] = $domain->domainAuthority($url);
        $externalLinks = $domain->externalLinks($url);
        $speed = $domain->getPageSpeed($url);
        $alexaRank = $domain->getAlexaRank($url);
        $alexaRank = ($alexaRank == '' ? "N/A" : $alexaRank);
        [$siteTitle,$dataTitle,$titleCssStyle,$titleNum]=$domain->getTitle('http://'.$url);
        [$description,$dataDesc,$descCssStyle,$descNum]=$domain->getDescription('http://'.$url);
        [$getheading,$headingNum] = $domain->getHeader('http://'.$url);
        [$missingAltImage,$checkMissingAlt,$altNum]=$domain->getAltImage('http://'.$url);
        [$getRatio,$textSize,$ratioPageSize,$checkRatio,$ratioNum]=$domain->getRatio($url);
        [$gzip,$gzipNum]=$domain->gzip('http://'.$url);
        [$serverCss,$serverSignature]=$domain->serverSignature('http://'.$url);
        [$isUrlCanonicalization,$check_url_canonicalization]=$domain->urlCanonication($url);
        [$robots,$check_robots_txt,$robotsNum]=$domain->robotFile($url);
        [$site_map,$check_xml_sitemaps,$sitemapNum]=$domain->getSitemap($url);
        [$isIframe,$check_Iframe,$iframeNum]=$domain->isIframe('http://'.$url);
        [$isFlash,$check_Flash,$flashNum]=$domain->isFlash('http://'.$url);
        $urlLength=$domain->urlCheck($url);
        $favicon=$domain->getFavicon($url);
        if ($favicon) {
            $favNum=4;
        }else{
            $favNum=0;
        }
        [$pageSize,$checkPageSize,$pageSizeNum]=$domain->getPageSize('http://'.$url);
        [$response_time,$check_load_time,$loadTimeNum]=$domain->getSpeed($url);
        [$isLanguage,$check_language,$langNum]=$domain->getLang('http://'.$url);
        [$is_https,$check_https,$sslNum]=$domain->getSSL($url);
        [$ChEmail,$check_email_security]=$domain->getEmailPrivacy('http://'.$url);
        [$isSafe,$check_safe_browsing,$safeNum]=$domain->getSafeBrowse($url);
        [$isNestedTable,$check_NestedTable,$nestedNum]=$domain->getNestedHTML('http://'.$url);
        [$getCssFilesCount,$getJsFilesCount,$issetInlineCss,$check_speed_tips,$speedNum]=$domain->getSpeedTip('http://'.$url);
        [$analytics,$check_analytics,$analyticNum]=$domain->getGoogleAnalystic('http://'.$url);
        [$doctype,$check_doctype,$doctypeNum]=$domain->getDocType('http://'.$url);
        [$encoding,$check_encoding,$encodingNum]=$domain->getEncoding('http://'.$url);
        [$dphtml,$check_dphtml,$dphtmlNum]=$domain->getDeprecatedHTML('http://'.$url);

        try {
            $totalPercent = $pageAuthNum+$domainAuthNum+$titleNum+$descNum+$headingNum+$altNum+$ratioNum+$gzipNum+$robotsNum+$sitemapNum+$iframeNum
                +$flashNum+$pageSizeNum+$loadTimeNum+$langNum+$sslNum+$safeNum+$nestedNum+$speedNum+$analyticNum+$doctypeNum+$encodingNum+$dphtmlNum;
        } catch (Throwable $e) {
            report($e);
        }

        $correctNum = 0;
        $warningNum = 0;
        $errorNum = 0;

        if($pageAuthNum == 5) {
            $correctNum++;
        }elseif ($pageAuthNum == 3) {
            $warningNum++;
        }elseif ($pageAuthNum == 0) {
            $errorNum++;
        }

        if($domainAuthNum == 5) {
            $correctNum++;
        }elseif ($domainAuthNum == 3) {
            $warningNum++;
        }elseif ($domainAuthNum == 0) {
            $errorNum++;
        }

        if($titleNum == 5) {
            $correctNum++;
        }elseif ($titleNum == 3) {
            $warningNum++;
        }elseif ($titleNum == 0) {
            $errorNum++;
        }

        try {
            if($descNum == 5) {
                $correctNum++;
            }elseif ($descNum == 3) {
                $warningNum++;
            }elseif ($descNum == 0) {
                $errorNum++;
            }
        } catch (Throwable $e) {
            report($e);
        }


        if($headingNum == 5) {
            $correctNum++;
        }elseif ($headingNum == 3) {
            $warningNum++;
        }elseif ($headingNum == 0) {
            $errorNum++;
        }

        if($altNum == 5) {
            $correctNum++;
        }elseif ($altNum == 3) {
            $warningNum++;
        }elseif ($altNum == 0) {
            $errorNum++;
        }

        if($ratioNum == 5) {
            $correctNum++;
        }elseif ($ratioNum == 3) {
            $warningNum++;
        }elseif ($ratioNum == 0) {
            $errorNum++;
        }

        if($gzipNum == 5) {
            $correctNum++;
        }elseif ($gzipNum == 3) {
            $warningNum++;
        }elseif ($gzipNum == 0) {
            $errorNum++;
        }

        if($robotsNum == 5) {
            $correctNum++;
        }elseif ($robotsNum == 3) {
            $warningNum++;
        }elseif ($robotsNum == 0) {
            $errorNum++;
        }

        if($sitemapNum == 5) {
            $correctNum++;
        }elseif ($sitemapNum == 3) {
            $warningNum++;
        }elseif ($sitemapNum == 0) {
            $errorNum++;
        }

        if($iframeNum == 5) {
            $correctNum++;
        }elseif ($iframeNum == 3) {
            $warningNum++;
        }elseif ($iframeNum == 0) {
            $errorNum++;
        }

        if($flashNum == 5) {
            $correctNum++;
        }elseif ($flashNum == 3) {
            $warningNum++;
        }elseif ($flashNum == 0) {
            $errorNum++;
        }

        if($loadTimeNum == 5) {
            $correctNum++;
        }elseif ($loadTimeNum == 3) {
            $warningNum++;
        }elseif ($loadTimeNum == 0) {
            $errorNum++;
        }

        if($langNum == 5) {
            $correctNum++;
        }elseif ($langNum == 3) {
            $warningNum++;
        }elseif ($langNum == 0) {
            $errorNum++;
        }

        if($sslNum == 5) {
            $correctNum++;
        }elseif ($sslNum == 3) {
            $warningNum++;
        }elseif ($sslNum == 0) {
            $errorNum++;
        }

        if($safeNum == 5) {
            $correctNum++;
        }elseif ($safeNum == 3) {
            $warningNum++;
        }elseif ($safeNum == 0) {
            $errorNum++;
        }

        if($nestedNum == 5) {
            $correctNum++;
        }elseif ($nestedNum == 3) {
            $warningNum++;
        }elseif ($nestedNum == 0) {
            $errorNum++;
        }

        if($speedNum == 5) {
            $correctNum++;
        }elseif ($speedNum == 3) {
            $warningNum++;
        }elseif ($speedNum == 0) {
            $errorNum++;
        }

        if($analyticNum == 5) {
            $correctNum++;
        }elseif ($analyticNum == 3) {
            $warningNum++;
        }elseif ($analyticNum == 0) {
            $errorNum++;
        }

        if($doctypeNum == 5) {
            $correctNum++;
        }elseif ($doctypeNum == 3) {
            $warningNum++;
        }elseif ($doctypeNum == 0) {
            $errorNum++;
        }

        if($encodingNum == 5) {
            $correctNum++;
        }elseif ($encodingNum == 3) {
            $warningNum++;
        }elseif ($encodingNum == 0) {
            $errorNum++;
        }

        if($dphtmlNum == 5) {
            $correctNum++;
        }elseif ($dphtmlNum == 3) {
            $warningNum++;
        }elseif ($dphtmlNum == 0) {
            $errorNum++;
        }

        $initseo = InitSeoAction::where('done','0')->where('baseurl',$url)->paginate(2);
        $offseo = OffSeoAction::where('done','0')->where('baseurl',$url)->paginate(2);

        $correct_num = $correctNum;
        $warning_num = $correctNum;
        $error_num = $correctNum;


        return view('tahlilTech',compact(
            'initseo',
            'offseo',
            'sites',
            'url',
            //Page Authority
            'pageAuthority',
            'pageAuthNum',
            //Domain Authority
            'domainAuthority',
            'domainAuthNum',
            'externalLinks',
            'speed',
            'domainAge',
            'online',
            'alexaRank',
            //Title
            'siteTitle',
            'dataTitle',
            'titleCssStyle',
            'titleNum',
            //Desc
            'description',
            'dataDesc',
            'descCssStyle',
            'descNum',
            //Headers
            'getheading',
            'headingNum',
            //alt
            'missingAltImage',
            'checkMissingAlt',
            'altNum',
            //Ratio
            'getRatio',
            'textSize',
            'ratioPageSize',
            'checkRatio',
            'ratioNum',
            //GZIP
            'gzip',
            'gzipNum',
            //Server Signature
            'serverCss',
            'serverSignature',
            //url canonicalization
            'isUrlCanonicalization',
            'check_url_canonicalization',
            //robot
            'robots',
            'check_robots_txt',
            'robotsNum',
            //sitemap
            'site_map',
            'check_xml_sitemaps',
            'sitemapNum',
            //iframe
            'isIframe',
            'check_Iframe',
            'iframeNum',
            //flash
            'isFlash',
            'check_Flash',
            'flashNum',
            //url length
            'urlLength',
            //favicon
            'favicon',
            'favNum',
            //page size
            'pageSize',
            'checkPageSize',
            'pageSizeNum',
            //load time
            'response_time',
            'check_load_time',
            'loadTimeNum',
            //language
            'isLanguage',
            'check_language',
            'langNum',
            //ssl
            'is_https',
            'check_https',
            'sslNum',
            //email privacy
            'ChEmail',
            'check_email_security',
            //safe browse
            'isSafe',
            'check_safe_browsing',
            'safeNum',
            //nested html
            'isNestedTable',
            'check_NestedTable',
            'nestedNum',
            //speed tips
            'getCssFilesCount',
            'getJsFilesCount',
            'issetInlineCss',
            'check_speed_tips',
            'speedNum',
            //google analytic
            'analytics',
            'check_analytics',
            'analyticNum',
            //doctype
            'doctype',
            'check_doctype',
            'doctypeNum',
            //encoding
            'encoding',
            'check_encoding',
            'encodingNum',
            //deprecated html
            'dphtml',
            'check_dphtml',
            'dphtmlNum',
            //TotalPercent
            'totalPercent',
            //Error Number
            'correct_num',
            'warning_num',
            'error_num'
        ));
    }

    public function notification($url)
    {
        $notif = Notification::all();
        $sites = Site::all();
        return view('notification.notification',compact('url','sites','notif'));
    }

    public function notificationShow($url,$id)
    {
        $notif = Notification::where('id',$id)->first();
        $sites = Site::all();
        return view('notification.show',compact('url','sites','notif'));
    }
}
