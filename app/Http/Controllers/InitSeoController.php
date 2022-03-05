<?php

namespace App\Http\Controllers;

use App\Models\InitSeo;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        /*
            $url = \auth()->user()->url;
            $email = \auth()->user()->email;
            $site = Site::where('sites',$url)->get();
            if(!Str::contains($site, $url)) {
                Site::create([
                    'sites' => $url,
                    'user_id' => $email
                ]);
            }
        */
    }

    public function initSeo($url)
    {

        $url = auth()->user()->url;
        $email = auth()->user()->email;
        $site = Site::where('sites', $url)->get();
        if (!Str::contains($site, $url)) {
            Site::create([
                'sites' => $url,
                'user_id' => $email
            ]);
        }
        $sites = Site::all();
        $init_seo = InitSeo::all();
        return view('init_seo.internal-seo', compact('url', 'sites', 'init_seo'));
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
        $init_seo->site_id = \auth()->user()->url;
        $init_seo->type_site = $request->type_site;
        $init_seo->keyword_site = $request->keyword_site;
        $init_seo->local_site = $request->local_site;
        $init_seo->save();

        return redirect(route('internal.seo.index', ['url' => $url]));
    }

    public function initSeoIndex(Request $request, $url)
    {
//        $init_seo = InitSeo::limit(1)->get();
        $init_seo = DB::table('init_seos')->orderBy('id','desc')->first();
        $sites = Site::all();
        return view('init_seo.internal-seo-index', compact('url', 'sites', 'init_seo'));
    }

    public function editInitSeo($url, $id)
    {
       /* function getKeywordSuggestionsFromGoogle($keyword)
        {
            $keywords = array();
            $data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=en-US&q=' . urlencode($keyword));
            if (($data = json_decode($data, true)) !== null) {
                $keywords = $data[1];
            }

            return $keywords;
        }

        $suggest =getKeywordSuggestionsFromGoogle('money');*/
        $init_seo = InitSeo::find($id);
        $sites = Site::all();
        return view('init_seo.edit-init-seo', compact('init_seo', 'url', 'sites'));
    }

    public function updateInitSeo($url, $id , Request $request)
    {
        $request->validate([
            'type_site' => 'required',
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $initSeo = InitSeo::find($id);
        $initSeo->type_site = $request->input('type_site');
        $initSeo->keyword_site = $request->input('keyword_site');
        $initSeo->local_site = $request->input('local_site');
        $initSeo->update();

        return redirect(route('internal.seo.index', ['url' => $url]));
    }
}
