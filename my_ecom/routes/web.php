<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;

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

Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => ['adminAuth']], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // category routes
    Route::get('admin/category', [CategoryController::class, 'index'])->name('category');


    // Settings routes
    Route::get('admin/settings', [SettingController::class, 'edit'])->name('settings');
    Route::post('admin/settings', [SettingController::class, 'update'])->name('settings.update');



    // logout
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_DATA');
        return redirect('admin');
    })->name('logout');
});
