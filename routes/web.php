<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Authentication
Auth::routes();

//Analyze Home
Route::get('/home/{url}' , [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/marketingPlan/{url}' , [App\Http\Controllers\HomeController::class, 'marketingPlan'])->name('marketing.plan');
Route::post('/request/{req}' , [App\Http\Controllers\RequestController::class, 'sendReq'])->name('sendReq');
Route::get('/addSite' , [App\Http\Controllers\HomeController::class, 'addSiteView'])->name('addSiteView');
Route::post('/addSite' , [App\Http\Controllers\HomeController::class, 'addSite'])->name('addSite');

//Adm in Template

//Admin Panel
Route::get('admin/home',      [HomeController::class, 'handleAdmin'      ])->name('admin')->middleware('admin');
Route::get('admin/settings',  [HomeController::class, 'siteSettings'     ])->name('settings.management')->middleware('admin');
Route::post('admin/settings', [HomeController::class, 'settingsAdd'      ])->name('settings.add')->middleware('admin');
Route::post('admin/settings', [HomeController::class, 'adminAdd'         ])->name('admin.add')->middleware('admin');
Route::get('admin/domain',    [HomeController::class, 'domainManagement' ])->name('domain.management')->middleware('admin');
Route::get('admin/users',     [HomeController::class, 'userManagement'   ])->name('user.management')->middleware('admin');
Route::get('admin/request',   [HomeController::class, 'requestManagement'])->name('request.management')->middleware('admin');
