<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [AuthController::class, 'index'], function () {
//     return view('auth.login');
// });

// Route::get('/dashboard', function () {
//     return view('layouts.index')->name('dashboard');
// });

Route::middleware(['guest'])->group(function (){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'login']);

});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/petugas', [AdminController::class, 'petugas'])->middleware('userAkses:petugas');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');;
});

Route::group(['middleware' => ['userAkses:admin', 'auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::controller(ProdukController::class)->prefix('produk')->group(function () {
        Route::get('','index')->name('produk');
        Route::get('tambah', 'tambah')->name('formproduk');
        Route::post('tambah', 'simpan')->name('produk.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('produk.edit');
        Route::patch('edit/{id}', 'update')->name('produk.edit.update');
        Route::get('hapus/{id}', 'hapus')->name('produk.hapus');
    });
});