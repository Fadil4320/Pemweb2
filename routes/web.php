<?php

use App\Http\Controllers\TugasController;
use App\Http\Controllers\FormController;
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

Route ::get('/',function () {
    return view('welcome');
});

Route::get('/salam',function(){
    return view('salam', [
        "nama"=>"Muhamad Rizky Fadilah",
        "umur"=>19
    ]);
});

Route::get('/nilai',function(){
    return view('nilai');
});

Route::get('/formulir',function(){
    return view('formulir');
});

// Route::get('/form',[FormController::class, 'index']);
// Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/tugasform',[TugasController::class, 'index']);
Route::post('/tugashasil',[TugasController::class, 'hasil']);
