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

	return 'Customize your order here';
});

//Custom Order POST to confirm customized order
Route::post('/custom', function() {

	return 'Customized order shown here!';
});

//Bouquet Showcase/ search results
Route::get('/bouquet', function() {

	return View::make('bouquet');
});

//ABOUT US, FAQ page
Route::get('/about', function() {

});


//Feedback form
Route::get('/feedback', function() {

});

//Process Feedback form with POST
Route::post('/feedback', function() {

});

//Add products to shopping cart
Route::get('/cart', function() {

});

//Shopping cart edit
Route::get('/cart', function() {

});

//Order placed
Route::get('/success', function() {

});

//User Signup Page
Route::get('/signup', function() {

});

//user signup processed/confirmation
Route::post('/signup', function() {

});

//User Login
Route::get('/login', function() {

});

//Process Login
Route::post('/login', function() {

});

//User Logout
Route::get('/logout', function() {

});

//process logout
Route::post('/logout', function() {

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