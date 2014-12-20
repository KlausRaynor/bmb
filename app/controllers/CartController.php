<?php

class CartController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
    
        parent::__construct();

    $this->beforeFilter('guest', 
        array(
                'only' => array('getLogin', 'getSignup')
        ));
    }


	public function index()
	{
		return View::make('cart_index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cart_add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$cart = Cart::findOrFail($id);
		} catch(Exception $e) {

			return Redirect::to('/cart')->with('flash_message', 'Error displaying shopping cart!');
		}

		return View::make('cart_show')->with('cart', $cart);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		#edit contents of cart

		try {
			$cart = Cart::findOrFail($id);
		} catch(Exception $e) {

			return Redirect::to('/cart')->with('flash_message', 'Cart not found!');
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		try {
			$cart = Cart::findOrFail($id);

		} catch(Exception $e) {

			return Redirect::to('/cart')->with('flash_message', 'Cart not found!');
		}

		$cart->name = Input::get('name');
		$cart->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			$cart = Cart::findOrFail($id);

		} catch(Exception $e) {

			return Redirect::to('/cart')->with('flash_message', 'Cart not found!');
		}	


		Cart::destroy($id);

		return Redirect::action('CartController@index')->with('flash_message', 'Your Cart has been emptied!');
	}


}
