<?php

class CartController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Cart Controller
	|--------------------------------------------------------------------------
	|
	| add to cart, remove from cart, update cart, empty cart.
	|
	*/

	public function insert($id)
	{
		$item = Product::find($id);
		Cart::add($item->id, $item->name,1, $item->price);
		return Redirect::to('cart');
	}

	public function delete($rowid)
	{
		Cart::remove($rowid);
		return Redirect::to('cart');	
	}

	public function update()
	{
		if($_POST['updater'] <= 0)
		{
			return Redirect::to("delete/".$_POST['rowid']);
		}
		Cart::update($_POST['rowid'], array('qty' => $_POST['updater']));
		return Redirect::to('cart');
	}

	public function terminate()
	{
		Cart::destroy();
		return Redirect::to('cart');
	}

}
