<?php

use App\Http\Controllers\CatatanNegaraController;
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


Route::get('/home', [CatatanNegaraController::class, 'index']) ->name('home');
Route::get('/input', [CatatanNegaraController::class, 'create']) ->name('input');
Route::post('/input', [CatatanNegaraController::class, 'store']) ->name('store');
Route::get('/home/{id}', [CatatanNegaraController::class, 'show']) ->name('show');
Route::get('/edit/{id}', [CatatanNegaraController::class, 'edit']) ->name('edit');
Route::put('/update/{id}', [CatatanNegaraController::class, 'update']) ->name('update');
Route::delete('/delete/{id}', [CatatanNegaraController::class, 'destroy']) ->name('destroy');

