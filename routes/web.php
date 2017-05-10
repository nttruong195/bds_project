<?php

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

Route::get('/upload', function () {
    return view('uploadPhoto');
});

Route::post('login', 'LoginController@login');

// Route::get('/a', function () {
//     $LoaiKhachHang = new App\TaiKhoan;
//      $LoaiKhachHang->HoTen = "1";
//      $LoaiKhachHang->DiaChi = "1";
//      $LoaiKhachHang->SoDienThoai = "1";
//      $LoaiKhachHang->Anh = "1";
//      $LoaiKhachHang->NgaySinh = "2017-05-05";
//         $LoaiKhachHang->TenTaiKhoan = "1";
//         $LoaiKhachHang->password = Hash::make('truong12');
//         $LoaiKhachHang->save();
// });






Route::resource('LoaiSP', 'ControllerLoaiSP');
Route::resource('DuAn', 'ControllerDuAn');
Route::resource('ChiTietNo', 'ControllerNo');
Route::resource('HopDong', 'ControllerHopDong');
Route::resource('KhachHang', 'ControllerKhachHang');
Route::resource('LoaiKhachHang', 'ControllerLoaiKhachHang');
Route::resource('SanPham', 'ControllerSanPham');
Route::resource('TaiKhoan', 'ControllerTaiKhoan');
Route::resource('ThongTinNha', 'ControllerThongTinNha');
Route::resource('UuDai', 'ControllerUuDai');
Route::resource('TaiKhoan', 'ControllerTaiKhoan');


