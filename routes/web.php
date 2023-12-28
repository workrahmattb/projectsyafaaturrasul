<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatapondokController;

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

//Route::get('/datapondok', function () {
//    return view('datapondok');
//});

Route::get('/datapondok', [DatapondokController::class, 'index'])->name('datapondok');

//ini adalah codingan untuk Tambah Data
Route::get('/tambahdata', [DatapondokController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [DatapondokController::class, 'insertdata'])->name('insertdata');


//ini adalah Codingan untuk Update Data
Route::get('/tampilkandata/{id}', [DatapondokController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DatapondokController::class, 'updatedata'])->name('updatedata');

//ini adalah codingan untuk delete data
Route::get('/delete/{id}', [DatapondokController::class, 'delete'])->name('delete');




Route::get('/postingan', function () {
    return view('postingan');//ini adalah nama folder view
});

Route::get('/tentang', function () {
    return view('tentang');//ini adalah nama folder view
});
