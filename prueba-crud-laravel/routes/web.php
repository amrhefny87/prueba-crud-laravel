<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DocumentController::class, 'index'])->name('index');

Route::get('/create',[DocumentController::class,'create'])->name('create');

Route::post('/',[DocumentController::class,'store'])->name('store');

Route::get('/delete/{id}',[DocumentController::class,'destroy'])->name('delete');

Route::get('/edit',[DocumentController::class,'edit'])->name('edit');

Route::put('/update/{id}',[DocumentController::class,'update'])->name('update');




