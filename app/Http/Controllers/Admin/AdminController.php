<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function handleAdmin()
    {
        $sites=Site::all();
        return view('admin.handleAdmin',compact('sites'));
    }

    public function siteSettings(Settings $settings)
    {
        $user = Auth::user();
        return view('admin.siteSettings',compact('user','settings'));
    }

    public function updateUser(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required|unique:users',
            'url' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->number = request('number');
        $user->url = request('url');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }

    public function settingsAdd(Settings $settings)
    {
        $settings->title = \request('title');
        $settings->meta_desc = \request('meta_desc');
        $settings->meta_key = \request('meta_key');
        $settings->save();

        return redirect(route('settings.management'));
    }

    public function domainManagement()
    {
        $domains = Site::all();
        return view('admin.domain',compact('domains'));
    }

    public function userManagement()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function showUser()
    {
        $user = Auth::user();
        return view('admin.show_user',compact('user'));
    }

    public function requestManagement()
    {

    }
}
