<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
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
    public function index(Request $request)
    {
        $user = User::all();
        $urlEncoded = auth()->user()->url;
        $url = urldecode($urlEncoded);





        $urlencode = User::find('url');
        $domain = new Analyztic();
        $supported_domain = [
            '.com', '.net', '.org', '.info', '.biz', '.us', '.uk', '.ca', '.tel', '.ie', '.it', '.cc', '.ws', '.sc', '.mobi', '.pro', '.edu', '.tv', '.travel', '.in', '.me', '.cn', '.asia', '.ro', '.aero', '.nu'
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

        $alexa_rank = $domain->getAlexaRank($url);
        $alexa_rank = ($alexa_rank == '' ? "N/A" : $alexa_rank);

        [$siteTitle,$dataTitle,$cssStyle]=$domain->getTitle('http://'.$url);

       /* analyze::create([
            'url' => $url,
        ]);*/

        return view('home', compact('url','pageAuthority','domainAuthority','externalLinks','speed','domainAge', 'online','alexa_rank','urlencode','siteTitle','dataTitle','cssStyle'));
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }
}
