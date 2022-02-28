<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\Settings;
use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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
        $url = \auth()->user()->url;
        $email = \auth()->user()->email;
        $site = Site::where('sites',$url)->get();
        if(!Str::contains($site, $url)) {
            Site::create([
                'sites' => $url,
                'user_id' => $email
            ]);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($url)
    {
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
        [$pageAuthority,$pageAuthNum] = $domain->pageAuthority($url);
        [$domainAuthority,$domainAuthNum] = $domain->domainAuthority($url);
        $externalLinks = $domain->externalLinks($url);
        $speed = $domain->getPageSpeed($url);
        $alexaRank = $domain->getAlexaRank($url);
        $alexaRank = ($alexaRank == '' ? "N/A" : $alexaRank);
        [$siteTitle,$dataTitle,$titleCssStyle,$titleNum]=$domain->getTitle('http://'.$url);
        try {
            [$description,$dataDesc,$descCssStyle,$descNum]=$domain->getDescription('http://'.$url);
        } catch (Throwable $e) {
            report($e);
        }
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

        $totalPercent = $pageAuthNum+$domainAuthNum+$titleNum+$descNum+$headingNum+$altNum+$ratioNum+$gzipNum+$robotsNum+$sitemapNum+$iframeNum
            +$flashNum+$pageSizeNum+$loadTimeNum+$langNum+$sslNum+$safeNum+$nestedNum+$speedNum+$analyticNum+$doctypeNum+$encodingNum+$dphtmlNum;

        return view('home', compact(
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
        ));
    }

    public function marketingPlan($url)
    {
        $sites=Site::all();
        $domain = new Analyztic();
        [$siteTitle,$dataTitle,$titleCssStyle,$titleNum]=$domain->getTitle('http://'.$url);
        try {
            [$description,$dataDesc,$descCssStyle,$descNum]=$domain->getDescription('http://'.$url);
        } catch (Throwable $e) {
            report($e);
        }
        [$missingAltImage,$checkMissingAlt,$altNum]=$domain->getAltImage('http://'.$url);
        [$getRatio,$textSize,$ratioPageSize,$checkRatio,$ratioNum]=$domain->getRatio($url);
        [$gzip,$gzipNum]=$domain->gzip('http://'.$url);
        [$robots,$check_robots_txt,$robotsNum]=$domain->robotFile($url);
        [$site_map,$check_xml_sitemaps,$sitemapNum]=$domain->getSitemap($url);
        [$response_time,$check_load_time,$loadTimeNum]=$domain->getSpeed($url);
        [$is_https,$check_https,$sslNum]=$domain->getSSL($url);
        $favicon=$domain->getFavicon($url);
        if ($favicon) {
            $favNum=4;
        }else{
            $favNum=0;
        }
        [$analytics,$check_analytics,$analyticNum]=$domain->getGoogleAnalystic('http://'.$url);

        return view('marketingPlan',compact(
            'sites',
            'url',
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
            //robot
            'robots',
            'check_robots_txt',
            'robotsNum',
            //sitemap
            'site_map',
            'check_xml_sitemaps',
            'sitemapNum',
            //favicon
            'favicon',
            'favNum',
            //load time
            'response_time',
            'check_load_time',
            'loadTimeNum',
            //ssl
            'is_https',
            'check_https',
            'sslNum',
            //google analytic
            'analytics',
            'check_analytics',
            'analyticNum',
        ));
    }

    public function addSiteView($url)
    {

        $sites = Site::all();
        return view('addSite_view',compact('sites','url'));
    }

    public function addSite()
    {
        $site=new Site();
        $site->sites = \request('sites');
        $site->user_id = auth()->user()->email;
        $site->save();

        return redirect()->route('home',['url' => \request('sites')])->with('success', 'با موفقیت ثبت شد');
    }

    public function handleAdmin()
    {
        $sites=Site::all();
        return view('admin.handleAdmin',compact('sites'));
    }

    public function siteSettings(Settings $settings)
    {
        $user = Auth::user();
        return view('admin.siteSettings',compact('user','settings'));
    }

    public function updateUser(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required|unique:users',
            'url' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->number = request('number');
        $user->url = request('url');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }

    public function settingsAdd(Settings $settings)
    {
        $settings->title = \request('title');
        $settings->meta_desc = \request('meta_desc');
        $settings->meta_key = \request('meta_key');
        $settings->save();

        return redirect(route('settings.management'));
    }

    public function domainManagement()
    {
        $domains = Site::all();
        return view('admin.domain',compact('domains'));
    }

    public function userManagement()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function showUser()
    {
        $user = Auth::user();
        return view('admin.show_user',compact('user'));
    }

    public function requestManagement()
    {

    }

}
