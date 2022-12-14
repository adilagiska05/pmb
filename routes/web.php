<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('layouts.admin');
    });
    Route::get('profile', function () {
        return view('profile');
    });

    Route::resource('prodi', ProdiController::class);
    Route::resource('informasi', InformasiController::class);
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   
});

Route::get('/errors', function () {
    return view('403');
});


// Route::get('coba_admin', function () {
//     return view('admin');
// });

// Route::get('loggg', function () {
//     return view('layouts.log');
// });

// Route::get('loggg', function () {
//     return view('layouts.log');
// });


// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     });
    
    // Route::resource('wali', WaliController::class);
    // Route::resource('guru', GuruController::class);

// });

Route::get('user', function () {
    return view('layouts.user');
});


Route::get('daftar/jalur', function () {
    return view('layouts.daftar.daftar');
});


Route::get('daftar/jalur/form', function () {
    return view('layouts.daftar.form');
});