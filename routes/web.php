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
Route::get('layout',[
    'uses' => 'HomeController@getLayout',
    'as' => 'trangchu'
]);
Route::get('hosothanhvien',[
    'uses' => 'HomeController@getHoSoThanhVien',
    'as'=> 'ho-so-thanh-vien'
]);
Route::post('hosothanhvien',[
    'uses' => 'HomeController@postHoSoThanhVien',
    'as'=> 'ho-so-thanh-vien'
]);
Route::get('editthanhvien-{id}',[
    'uses'=>'HomeController@getEdit',
    'as'=>'thay-doi-thong-tin'
]);
Route::post('editthanhvien-{id}',[
    'uses'=>'HomeController@postEdit',
    'as'=>'thay-doi-thong-tin'
]);
Route::get('deleted',[
    'uses'=>'HomeController@getDeleted',
    'as'=>'deleted'
]);
Route::get('ghinhanthanhtic',[
    'uses' => 'HomeController@getGhiNhanThanhTich',
    'as'=> 'ghi-nhan-thanh-tich'
]);
Route::post('ghinhanthanhtic',[
    'uses' => 'HomeController@postGhiNhanThanhTich',
    'as'=> 'ghi-nhan-thanh-tich'
]);
Route::get('danhsachthanhvien',[
    'uses' => 'HomeController@getDanhSachThanhVien',
    'as' => 'danh-sach-thanh-vien'
]);
Route::get('ghinhanketthuc',[
    'uses' => 'HomeController@getGhiNhanKetThuc',
    'as' => 'ghi-nhan-ket-thuc'
]);
Route::post('ghinhanketthuc',[
    'uses' => 'HomeController@postGhiNhanKetThuc',
    'as' => 'ghi-nhan-ket-thuc'
]);
Route::get('tanggiamthanhvien',[
    'uses' => 'HomeController@getTangGiamThanhVien',
    'as' => 'tang-giam-thanh-vien'
]);
Route::get('thanhtichthanhvien',[
    'uses' => 'HomeController@getThanhTichThanhVien',
    'as' =>'thanh-tich-thanh-vien'
]);
Route::get('deleted',[
    'uses'=>'HomeController@getDeleted',
    'as'=>'deleted'
]);
Route::get('search',[
    'uses'=>'HomeController@getSearch',
    'as'=>'search'
]);
