<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\TableBukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/admin', function () {
    return view('admin-dash');
});

Route::get('/admin/table-buku', [TableBukuController::class, 'index']);

Route::get('/admin/table-request', [TableBukuController::class, 'rental_request']);

Route::get('/admin/table-buku/tambah', [TableBukuController::class, 'tambah_buku']);

Route::get('/admin/table-buku/delete/{id}', [TableBukuController::class, 'destroy']);

Route::get('/admin/table-buku/update/{id}', [TableBukuController::class, 'edit']);

Route::post('/admin/table/edit/{id}', [TableBukuController::class, 'update']);

Route::get('/admin/table/edit/{id}', [TableBukuController::class, 'update']);



Route::get('/admin/table-penulis', [TableBukuController::class, 'penulis']);

Route::get('/admin/table-penulis/delete/{id}', [TableBukuController::class, 'penulis_delete']);

Route::get('/admin/table-penulis/update/{id}', [TableBukuController::class, 'penulis_update']);

Route::get('/admin/table-penulis/tambah/', [TableBukuController::class, 'penulis_create']);

Route::post('/admin/table/tambah-penulis/', [TableBukuController::class, 'penulis_create_act']);




Route::get('/admin/table-penerbit/', [TableBukuController::class, 'penerbit']);




Route::post('/admin/table/tambah', [TableBukuController::class, 'create']);

Route::post('/admin/table-penulis/', [TableBukuController::class, 'table_penulis']);

//Auth
Route::get('/login', [ClientController::class, 'login']);
Route::get('/register', [ClientController::class, 'register']);
Route::get('/resetpw', [ClientController::class, 'resetpw']);


//user page
Route::get('/landing', [ClientController::class, 'landing']);
Route::get('/home', [ClientController::class, 'home']);
Route::get('/formpinjam', [ClientController::class, 'formpinjam']);
Route::get('/favorite', [ClientController::class, 'favorite']);
Route::get('/borrow', [ClientController::class, 'borrow']);
Route::get('/history', [ClientController::class, 'history']);
Route::get('/desk', [ClientController::class, 'desk']);
Route::get('/profile', [ClientController::class, 'profile']);

