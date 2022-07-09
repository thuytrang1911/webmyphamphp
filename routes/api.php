<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\api\apisanphamcontroller;
Route::resource('products', apisanphamcontroller::class);

use App\Http\Controllers\api\apithuonghieucontroller;
Route::resource('thuonghieus', apithuonghieucontroller::class);

use App\Http\Controllers\api\apiloaisanphamcontroller;
Route::resource('dongs', apiloaisanphamcontroller::class);

use App\Http\Controllers\api\apinhanviencontroller;
Route::resource('nhanviens', apinhanviencontroller::class);

use App\Http\Controllers\api\apinhacungcapcontroller;
Route::resource('nhacungcaps', apinhacungcapcontroller::class);

use App\Http\Controllers\api\apikhachhangcontroller;
Route::resource('khachhangs', apikhachhangcontroller::class);

use App\Http\Controllers\api\apiblogcontroller;
Route::resource('blogs', apiblogcontroller::class);

use App\Http\Controllers\api\apihdnhapcontroller;
Route::resource('hdnhaps', apihdnhapcontroller::class);

use App\Http\Controllers\api\apihdbancontroller;
Route::resource('hdbans', apihdbancontroller::class);

Route::get('/sanpham/getSPThuongHieu/{id}',[apisanphamcontroller::class,'getSPThuongHieu']);
Route::get('/sanpham/getSPDong/{id}',[apisanphamcontroller::class,'getSPDong']);
Route::get('/sanpham/listSPMoi',[apisanphamcontroller::class,'listSPMoi']);
Route::get('/sanpham/listSPBanChay',[apisanphamcontroller::class,'listSPBanChay']);
Route::get('/sanpham/listDong/{id}',[apisanphamcontroller::class,'listDong']);
Route::get('/sanpham/listTH/{id}',[apisanphamcontroller::class,'listTH']);
Route::get('/hdbans/LayCTHDBan/{id}',[apihdbancontroller::class,'LayCTHDBan']);
Route::get('/hdnhaps/LayCTHDNhap/{id}',[apihdnhapcontroller::class,'LayCTHDNhap']);

Route::get('/dki',[apilogincontroller::class,'getsignup']);
Route::post('/dki',[apilogincontroller::class,'postsignup']);
// Route::get('/Homepage/login',[HomepageController::class,'getlogin']);
// Route::post('/Homepage/login',[HomepageController::class,'postlogin']);
// Route::get('/Homepage/logout',[HomepageController::class,'getlogout']);

route::resource("kh",apikhachhangcontroller::class);
route::get("kh1/get/{tk}&{mk}",[apikhachhangcontroller::class,"show2"]);
route::get("kh1/get/{tk}",[apikhachhangcontroller::class,"show3"]);