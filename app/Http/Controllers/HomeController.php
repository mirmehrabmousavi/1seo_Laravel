<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($url)
    {
        /*$urlEncoded = auth()->user()->url;
        $url = urldecode($urlEncoded);*/

        /*Site::create([
           'sites' => auth()->user()->url
        ]);*/

        //$this->url=auth()->user()->url;

       /* $urlEncode = User::find('url');*/

        $sites = Site::all();

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

        $pageAuthority = $domain->pageAuthority($url);
        $domainAuthority = $domain->domainAuthority($url);
        $externalLinks = $domain->externalLinks($url);

        $speed = $domain->getPageSpeed($url);

        $alexaRank = $domain->getAlexaRank($url);
        $alexaRank = ($alexaRank == '' ? "N/A" : $alexaRank);

        [$siteTitle,$dataTitle,$cssStyle,$titleNum]=$domain->getTitle('http://'.$url);
        if (!empty($description)) {
            $description=$domain->getDescription('http://'.$url);
        }
        $altImage=$domain->getAltImage('http://'.$url);
        $missedAltImage=$domain->getMissedAltImage('http://'.$url);
        $gzip=$domain->gzip('http://'.$url);
        [$serverCss,$serverSignature]=$domain->serverSignature('http://'.$url);
        [$isUrlCanonicalization,$check_url_canonicalization]=$domain->urlCanonication($url);
        [$robots,$check_robots_txt]=$domain->robotFile($url);
        [$site_map,$check_xml_sitemaps]=$domain->getSitemap($url);
        [$isIframe,$check_Iframe]=$domain->isIframe('http://'.$url);
        [$isFlash,$check_Flash]=$domain->isFlash('http://'.$url);
        $urlLength=$domain->urlCheck($url);
        $favicon=$domain->getFavicon($url);
        $pageSize=$domain->getPageSize('http://'.$url);
        [$response_time,$check_load_time]=$domain->getSpeed($url);
        [$isLanguage,$check_language]=$domain->getLang('http://'.$url);
        [$is_https,$check_https]=$domain->getSSL($url);
        [$ChEmail,$check_email_security]=$domain->getEmailPrivacy('http://'.$url);
        [$isSafe,$check_safe_browsing]=$domain->getSafeBrowse($url);
        [$isNestedTable,$check_NestedTable]=$domain->getNestedHTML('http://'.$url);
        [$getCssFilesCount,$getJsFilesCount,$issetInlineCss,$check_speed_tips]=$domain->getSpeedTip('http://'.$url);
        [$analytics,$check_analytics]=$domain->getGoogleAnalystic('http://'.$url);
        [$doctype,$check_doctype]=$domain->getDocType('http://'.$url);
        [$encoding,$check_encoding]=$domain->getEncoding('http://'.$url);
        [$dphtml,$check_dphtml]=$domain->getDeprecatedHTML('http://'.$url);


        return view('home', compact(
            'sites',
            'url',
            'pageAuthority',
            'domainAuthority',
            'externalLinks',
            'speed',
            'domainAge',
            'online',
            'alexaRank',
            'siteTitle',
            'dataTitle',
            'cssStyle',
            'titleNum',/*
            'description',*/
            'altImage',
            'missedAltImage',
            'gzip',
            'serverCss',
            'serverSignature',
            'isUrlCanonicalization',
            'check_url_canonicalization',
            'robots',
            'check_robots_txt',
            'site_map',
            'check_xml_sitemaps',
            'isIframe',
            'check_Iframe',
            'isFlash',
            'check_Flash',
            'urlLength',
            'favicon',
            'pageSize',
            'response_time',
            'check_load_time',
            'isLanguage',
            'check_language',
            'is_https',
            'check_https',
            'ChEmail',
            'check_email_security',
            'isSafe',
            'check_safe_browsing',
            'isNestedTable',
            'check_NestedTable',
            'getCssFilesCount',
            'getJsFilesCount',
            'issetInlineCss',
            'check_speed_tips',
            'analytics',
            'check_analytics',
            'doctype',
            'check_doctype',
            'encoding',
            'check_encoding',
            'dphtml',
            'check_dphtml',
        ));
    }

    public function addSiteView()
    {

        $sites = Site::all();
        return view('addSite_view',compact('sites'));
    }

    public function addSite(Request $request)
    {
        Site::create([
            'sites' => $request->site
        ]);

        return redirect()->route('home',['url' => auth()->user()->url])->with('success', 'با موفقیت ثبت شد');
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }
}
