<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\RelatedKey;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Toaster;

class InitSeoController extends Controller
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

    public function initSeo($url)
    {
        $baseUrl = auth()->user()->url;
        $email = auth()->user()->email;
        $site = Site::where('sites', $baseUrl)->get();
        if (!Str::contains($site, $baseUrl)) {
            Site::create([
                'sites' => $baseUrl,
                'user_id' => $email
            ]);
        }
        $sites = Site::all();
        $init_seo = InitSeo::all();

        $site_id = InitSeo::where('site_id', $url)->first();

        $init_seo_key = InitSeo::where('site_id', $url)->first();

        if ($site_id) {
            return redirect(route('internal.seo.index', ['url' => $url]));
        } else {
            return view('init_seo.internal-seo', compact('url', 'sites', 'init_seo', 'init_seo_key'));
        }
    }

    public function initSeoStore($url, Request $request)
    {
        $this->validate($request, [
            'type_site' => 'required',
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $init_seo = new InitSeo();
        $init_seo->user_id = \auth()->user()->email;
        $init_seo->site_id = $url;
        $init_seo->type_site = $request->type_site;
        $init_seo->keyword_site = $request->keyword_site;
        $init_seo->local_site = $request->local_site;
        $init_seo->save();

        return redirect(route('internal.seo.related', ['url' => $url]));
    }

    public function initSeoRelated($url)
    {
        $sites = Site::all();
        $init_seo_key = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->get();

        return view('init_seo.related-init-seo', compact('url', 'sites', 'init_seo_key', 'related_key'));
    }

    public function initSeoRelatedStore($url, Request $request)
    {
        $this->validate($request, [
            'keyword_id' => 'required',
            'related_site' => 'required',
        ]);

        try{
            $related_key = new RelatedKey();
            $related_key->keyword_id = $request->keyword_id;
            $related_key->related_site = $request->related_site;
            $related_key->save();
        } catch(\Throwable $e) {
            report($e);
        }

        return redirect(route('internal.seo.related', ['url' => $url]));
    }

    public function initSeoIndex($url)
    {
        $init_seo = InitSeo::all();
        $init_seo_id = InitSeo::where('site_id', $url)->first();
        $init_seo_key = InitSeo::where('site_id', $url)->first();
        $init_seo_local = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->/*paginate(1)*/get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);
        $sites = Site::all();
        return view('init_seo.internal-seo-index', compact('url', 'sites', 'init_seo', 'init_seo_key', 'init_seo_local', 'init_seo_id', 'siteTitle', 'related_key'));
    }

    public function editInitSeo($url, $id)
    {

        $init_seo = InitSeo::find($id);
        $sites = Site::all();

        return view('init_seo.edit-init-seo', compact('init_seo', 'url', 'sites'));
    }

    public function updateInitSeo($url, $id, Request $request)
    {
        $request->validate([
            'type_site' => 'required',
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $initSeo = InitSeo::find($id);
      /*  InitSeo::update([
            ''
        ]);*/
        $initSeo->update($request->all());
        /* $initSeo->type_site = $request->input('type_site');
         $initSeo->keyword_site = $request->input('keyword_site');
         $initSeo->local_site = $request->input('local_site');
         $initSeo->update();*/

        return redirect(route('internal.seo.index', ['url' => $url]));
    }
}
