<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
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
    return view('/layouts/main');
});

// Route::get('/bingung', function () {
//     return view('/layouts/bingung');
// });

// Route::get('/capek', function () {
//     return view('/layouts/capek');
// });

// Route::get('/licik', function () {
//     return view('/layouts/licik');
// });

// Route::get('/stress', function () {
//     return view('/layouts/stress');
// });

// Route::get('Laprak', [LaprakController::class, 'index']);

// Route::get('laprak', function () {
//     return view('laprak');
// });
// Route::get('Laprak', 'LaprakController@index');


// Route::get('/tugas', [tugas::class, 'panggil']);

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class, 'create']) -> name('buku.create');
Route::post('/buku/add', [BukuController::class, 'store']) -> name('buku.store'); 


Route::post('/buku/delete/{id}', [BukuController::class, 'destroy']) -> name('buku.destroy');
