<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FrontController;
use App\Models\Barang;

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


Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('layouts.backend');
    });
    // untuk Route Backend Lainnya
});



Route::get('/', function () {

    $barang = barang::all();
    return view('layouts.frontend', compact('barang'));
})->name('layouts.frontend');


Route::get('detail/{id}', [FrontController::class, 'show']);

// Route::get('/admin', function () {
//     return view('layouts.backend');
// })->middleware('auth');

// Route::get('/data', function () {
//     return view('layouts.backend');
// });

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', isAdmin::class]], function () {
    Route::resource('user', UserController::class)->middleware(isAdmin::class);
    });

    Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', isAdmin::class]], function () {
        Route::resource('kategori', KategoriController::class)->middleware(isAdmin::class);
        });

     Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', isAdmin::class]], function () {
        Route::resource('barang', BarangController::class)->middleware(isAdmin::class);
        });

    // untuk Route Backend Lainnya

Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Auth::routes();

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
