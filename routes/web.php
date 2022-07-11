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

Route::group(['middleware' => 'web'], function () {
    Auth::routes();
    Route::get('/', function () {
        return view('website.welcome');
    })->name('welcome');
    Route::prefix('/m')->group(function () {
        Route::get('about-us', 'HomeController@about')->name('about');
        Route::prefix('/about-us')->group(function () {
            Route::get('overview', 'HomeController@about')->name('overview');
            Route::get('certifications-and-memberships', 'HomeController@certifications_memberships')->name('certs');
            Route::get('the-director', 'HomeController@director')->name('director');
            Route::get('the-team', 'HomeController@team')->name('team');
        });

        Route::get('services', 'HomeController@services')->name('services');
        Route::get('projects', 'ProjectController@index')->name('projects');
        Route::get('gallery', 'HomeController@gallery')->name('gallery');
        Route::post('contact', 'EmailController@contact_us')->name('contact-send');
        Route::get('contact-us', 'HomeController@contact_page')->name('contact-us');
    });
});


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
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('/account')->group(function () {
        Route::post('delete/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('account.delete');
        Route::get('profile', [App\Http\Controllers\UserDetailsController::class, 'accountIndex'])->name('account.index');
        Route::post('profile', [App\Http\Controllers\UserDetailsController::class, 'accountStore'])->name('account.store');
        Route::get('security', [App\Http\Controllers\UserDetailsController::class, 'securityIndex'])->name('security.index');
        Route::post('security', [App\Http\Controllers\UserDetailsController::class, 'securityStore'])->name('security.store');
        Route::get('notifications', [App\Http\Controllers\UserDetailsController::class, 'notificationsIndex'])->name('notifications.index');
        Route::post('notifications', [App\Http\Controllers\UserDetailsController::class, 'notificationsStore'])->name('notifications.store');
    });
});
