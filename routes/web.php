<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiKhachHangsController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\HopDongController;
use App\Http\Controllers\HoaDonController;
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

/*
Route::get('/', function () {
    //return view('welcome');
});
*/
Route::get('/', [LoaiKhachHangsController::class, 'index']);
Route::resource('/loaikhachhangs', LoaiKhachHangsController::class);
Route::resource('/khachhang', KhachHangController::class);
Route::resource('/hopdong', HopDongController::class);
Route::resource('/hoadon', HoaDonController::class);