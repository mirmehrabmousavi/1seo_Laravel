<?php

namespace App\Http\Controllers;

class RequestController extends Controller
{
    public function sendReq($req)
    {
        \App\Models\Request::create([
            'request' => $req
        ]);
        /*echo $req . "با موفقیت ساخته شد :)";*/
        return back()->with('message' , 'درخواست شما با موفقیت ارسال شد');
    }

}
