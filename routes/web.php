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
    return 'dsdas';
});
Route::get('sinhvien/{id}', 'sinhVienControll@displayUrl');
Route::get('tinhtoan','sinhVienControll@viewFormTinhToan');
Route::get('adsdsa','sinhVienControll@tinhToanDiem')->name('tinhToan');

Route::get('login', function()
{
    return view("testValidateLogin");
});
Route::get('test3', function () {
    return view("calendar");
});
Route::post('/processLog','controlProcess@kiemTraDangNhap' )->name('processLogin');
Route::get('test2', "sinhVienControll@capNhatHeSo");