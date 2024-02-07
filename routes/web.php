<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\TugasController;

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

route::get('/divisi', [DivisiController::class, 'index']);
route::get('/divisi/{id}/create', [TugasController::class, 'create']);
//route::post('/divisi/store', [TugasController::class, 'store']);
//Route::post('/tugas/store/{id}', [TugasController::class, 'store']);
Route::post('/tugas/store/{id}', [TugasController::class, 'store'])->name('tugas.store');
route::get('/divisi/{id}/detail', [DivisiController::class, 'detail']);
route::get('/divisi/{id}/halaman', [TugasController::class, 'index']);
route::get('/divisi/{id}/detail-tugas', [TugasController::class, 'detail']);
route::get('/divisi/{id}/edit', [TugasController::class, 'edit']);
route::put('/divisi/{id}/', [TugasController::class, 'update']);





