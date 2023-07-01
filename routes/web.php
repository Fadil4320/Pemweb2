<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PesananController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function(){
    return view('salam', [
        "nama"=> "Muhamad Rizky Fadilah",
        "umur"=>19
    ]);
});

Route::get('/nilai', function(){
    return view('nilai');
});

Route::get('/formulir',function(){
    return view('formulir');
});

Route::get('/form',[FormController::class, 'index']);
Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/tugasform',[TugasController::class, 'index']);
Route::post('/tugashasil',[TugasController::class, 'hasil']);

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[ProdukController::class, 'index']);
        Route::get('/logout',[ProdukController::class, 'logout']);
        Route::get('/produk',[ProdukController::class, 'index']);
        Route::get('/produk/create',[ProdukController::class, 'create']);
        Route::post('/produk/store',[ProdukController::class, 'store']);
        Route::get('/kategori',[KategoriController::class, 'kategori']);
        Route::get('/kategori/create',[KategoriController::class, 'create']);
        Route::post('/kategori/store',[KategoriController::class, 'store']);
        Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
        Route::post('/kategori/update/{id}',[KategoriController::class, 'update']);
        Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);
        Route::get('/pesanan',[PesananController::class, 'pesanan']);
        Route::get('/pesanan/create',[PesananController::class, 'create']);
        Route::post('/pesanan/store',[PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}',[PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
    });
});

Route::prefix('frontend')->group(function () {
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/about',[FrontendController::class, 'about']);
    Route::get('/produk',[FrontendController::class, 'produk']);
    Route::get('/store',[FrontendController::class, 'store']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');