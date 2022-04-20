<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\OffSeoAction;
use Illuminate\Http\Request;
use App\Models\Site;
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
        $off_seo_ = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->/*paginate(1)*/get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);
        $sites = Site::all();

        $off_seo_action = OffSeoAction::where('baseurl',$url)->latest()->paginate(5);

        return view('off_seo.off-seo-index', compact('url', 'sites', 'off_seo', 'off_seo_', 'siteTitle', 'related_key','off_seo_action'));
    }

    public function addUrl($url,$id,Request $request)
    {
        $request->validate([
            'url' => 'required',
        ]);

        $done = '1';
        $offseoaction = OffSeoAction::find($id);

        $offseoaction->url = $request->url;
        $offseoaction->done = $done;
        $offseoaction->update();


        return redirect(route('off.seo.index', ['url' => $url]));
    }
}
