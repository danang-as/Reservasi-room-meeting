<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiAdminController;
use App\Http\Controllers\ReservasiUserController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RescheduleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->namespace('App\Http\Controllers')->group(function(){
    Route::match (['get','post'], 'login','AdminController@login');
    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout_admin', 'AdminController@logout_admin');
        Route::get('/laporan/export/csv', [LaporanController::class, 'exportCSV']);
Route::get('/laporan/export/pdf', [LaporanController::class, 'exportPDF'])->name('laporan.export.pdf');

Route::resource('data_ruangan', RuanganController::class);
Route::resource('data_direktorat', DirektoratController::class);
Route::resource('data_user', DatauserController::class);
Route::resource('data_reservasi', ReservasiAdminController::class);
Route::resource('data_laporan', LaporanController::class);
    });   
});


Route::resource('reschedule', RescheduleController::class);
Route::post('reservasi/get-available-time', [ReservasiUserController::class, 'getAvailableTime'])->name('reservasi.getAvailableTime');

Route::prefix('/')->namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'UserController@loading');
    Route::match (['get','post'], 'login_user','UserController@login_user');
    Route::group(['middleware'=>['user']],function(){
        Route::resource('reservasi', ReservasiUserController::class);
        Route::get('home', 'UserController@home');
        Route::get('logout_user', 'UserController@logout_user');
        Route::get('tampilan_utama', 'UserController@tampilan_utama');
        Route::get('history', 'UserController@history');
    });   
});
