<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\MailSettingsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TermPrivacyController;
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

//login
Route::get('/', function () {
    return view('auth.login');
});
Route::match(['get', 'post'], '/login', [AdminController::class,'login'])->name('login');
//logout
Route::get('/logout', [AdminController::class,'logout'])->name('logout');
//terms & policy
Route::get('/privacy', [TermPrivacyController::class, 'index'])->name('termprivacy');
//Auth Admin Panel
Route::group(['middleware' => ['auth']], function () {
    //dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
//users
Route::resource('users',UserController::class);
// roles
Route::resource('roles',RoleController::class);
// frontend
Route::resource('frontend',FrontEndController::class);
//Category
Route::resource('category',CategoriesController::class);
//Tag
Route::resource('tag',TagsController::class);
//Media
Route::resource('media',MediaController::class);
//Comment
Route::resource('comment',CommentController::class);
// General Settings
Route::resource('general',GeneralSettingsController::class);
// Mail Settings
Route::resource('mail',MailSettingsController::class);
// Page
Route::resource('page',PagesController::class);
// Post
Route::resource('post',PostController::class);
// Privacy
Route::resource('privacy',TermPrivacyController::class);
// SubCategory
Route::resource('subcategory',SubCategoryController::class);
// General Settings
Route::resource('general',GeneralSettingsController::class);
 //change password
 Route::get('/password', [AdminController::class,'changepassword'])->name('password.index');
 Route::put('/change-Password', [AdminController::class,'password_update'])->name('password.update');
});

