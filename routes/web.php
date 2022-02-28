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

//HomeController
Route::get('/home/{url}' , [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addSite/{url}' , [App\Http\Controllers\HomeController::class, 'addSiteView'])->name('addSiteView');
Route::post('/addSite/{url}' , [App\Http\Controllers\HomeController::class, 'addSite'])->name('addSite');
//TechSeo Controller
Route::get('/marketingPlan/{url}' , [App\Http\Controllers\HomeController::class, 'marketingPlan'])->name('marketing.plan');
//InitSeo Controller
Route::get('/initSeo/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeo'])->name('internal.seo');
Route::post('/initSeo/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeoStore'])->name('internal.seo.store');
Route::get('/initSeo/index/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeoIndex'])->name('internal.seo.index');

//Adm in Template

//Admin Panel
Route::get('admin/home',      [HomeController::class, 'handleAdmin'      ])->name('admin')->middleware('admin');
Route::get('admin/settings',  [HomeController::class, 'siteSettings'     ])->name('settings.management')->middleware('admin');
Route::patch('admin/settings', [HomeController::class, 'settingsAdd'      ])->name('settings.add')->middleware('admin');
Route::patch('admin/settings/{user}',  [HomeController::class, 'updateUser'])->name('admin.add')->middleware('admin');
Route::get('admin/users/{user}',  [HomeController::class, 'showUser'])->name('admin.showUser')->middleware('admin');
Route::get('admin/domain',    [HomeController::class, 'domainManagement' ])->name('domain.management')->middleware('admin');
Route::get('admin/users',     [HomeController::class, 'userManagement'   ])->name('user.management')->middleware('admin');
Route::get('admin/request',   [HomeController::class, 'requestManagement'])->name('request.management')->middleware('admin');
