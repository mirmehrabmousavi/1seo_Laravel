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
    }

    public function addSiteView($url)
    {
        $sites = Site::all();
        $site_fi = Site::where('user_id',auth()->user()->email)->first();
        $sites_ex = Site::where('sites','<>',auth()->user()->url)->where('user_id',auth()->user()->email)->paginate(10);
        return view('add-site.addSite_view',compact('sites','site_fi','sites_ex','url'));
    }

    public function addSite()
    {
        $site=new Site();
        $site->sites = \request('sites');
        $site->user_id = auth()->user()->email;
        $site->save();
        return redirect()->route('home',['url' => \request('sites')])->with('success', 'با موفقیت ثبت شد');
    }

    public function delSite($id)
    {
        $site = Site::find($id);
        $site->delete();
        return redirect()->back();
    }
}
