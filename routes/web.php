<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
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

Route::get('/data', [EmployeController::class, 'index'])->name('data');

Route::get('/tambahdata', [EmployeController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[EmployeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[EmployeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeController::class, 'updatedata'])->name('updatedata');
