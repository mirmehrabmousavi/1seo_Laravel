<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Settings;
use App\Models\Site;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function handleAdmin()
    {
        $sites = Site::all();
        return view('admin.handleAdmin', compact('sites'));
    }

    public function siteSettings()
    {
        $user = Auth::user();
        $settings = Settings::all();
        return view('admin.siteSettings', compact('user', 'settings'));
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'url' => 'required',
        ]);

        User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'url' => $request->url,
        ]);

        if (Site::all() != $request->url) {
            Site::create([
                'user_id' => auth()->user()->email,
                'sites' => $request->url,
            ]);
        }

        return redirect()->back()->with('res', 'با موفقیت انجام شد.');
    }

    public function editPassword($id)
    {
        $user = User::find($id);
        return view('admin.password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with('res', 'با موفقیت انجام شد');
    }

    public function storeSettings(Settings $settings, Request $request)
    {
        $settings->title = $request->title;
        $settings->meta_desc = $request->meta_desc;
        $settings->meta_key = $request->meta_key;
        $settings->save();

        return redirect()->back()->with('res', 'با موفقیت انجام شد.');
    }

    public function adminUpdateSettings($id, Request $request)
    {
        $settings = Settings::find($id);
        $settings->title = $request->title;
        $settings->meta_desc = $request->meta_desc;
        $settings->meta_key = $request->meta_key;
        $settings->update();

        return redirect()->back()->with('res', 'با موفقیت انجام شد.');
    }

    public function domainManagement()
    {
        $domains = Site::all();
        return view('admin.domain', compact('domains'));
    }

    public function userManagement()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function showUser($id)
    {
        $user = User::find($id);
        return view('admin.show_user', compact('user'));
    }

    public function notificationManagement()
    {
        $notification = Notification::all();
        return view('admin.notification.index', compact('notification'));
    }

    public function createNotif()
    {
        return view('admin.notification.create');
    }

    public function storeNotif(Notification $notification, Request $request)
    {
        $notification->title = $request->title;
        $notification->desc = $request->desc;
        $notification->save();

        return redirect()->back()->with('res', 'با موفقیت انجام شد.');
    }

    public function showNotif($id)
    {
        $notif = Notification::find($id);
        return view('admin.notification.show', compact('notif'));
    }

    public function editNotif($id)
    {
        $notification = Notification::find($id);
        return view('admin.notification.edit', compact('notification'));
    }

    public function updateNotif($id, Request $request)
    {
        $notif = Notification::find($id);
        $notif->title = $request->title;
        $notif->desc = $request->desc;
        $notif->update();

        return redirect()->back()->with('res', 'با موفقیت انجام شد .');
    }

    public function deleteNotif($id)
    {
        $notif = Notification::find($id);
        $notif->delete();
        return redirect()->back()->with('rse', 'با موفقیت انجام شد.');
    }
}
