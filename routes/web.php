<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('admin/login', [LoginController::class,'showAdminLogin'])->name('admin.login');


Route::group(["middleware" => "auth"], function () {
    
    Route::get('admin/dashboard', [DashboardController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('customer/dashboard', [DashboardController::class,'customerDashboard'])->name('customer.dashboard');
});
