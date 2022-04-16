<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;




/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| */






Route::get('/DataUser', [UserController::class, 'showUserData']);
Route::get('/DataMitra', [UserController::class, 'showMitraData']);
Route::get('/DataWisataPending', [WisataController::class, 'showWisataDataPending']);
Route::get('/DataWisata', [WisataController::class, 'showWisataData']);
Route::get('/EditDataMitraUser/{id}', [UserController::class, 'UpdateUserData']);
Route::get('/EditDataWisata/{id}', [WisataController::class, 'UpdateWisataData']);
Route::post('/DataUserUpdate',[UserController::class, 'EditUserData']);
Route::post('/DataWisataUpdate',[WisataController::class, 'EditWisataData']);

Route::get('/DeleteDataUser/{id}',[UserController::class, 'DeleteDataUser']);
Route::get('/DeleteDataMitra/{id}',[UserController::class, 'DeleteDataMitra']);

Route::get('/DeleteDataWisata/{id}', [WisataController::class, 'DeleteWisataData']);