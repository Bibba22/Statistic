<?php

use Illuminate\Support\Facades\Route;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTunggalController;
use App\Http\Controllers\DatafrekwensiController;
use App\Http\Controllers\DataDeskripsiController;
use App\Http\Controllers\DatabergolongController;


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
    return view('pages/index');
})->name("index");

Route::get('/data_tunggal', [DataTunggalController::class, 'index'])->name("data_tunggal");
Route::get('/data_tunggal/create', [DataTunggalController::class, 'create'])->name("data_tunggal.create");
Route::post('/data_tunggal/store', [DataTunggalController::class, 'store'])->name("data_tunggal.store");
Route::post('/data_tunggal/delete/{id}', [DataTunggalController::class, 'destroy'])->name("data_tunggal.destroy");
Route::get('/data_tunggal/edit/{id}', [DataTunggalController::class, 'edit'])->name("data_tunggal.edit");

Route::get('/data_frekuensi', [DataFrekwensiController::class, 'frekwensi'])->name("data_frekwensi");

Route::get('/data_deskripsi', [DatadeskripsiController::class, 'getDataDeskripsiView'])->name("data_deskripsi");

Route::get('/data_bergolong', [DataBergolongController::class, 'data_bergolong'])->name("data_bergolong");
