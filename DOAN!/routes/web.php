<?php

use App\Http\Controllers\HomeController;
use  App\Http\Controllers\QuanLyController;
use  App\Http\Controllers\SanphamController;
use App\Models\QuanLyNhanVien;
use App\Models\sanpham;
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




Route::resource('danhsachnhanvien',QuanLyController::class);
Route::get('/quanlynhanvien', function () {
    return view('admin.dashboard');
});

// Route::get('/', function () {
//     return view('home.home');
// });

Route::resource('/trangchu',HomeController::class);

