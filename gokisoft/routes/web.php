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

Route::get('/danh-sach-san-pham',function (){
    return view('product');
});

Route::get('/danh-sach-san-pham-method-2',function (){
    return view('list');
});
//url->view

Route::post('product/add',[
    'as'=> 'add',
    'uses'=> 'ProductController@add'
]);

Route::get('product/view',function(){
    return view('product.add');
})->name('view');

Route::get('hotel/view',[
    'as'=> 'showAll',
    'uses'=> 'HotelController@showAll'
]);

Route::get('hotel/detail',[
    'as'=> 'showDetail',
    'uses'=> 'HotelController@showDetail'
]);

Route::get('/san-pham',[
    'as' => 'san-pham',
    'uses' => 'sanPham@show'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
