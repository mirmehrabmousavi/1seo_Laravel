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

//Seo Analyzer
Route::group([['middleware' => 'auth']], function () {
    Route::get('/home/{url}', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Add Site Controller
    Route::get('/addSite/{url}', [\App\Http\Controllers\AddSiteController::class, 'addSiteView'])->name('addSiteView');
    Route::post('/addSite/{url}', [\App\Http\Controllers\AddSiteController::class, 'addSite'])->name('addSite');
    Route::delete('/delSite/{url}/{id}', [\App\Http\Controllers\AddSiteController::class, 'delSite'])->name('delSite');
    //TechSeo Controller
    Route::get('/marketingPlan/{url}', [\App\Http\Controllers\TechSeoController::class, 'marketingPlan'])->name('marketing.plan');
    //InitSeo Controller
    Route::get('/initSeo/{url}', [\App\Http\Controllers\InitSeoController::class, 'initSeo'])->name('internal.seo');
    Route::post('/initSeo/{url}', [\App\Http\Controllers\InitSeoController::class, 'initSeoStore'])->name('internal.seo.store');
    //RelatedKey Entering
    Route::get('/initSeo/related/{url}', [\App\Http\Controllers\InitSeoController::class, 'initSeoRelated'])->name('internal.seo.related');
    Route::post('/initSeo/related/{url}', [\App\Http\Controllers\InitSeoController::class, 'initSeoRelatedStore'])->name('internal.seo.related.store');
    //InitSeo Index
    Route::get('/initSeo/index/{url}', [\App\Http\Controllers\InitSeoController::class, 'initSeoIndex'])->name('internal.seo.index');
    //Edit & Update InitSeo
    Route::get('/initSeo/index/{url}/edit/{id}', [\App\Http\Controllers\InitSeoController::class, 'editInitSeo'])->name('edit.init.seo');
    Route::patch('/initSeo/index/{url}/edit/{id}', [\App\Http\Controllers\InitSeoController::class, 'updateInitSeo'])->name('update.init.seo');
    //Add URL
    Route::patch('/initSeo/addUrl/{url}/{id}',[\App\Http\Controllers\InitSeoController::class, 'addUrl'])->name('init.seo.add.url');
    Route::patch('/offSeo/addUrl/{url}/{id}',[\App\Http\Controllers\OffSeoController::class, 'addUrl'])->name('off.seo.add.url');
    //OffSeo Controller
    Route::get('/offSeo/index/{url}', [\App\Http\Controllers\OffSeoController::class, 'OffSeoIndex'])->name('off.seo.index');
});

//Adm in Template

//Admin Panel
Route::group(['prefix' => 'admin', ['middleware' => 'admin']], function () {
    Route::get('/home', [\App\Http\Controllers\Admin\AdminController::class, 'handleAdmin'])->name('admin');
    Route::get('/settings', [\App\Http\Controllers\Admin\AdminController::class, 'siteSettings'])->name('settings.management');
    Route::post('/settings', [\App\Http\Controllers\Admin\AdminController::class, 'settingsAdd'])->name('settings.add');
    Route::patch('/settings/{user}', [\App\Http\Controllers\Admin\AdminController::class, 'updateUser'])->name('admin.add');
    Route::get('/users/{user}', [\App\Http\Controllers\Admin\AdminController::class, 'showUser'])->name('admin.showUser');
    Route::get('/domain', [\App\Http\Controllers\Admin\AdminController::class, 'domainManagement'])->name('domain.management');
    Route::get('/users', [\App\Http\Controllers\Admin\AdminController::class, 'userManagement'])->name('user.management');
    Route::get('/request', [\App\Http\Controllers\Admin\AdminController::class, 'requestManagement'])->name('request.management');
});
