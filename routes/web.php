<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\BiodataController;
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


Route::get('login_user', function () {
    return view('auth.loginn');
});

Auth::routes();


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin:admin']], function () {
    Route::get('/', function () {
        return view('layouts.admin');
    });
    Route::get('profile', function () {
        return view('profile');
    });
   
    Route::resource('prodi', ProdiController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('pendaftar', PendaftarController::class);
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('biodata1', function () {
    return view('biodata.index');
});

Route::get('/admin_user', function () {
    return view(403);
});


Route::get('biodata', function () {
    return view('layouts.backuser.biodata1');
});


Route::get('daftar/jalur', function () {
    return view('layouts.daftar.daftar');
});


Route::get('daftar/jalur/form', function () {
    return view('layouts.daftar.form');
});


Route::get('try', function () {
    return view('try');
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


