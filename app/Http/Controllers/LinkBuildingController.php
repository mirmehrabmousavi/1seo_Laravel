<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;

class LinkBuildingController extends Controller
{
    public function index($url)
    {
        $domain = new Analyztic();
        [$externalLink,$internalLink] = $domain->get_a_href('https://'.$url);
        //dd($arr);
        return view('link_building.link-building-index',compact('url','externalLink','internalLink'));
    }
}
