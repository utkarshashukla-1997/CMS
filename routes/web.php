<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
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
 //change password
 Route::get('/password', [AdminController::class,'changepassword'])->name('password.index');
 Route::put('/change-Password', [AdminController::class,'password_update'])->name('password.update');
});

