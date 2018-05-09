<?php

use Gloudemans\Shoppingcart\Facades\Cart;



Route::get('/','landingPagesController@index');
Route::get('shop','shopController@index')->name('shop.index');
Route::get('shop/{slug}','shopController@show')->name('shop.show');
Route::get('cart','cartsController@index')->name('cart.index');
Route::post('cart','cartsController@store')->name('cart.store');
Route::get('empty',function(){
	Cart::destroy();
});


    
// Route::get('products', function () {
//     return view('frontend.products');
// });
