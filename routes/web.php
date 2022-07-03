<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {return view('website.welcome');})->name('welcome');

Auth::routes();

Route::get('m/about-us', 'HomeController@about')->name('about');
Route::get('m/about-us/overview', 'HomeController@about')->name('overview');
Route::get('m/about-us/certifications-and-memberships', 'HomeController@certifications_memberships')->name('certs');
Route::get('m/about-us/the-director', 'HomeController@director')->name('director');
Route::get('m/about-us/the-team', 'HomeController@team')->name('team');

Route::get('m/services', 'HomeController@services')->name('services');

Route::get('m/projects', 'ProjectController@index')->name('projects');
Route::get('m/gallery', 'HomeController@gallery')->name('gallery');

Route::post('m/contact', 'EmailController@contact_us')->name('contact-send');
Route::get('m/contact-us', 'HomeController@contact_page')->name('contact-us');

Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::prefix('/ad')->group(function () {
        Route::get('/posts/trash', [BlogPostController::class, 'trash'])->name('post.trash');
        Route::resource('projects', ProjectController::class);
        Route::resource('posts', BlogPostController::class);
        Route::resource('categories', ProjectCategoryController::class);
        Route::resource('postcategories', BlogCategoryController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('roles', RolesController::class);
        Route::resource('users', UserController::class);
        Route::resource('emails', EmailController::class);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('account/delete/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('account.delete');
    Route::get('account/profile', [App\Http\Controllers\UserDetailsController::class, 'accountIndex'])->name('account.index');
    Route::post('account/profile', [App\Http\Controllers\UserDetailsController::class, 'accountStore'])->name('account.store');
    Route::get('account/security', [App\Http\Controllers\UserDetailsController::class, 'securityIndex'])->name('security.index');
    Route::post('account/security', [App\Http\Controllers\UserDetailsController::class, 'securityStore'])->name('security.store');
    Route::get('account/notifications', [App\Http\Controllers\UserDetailsController::class, 'notificationsIndex'])->name('notifications.index');
    Route::post('account/notifications', [App\Http\Controllers\UserDetailsController::class, 'notificationsStore'])->name('notifications.store');
});
