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

//Homepage to BiteMeBouquet
Route::get('/', function()
{
	return View::make('index');
});

//Custom Order page to edit order to customer liking
Route::get('/custom', function() {

	return View::make('custom');
});

//Custom Order POST to confirm customized order
Route::post('/custom', function() {

	return 'Customized order shown here!';
});

//Bouquet Product Page/ search results
Route::get('/bouquet', function() {

	return View::make('bouquet');
});

//ABOUT US, FAQ page
Route::get('/about', function() {

	return View::make('about');
});


//Feedback form
Route::get('/feedback', function() {

	return View::make('feedback');
});

//Process Feedback form with POST
Route::post('/feedback', function() {

	return 'FEEDBACK FORM SUBMITTED!!';
});

//Add products to shopping cart
Route::get('/cart', function() {

	return View::make('cart');
});

//Shopping cart edit
Route::post('/cart', function() {

	return 'YOU EDITED YOUR CART!';
});

//Order placed successfully
Route::get('/success', function() {

	return View::make('success');
});

//User Signup Page
Route::get('/signup', function() {

	return View::make('signup');
});

//user signup processed/confirmation
Route::post('/signup', function() {

	return 'User successfully signed up!';
});

//User Login FORM
Route::get('/login', function() {

	return View::make('login');
});

//Process Login
Route::post('/login', function() {

	return 'Logged in successfully!';
});

//Different bouquet types including a particular type of fruit
Route::get('/bouquets/{type?}', function($type) {
	return 'Here are the beautiful bouquets that include';
});

Route::get('/new', function() {

	$view = '<form method="POST">';
	$view .= 'Arrangement: <input type="text" name="title">';
	$view .= '<input type="submit">';
	$view .= '</form>';
	return $view;
});

Route::post('/new', function() {

	$input = Input::all();
	print_r($input);
});

Route::get('practice', function() {
	echo App::environment();
});