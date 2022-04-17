<?php

use App\Http\Controllers\WisataController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


// Route::get('/wisata', function () {
//     return view('customer.wisata.index');
// });

Route::get('/about', function () {
    return view('customer.about.index');
});

Route::get('/help', function () {
    return view('customer.help.index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});
// Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/wisata/{wisata}/show', [WisataController::class, 'UserLookDetailWisata'])->name('wisata.show');
Route::get('/wisata', [WisataController::class, 'UserLookWisata'])->name('wisata.index');

Route::get('/DataUser', [UserController::class, 'showUserData'])->name('admin.home')->middleware('is_admin');
Route::get('/DataMitra', [UserController::class, 'showMitraData']);
Route::get('/DataWisataPending', [WisataController::class, 'showWisataDataPending']);
Route::get('/DataWisata', [WisataController::class, 'showWisataData']);
Route::get('/EditDataMitraUser/{id}', [UserController::class, 'UpdateUserData']);
Route::get('/EditDataWisata/{id}', [WisataController::class, 'UpdateWisataData']);
Route::post('/DataUserUpdate', [UserController::class, 'EditUserData']);
Route::post('/DataWisataUpdate', [WisataController::class, 'EditWisataData']);
Route::get('/DeleteDataUser/{id}', [UserController::class, 'DeleteDataUser']);
Route::get('/DeleteDataMitra/{id}', [UserController::class, 'DeleteDataMitra']);
Route::get('/DeleteDataWisata/{id}', [WisataController::class, 'DeleteWisataData']);

Auth::routes();
Route::get('/', function () { return view('customer.home.index');});
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing.page');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Route::get('/review', [ReviewController::class, 'index']);
// Route::get('/admin/wisata', [WisataController::class, 'wisataAdmin']);
// Route::get('/admin/wisata/create', [WisataController::class, 'create']);
// Route::post('/admin/wisata', [WisataController::class, 'store']);
// Route::get('/admin/wisata/{wisata}/edit', [WisataController::class, 'edit']);
// Route::post('/admin/wisata/{wisata}', [WisataController::class, 'update']);
// Route::post('/admin/wisata/{wisata}/delete', [WisataController::class, 'destroy']);

