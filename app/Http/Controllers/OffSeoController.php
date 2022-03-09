<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffSeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function OffSeoIndex($url)
    {
        $off_seo = InitSeo::all();
        $off_seo_id = InitSeo::where('site_id', $url)->first();
        $off_seo_key = InitSeo::where('site_id', $url)->first();
        $off_seo_local = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->/*paginate(1)*/get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);
        $sites = Site::all();
        return view('off_seo.off-seo-index', compact('url', 'sites', 'off_seo', 'off_seo_key', 'off_seo_local', 'off_seo_id', 'siteTitle', 'related_key'));
    }
}
