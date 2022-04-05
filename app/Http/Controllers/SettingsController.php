<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index($url)
    {
        $sites = Site::all();
        $user = User::where('is_admin','0')->first();
        return view('settings.settings',compact('url','sites','user'));
    }

    public function updateSettings(Request $request)
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

        return redirect()->back()->with('res','با موفقیت انجام شد.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

       return redirect()->back()->with('res','با موفقیت انجام شد');
    }
}
