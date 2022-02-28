<?php

namespace App\Http\Controllers;

use App\Models\InitSeo;
use App\Models\Site;
use Illuminate\Http\Request;
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
        $site = Site::where('sites',$url)->get();
        if(!Str::contains($site, $url)) {
            Site::create([
                'sites' => $url,
                'user_id' => $email
            ]);
        }
        $sites = Site::all();
        return view('internal-seo',compact('url','sites'));
    }

    public function initSeoStore($url,Request $request)
    {
        $this->validate($request, [
            'type_site' => 'required',
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $init_seo = new InitSeo();
        $init_seo->site_id = \auth()->user()->url;
        $init_seo->type_site = $request->type_site;
        $init_seo->keyword_site = $request->keyword_site;
        $init_seo->local_site = $request->local_site;
        $init_seo->save();

        return redirect(route('internal.seo.index',['url' => $url]));
    }

    public function initSeoIndex(Request $request,$url)
    {
        $sites = Site::all();
        return view('internal-seo-index',compact('url','sites'));
    }
}
