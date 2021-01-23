<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;

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

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // category routes
        Route::resource('category', CategoryController::class);


        // Settings routes
        Route::get('settings', [SettingController::class, 'edit'])->name('settings');
        Route::post('settings', [SettingController::class, 'update'])->name('settings.update');


        // logout
        Route::get('logout', function () {
            session()->forget('ADMIN_DATA');
            return redirect('admin');
        })->name('logout');
    });
});
