<?php

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
use App\Http\Controllers\sanphamcontroller;
use App\Http\Controllers\dongsanphamcontroller;
use App\Http\Controllers\khachhangcontroller;
use App\Http\Controllers\nhacungcapcontroller;
use App\Http\Controllers\nhanviencontroller;
use App\Http\Controllers\apilogincontroller;

Route::get('/index', function () {
    return view('index');
});

Route::get('/chitiet', function () {
    return view('chitiet');
});

Route::get('/baiviet', function () {
    return view('baiviet');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/banchay', function () {
    return view('banchay');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/productbybrand', function () {
    return view('productbybrand');
});

Route::get('/product_line', function () {
    return view('product_line');
});

Route::get('/admin/products',function(){
    return view('admin.sanpham');
});

Route::get('/admin/ha',function(){
    return view('admin.sanpham1');
});

Route::get('/admin/blog',function(){
    return view('admin.blog');
});

Route::get('/cart',function(){
    return view('cart');
});
Route::get('/checkout',function(){
    return view('checkout');
});
Route::get('/dki',function(){
    return view('dki');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/sign_up',function(){
    return view('sign_up');
});

Route::get('/admin/nv',function(){
    return view('admin.nv');
});

Route::get('/admin/thuonghieus',function(){
    return view('admin.thuonghieu');
});

Route::get('/admin/brand',function(){
    return view('admin.brand');
});

Route::get('/admin/dongs',function(){
    return view('admin.dongsanpham');
});
Route::get('/admin/dong',function(){
    return view('admin.dong');
});


Route::get('/admin/nhanviens',function(){
    return view('admin.nhanvien');
});

Route::get('/admin/nhacungcaps',function(){
    return view('admin.nhacungcap');
});
Route::get('/admin/nhacc',function(){
    return view('admin.nhacc');
});

Route::get('/admin/khachhangs',function(){
    return view('admin.khachhang');
});
Route::get('/admin/customer',function(){
    return view('admin.customer');
});

Route::get('/admin/hdnhaps',function(){
    return view('admin.hdnhaps');
});
Route::get('/admin/hdbans',function(){
    return view('admin.hdbans');
});

Route::get('/dki',[apilogincontroller::class,'getsignup']);
Route::post('/dki',[apilogincontroller::class,'postsignup']);