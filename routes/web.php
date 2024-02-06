<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiUserController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\LaporanController;

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
        Route::get('logout', 'AdminController@logout');
    });   
});

Route::get('/laporan/export/csv', [LaporanController::class, 'exportCSV']);
Route::get('/laporan/export/pdf', [LaporanController::class, 'exportPDF'])->name('laporan.export.pdf');

Route::resource('data_ruangan', RuanganController::class);
Route::resource('data_direktorat', DirektoratController::class);
Route::resource('data_user', DatauserController::class);
Route::resource('data_reservasi', ReservasiController::class);
Route::resource('data_laporan', LaporanController::class);
Route::resource('reservasi', ReservasiUserController::class);
Route::post('reservasi/get-available-time', [ReservasiUserController::class, 'getAvailableTime'])->name('reservasi.getAvailableTime');

Route::prefix('/')->namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'UserController@loading');
    Route::match (['get','post'], 'login_user','UserController@login_user');
    Route::group(['middleware'=>['user']],function(){
        Route::get('home', 'UserController@home');
        Route::get('tampilan_utama', 'UserController@tampilan_utama');
        Route::get('pendukung_reservasi', 'UserController@pendukung_reservasi');
        Route::get('konfrim_reservasi', 'UserController@konfrim_reservasi');
        Route::get('reschedule', 'UserController@reschedule');
        Route::get('pendukung_reschedule', 'UserController@pendukung_reschedule');
        Route::get('konfrim_reschedule', 'UserController@konfrim_reschedule');
        Route::get('history', 'UserController@history');
    });   
});

