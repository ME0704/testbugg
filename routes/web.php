<?php

use App\Http\Controllers\CitizenController;
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
    return view('form');
});
Route::get('/', [CitizenController::class, 'index']);
Route::post('/store', [CitizenController::class, 'store']);
Route::get('/display', [CitizenController::class, 'display']);
Route::get('/show/{id}', [CitizenController::class, 'show']);
Route::post('/update/{id}', [CitizenController::class, 'update']);
Route::get('/edit/{id}', [CitizenController::class, 'edit']);
