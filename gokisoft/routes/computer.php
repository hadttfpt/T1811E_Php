<?php
Route::group(['prefix' => '/product'], function () {
    Route::post('/post', 'ProductController@addProduct')->name('postStudent');
    Route::get('/list', 'ProductController@showAll')->name('showAll');
});