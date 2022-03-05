<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\Site;
use Illuminate\Http\Request;
use Throwable;

class TechSeoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

}
