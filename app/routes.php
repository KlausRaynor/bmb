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


/*****BELOW ARE ROUTES FOR TESTING PURPOSES ONLY*****/
Route::get('practice', function() {
	echo App::environment();
});


//TEST ROUTE FOR ENVIRONMENT
Route::get('/get-environment', function() {

	echo "Environment: " .App::environment();
});

//TEST ROUTE ERROR TRIGGER
Route::get('/trigger-error', function() {
	#NO FUBAR CLASS, WILL CREATE EXCEPTION
	$foo = new Foobar;
});

//MYSQL TEST

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});

//DEBUG ROUTE

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});