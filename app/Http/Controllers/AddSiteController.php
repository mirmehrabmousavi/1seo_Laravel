<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class AddSiteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        /*  $url = \auth()->user()->url;
          $email = \auth()->user()->email;
          $site = Site::where('sites',$url)->get();
          if(!Str::contains($site, $url)) {
              Site::create([
                  'sites' => $url,
                  'user_id' => $email
              ]);
          }*/
    }

    public function addSiteView($url)
    {

        $sites = Site::all();
        return view('add-site.addSite_view',compact('sites','url'));
    }

    public function addSite($url)
    {
        $site=new Site();
        $site->sites = \request('sites');
        $site->user_id = auth()->user()->email;
        $site->save();

        return redirect()->route('home',['url' => \request('sites')])->with('success', 'با موفقیت ثبت شد');
    }
}
