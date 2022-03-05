<?php

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
//Add Site Controller
Route::get('/addSite/{url}' , [App\Http\Controllers\AddSiteController::class, 'addSiteView'])->name('addSiteView');
Route::post('/addSite/{url}' , [App\Http\Controllers\AddSiteController::class, 'addSite'])->name('addSite');
//TechSeo Controller
Route::get('/marketingPlan/{url}' , [App\Http\Controllers\TechSeoController::class, 'marketingPlan'])->name('marketing.plan');
//InitSeo Controller
Route::get('/initSeo/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeo'])->name('internal.seo');
Route::post('/initSeo/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeoStore'])->name('internal.seo.store');
Route::get('/initSeo/index/{url}' , [App\Http\Controllers\InitSeoController::class, 'initSeoIndex'])->name('internal.seo.index');
Route::get('/initSeo/index/{url}/edit/{id}' , [App\Http\Controllers\InitSeoController::class, 'editInitSeo'])->name('edit.init.seo');/*Edit & Update InitSeo*/
Route::patch('/initSeo/index/{url}/edit/{id}' , [App\Http\Controllers\InitSeoController::class, 'updateInitSeo'])->name('update.init.seo');

//Adm in Template

//Admin Panel
Route::get('admin/home',      [\App\Http\Controllers\Admin\AdminController::class, 'handleAdmin'      ])->name('admin')->middleware('admin');
Route::get('admin/settings',  [\App\Http\Controllers\Admin\AdminController::class, 'siteSettings'     ])->name('settings.management')->middleware('admin');
Route::patch('admin/settings', [\App\Http\Controllers\Admin\AdminController::class, 'settingsAdd'      ])->name('settings.add')->middleware('admin');
Route::patch('admin/settings/{user}',  [\App\Http\Controllers\Admin\AdminController::class, 'updateUser'])->name('admin.add')->middleware('admin');
Route::get('admin/users/{user}',  [\App\Http\Controllers\Admin\AdminController::class, 'showUser'])->name('admin.showUser')->middleware('admin');
Route::get('admin/domain',    [\App\Http\Controllers\Admin\AdminController::class, 'domainManagement' ])->name('domain.management')->middleware('admin');
Route::get('admin/users',     [\App\Http\Controllers\Admin\AdminController::class, 'userManagement'   ])->name('user.management')->middleware('admin');
Route::get('admin/request',   [\App\Http\Controllers\Admin\AdminController::class, 'requestManagement'])->name('request.management')->middleware('admin');
