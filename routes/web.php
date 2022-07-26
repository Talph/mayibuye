<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController as EmailAdminController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController as ProjectAdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserDetailsController;
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

Auth::routes();
Route::get('/', function () {
    return view('website.welcome');
})->name('welcome');

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::controller(HomeController::class)->group(function(){
    Route::get('services','services')->name('services');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::post('contact', 'contact_us')->name('contact-send');
    Route::get('contact-us', 'contact_page')->name('contact-us');
    Route::prefix('/about-us')->group(function () {
        Route::get('/', 'about')->name('about');
        Route::get('overview', 'about')->name('overview');
        Route::get('certifications-and-memberships', 'certifications_memberships')->name('certs');
        Route::get('the-director', 'director')->name('director');
        Route::get('the-team', 'team')->name('team');
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
        Route::post('{client:slug}/client-logo-update', [ClientController::class, 'uploadLogo'])->name('image.store');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
        Route::prefix('/ad')->group(function () {
            Route::resource('projects', ProjectAdminController::class);
            Route::resource('posts', BlogPostController::class);
            Route::get('/posts/trash', [BlogPostController::class, 'trash'])->name('post.trash');
            Route::resource('categories', ProjectCategoryController::class);
            Route::resource('postcategories', BlogCategoryController::class);
            Route::resource('roles', RolesController::class);
            Route::resource('users', UserController::class);
            Route::resource('emails', EmailAdminController::class);
            Route::resource('clients', ClientController::class);
            Route::post('{client:slug}/client-logo-update', [ClientController::class, 'uploadLogo'])->name('image.store');
        });
    });


    Route::prefix('/account')->group(function () {
        Route::post('delete/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('account.delete');
        Route::controller(UserDetailsController::class)->group(function(){
            Route::get('profile', 'accountIndex')->name('account.index');
            Route::post('profile','accountStore')->name('account.store');
            Route::get('security', 'securityIndex')->name('security.index');
            Route::post('security', 'securityStore')->name('security.store');
            Route::get('notifications', 'notificationsIndex')->name('notifications.index');
            Route::post('notifications', 'notificationsStore')->name('notifications.store');
        });
    });

});
