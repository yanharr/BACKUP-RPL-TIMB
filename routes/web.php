<?php

use App\Http\Controllers\WisataController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardPostsController;
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

#yanharr
Route::get('/DataUser', [UserController::class, 'showUserData'])->name('admin.home')->middleware('is_admin');
Route::get('/DataMitra', [UserController::class, 'showMitraData'])->middleware('is_admin');
Route::get('/DataWisataPending', [WisataController::class, 'showWisataDataPending'])->middleware('is_admin');
Route::get('/DataWisata', [WisataController::class, 'showWisataData'])->middleware('is_admin');
Route::get('/EditDataMitraUser/{id}', [UserController::class, 'UpdateUserData'])->middleware('is_admin');
Route::get('/EditDataWisata/{id}', [WisataController::class, 'UpdateWisataData'])->middleware('is_admin');
Route::post('/DataUserUpdate', [UserController::class, 'EditUserData'])->middleware('is_admin');
Route::post('/DataWisataUpdate', [WisataController::class, 'EditWisataData'])->middleware('is_admin');
Route::get('/DeleteDataUser/{id}', [UserController::class, 'DeleteDataUser'])->middleware('is_admin');
Route::get('/DeleteDataMitra/{id}', [UserController::class, 'DeleteDataMitra'])->middleware('is_admin');
Route::get('/DeleteDataWisata/{id}', [WisataController::class, 'DeleteWisataData'])->middleware('is_admin');

#cici landing page
Auth::routes();
Route::get('/', function () { return view('customer.home.index');});
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing.page');

//rahma
Route::get('/Mitra', [DashboardPostsController::class, 'index'])->name('mitra.home')->middleware('is_mitra');
Route::get('/TambahWisata',[DashboardPostsController::class, 'create'])->middleware('is_mitra');
Route::post('/TambahWisata',[DashboardPostsController::class, 'store'])->middleware('is_mitra');
Route::get('/dashboard',[DashboardPostsController::class, 'index'])->middleware('is_mitra');
Route::get('/Detail/{id}',[DashboardPostsController::class, 'show'])->middleware('is_mitra');
Route::get('/EditWisata/{id}', [DashboardPostsController::class, 'edit'])->middleware('is_mitra');
Route::patch('/EditWisata', [DashboardPostsController::class, 'update'])->middleware('is_mitra');
Route::get('/Delete/{id}', [DashboardPostsController::class, 'delete'])->middleware('is_mitra');
Route::resource('/dashboard', DashboardPostsController::class)->middleware('is_mitra');
Route::resource('wisatas', DashboardPostsController::class)->middleware('is_mitra');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Route::get('/review', [ReviewController::class, 'index']);
// Route::get('/admin/wisata', [WisataController::class, 'wisataAdmin']);
// Route::get('/admin/wisata/create', [WisataController::class, 'create']);
// Route::post('/admin/wisata', [WisataController::class, 'store']);
// Route::get('/admin/wisata/{wisata}/edit', [WisataController::class, 'edit']);
// Route::post('/admin/wisata/{wisata}', [WisataController::class, 'update']);
// Route::post('/admin/wisata/{wisata}/delete', [WisataController::class, 'destroy']);



