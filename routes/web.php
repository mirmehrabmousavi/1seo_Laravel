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
})->name('index');

//Authentication
Auth::routes();

//Seo Analyzer
Route::group([['middleware' => 'auth']], function () {
    Route::get('/home/{url}', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('page-cache');
    Route::get('/tahlilTech/{url}', [\App\Http\Controllers\HomeController::class, 'tahlilTech'])->name('tahlilTech');
    //Add Site Controller
    Route::get('/addSite/{url}', [\App\Http\Controllers\AddSiteController::class, 'addSiteView'])->name('addSiteView');
    Route::post('/addSite/{url}', [\App\Http\Controllers\AddSiteController::class, 'addSite'])->name('addSite');
    Route::delete('/delSite/{url}/{id}', [\App\Http\Controllers\AddSiteController::class, 'delSite'])->name('delSite');
    //TechSeo Controller
    Route::get('/marketingPlan/{url}', [\App\Http\Controllers\TechSeoController::class, 'marketingPlan'])->name('marketing.plan')->middleware('page-cache');
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
    Route::get('/initSeo/related/{url}/edit/{id}', [\App\Http\Controllers\InitSeoController::class, 'editInitSeoRelated'])->name('edit.init.seo.related');
    Route::patch('/initSeo/related/{url}/edit/{id}', [\App\Http\Controllers\InitSeoController::class, 'updateInitSeoRelated'])->name('update.init.seo.related');
    //Add URL
    Route::patch('/initSeo/addUrl/{url}/{id}', [\App\Http\Controllers\InitSeoController::class, 'addUrl'])->name('init.seo.add.url');
    Route::patch('/offSeo/addUrl/{url}/{id}', [\App\Http\Controllers\OffSeoController::class, 'addUrl'])->name('off.seo.add.url');
    //OffSeo Controller
    Route::get('/offSeo/index/{url}', [\App\Http\Controllers\OffSeoController::class, 'OffSeoIndex'])->name('off.seo.index');
    //Link Building
    Route::get('/linkBuilding/index/{url}',[\App\Http\Controllers\LinkBuildingController::class, 'index'])->name('link.building.index');
    //Ticket System
    Route::get('new-ticket/{url}', [\App\Http\Controllers\TicketsController::class, 'create'])->name('ticket.create');
    Route::post('new-ticket/{url}', [\App\Http\Controllers\TicketsController::class, 'store'])->name('ticket.store');
    Route::get('my-tickets/{url}', [\App\Http\Controllers\TicketsController::class, 'index'])->name('myTickets');
    Route::get('tickets/{ticket}/{url}', [\App\Http\Controllers\TicketsController::class, 'show']);
    Route::post('comment/{url}', [\App\Http\Controllers\CommentsController::class, 'postComment']);
    //Notification
    Route::get('notification/{url}', [\App\Http\Controllers\HomeController::class, 'notification'])->name('notification');
    Route::get('notification/{url}/{id}', [\App\Http\Controllers\HomeController::class, 'notificationShow'])->name('show.notif');
    //Settings System
    Route::get('settings/{url}', [\App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
    Route::patch('settings/updateSettings/{url}', [\App\Http\Controllers\SettingsController::class, 'updateSettings'])->name('update.settings');
    Route::patch('settings/updatePassword/{url}', [\App\Http\Controllers\SettingsController::class, 'updatePassword'])->name('update.password');
});

//Adm in Template

//Admin Panel
Route::group(['prefix' => 'admin', ['middleware' => 'admin']], function () {
    //Admin Dashboard
    Route::get('/home', [\App\Http\Controllers\Admin\AdminController::class, 'handleAdmin'])->name('admin');
    //Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\AdminController::class, 'siteSettings'])->name('settings.management');
    Route::post('/settings/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'storeSettings'])->name('store.settings');
    Route::patch('/settings/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'adminUpdateSettings'])->name('admin.update.settings');
    Route::patch('/settings/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'updateUser'])->name('admin.update.user');
    Route::get('/password/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'editPassword'])->name('admin.edit.password');
    Route::patch('/password/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'updatePassword'])->name('admin.update.password');
    //Domain
    Route::get('/domain', [\App\Http\Controllers\Admin\AdminController::class, 'domainManagement'])->name('domain.management');
    //User
    Route::get('/users', [\App\Http\Controllers\Admin\AdminController::class, 'userManagement'])->name('user.management');
    Route::get('/users/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'showUser'])->name('admin.showUser');
    //Notification
    Route::get('/notification', [\App\Http\Controllers\Admin\AdminController::class, 'notificationManagement'])->name('admin.notification');
    Route::get('/notification/create', [\App\Http\Controllers\Admin\AdminController::class, 'createNotif'])->name('admin.notif.create');
    Route::post('/notification/create', [\App\Http\Controllers\Admin\AdminController::class, 'storeNotif'])->name('admin.notif.store');
    Route::get('/notification/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'showNotif'])->name('admin.notif.show');
    Route::get('/notification/{id}/edit', [\App\Http\Controllers\Admin\AdminController::class, 'editNotif'])->name('admin.notif.edit');
    Route::patch('/notification/{id}/edit', [\App\Http\Controllers\Admin\AdminController::class, 'updateNotif'])->name('admin.notif.update');
    Route::delete('/notification/{id}/delete', [\App\Http\Controllers\Admin\AdminController::class, 'deleteNotif'])->name('admin.notif.delete');
    //Ticket
    Route::get('/tickets', [\App\Http\Controllers\TicketsController::class, 'userTickets'])->name('admin.tickets');
    Route::post('/close_ticket/{ticket_id}', [\App\Http\Controllers\TicketsController::class, 'close'])->name('admin.tickets.delete');
});
