<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('/home');
});

Route::get('/home',function()
	{
		// get all products from db
		$products = Product::all();
		return View::make('products')->with('products',$products);
	});
Route::get('/cart',function()
	{
		// display cart
		if(Cart::total() == 0){
			return Redirect::to('/home');
		}
		$cartContent = Cart::content();
		return View::make('cart')->with('cartContent',$cartContent);
	});
Route::get('/checkout', function()
	{
		// destroy cart, get ready for new shopping 
		Cart::destroy();
		return "you just checked out....<a href='home' >start new shopping </a>";
	});
// cart management routes
Route::get('/insert/{id}','CartController@insert');
Route::get('/delete/{rowid}','CartController@delete');
Route::post('/update','CartController@update');
Route::get('/terminate','CartController@terminate');