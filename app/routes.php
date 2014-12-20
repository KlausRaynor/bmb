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
Route::get('/', 'IndexController@getIndex');

//Default Cart Routing
Route::get('/cart', 'CartController@index');
Route::get('/cart/create', 'CartController@create');
Route::post('/cart', 'CartController@store');
Route::get('/cart/{cart_id}', 'CartController@show');
Route::get('/cart/{cart_id}/edit', 'CartController@edit');
Route::put('/cart/{cart_id}', 'CartController@update');
Route::delete('/cart/{cart_id}', 'CartController@destroy');

//User Routing

#signup
Route::get('/signup', 'UserController@getSignup');
Route::post('signup', 'UserController@postSignup');

#login
Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');

#logout
Route::get('/logout', 'UserController@getLogout');

//Different bouquet types including a particular type of fruit
Route::get('/bouquets/{type?}', function($type) {
	return 'Here are the beautiful bouquets that include';
});

//Bouquet Product Page/ search results
Route::get('/bouquet', function() {

	return View::make('bouquet');
});

//ABOUT US, FAQ page
Route::get('/about', function() {

	return View::make('about');
});








/****************/
/*UNUSED ROUTES*/
/****VVVVV*****/






















//Feedback form
Route::get('/feedback', function() {

	return View::make('feedback');
});

//Process Feedback form with POST
Route::post('/feedback', function() {

	return 'FEEDBACK FORM SUBMITTED!!';
});


//Custom Order page to edit order to customer liking
Route::get('/custom', function() {

	return View::make('custom');
});

//Custom Order POST to confirm customized order
Route::post('/custom', function() {

	return 'Customized order shown here!';
});
/******************************************************/
/*****************************************************/
/*****BELOW ARE ROUTES FOR TESTING PURPOSES ONLY*****/
/***************************************************/
/**************************************************/
/*************************************************/
/************************************************/
/***********************************************/
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

//CRUD CREATING ROUTE

Route::get('/practice-creating', function() {

/*
POPULATING BOUQUET TABLE	
	#Instantiate Object
	$bouquet = new Bouquet();
	$bouquet->name = "Fruit Cone";
	$bouquet->price = 3;
	$bouquet->image = "/images/cone.jpg";
	$bouquet->save();

	$bouquet2 = new Bouquet();
	$bouquet2->name = "Watermelon Flower";
	$bouquet2->price = 100;
	$bouquet2->image = "/images/watermelon_flower.jpg";
	$bouquet2->save();

	$bouquet3 = new Bouquet();
	$bouquet3->name = "Palm Bouquet";
	$bouquet3->price = 60;
	$bouquet3->image = "/images/palm_bouquet.jpg";
	$bouquet3->save();

	$bouquet4 = new Bouquet();
	$bouquet4->name = "Fruit Platter";
	$bouquet4->price = 40;
	$bouquet4->image = "/images/fruit_platter.jpg";
	$bouquet4->save();

	$bouquet5 = new Bouquet();
	$bouquet5->name = "Fruit Platter 2";
	$bouquet5->price = 75;
	$bouquet5->image = "/images/fruit_platter2.jpg";
	$bouquet5->save();

	$bouquet6 = new Bouquet();
	$bouquet6->name = "Watermelon Floral Carve";
	$bouquet6->price = 50;
	$bouquet6->image = "/images/watermelon_floral_carve.jpg";
	$bouquet6->save();

	$bouquet7 = new Bouquet();
	$bouquet7->name = "Baby Carriage";
	$bouquet7->price = 125;
	$bouquet7->image = "/images/baby_carriage.jpg";
	$bouquet7->save();

	$bouquet8 = new Bouquet();
	$bouquet8->name = "Lemon Cups";
	$bouquet8->price = 150;
	$bouquet8->image = "/images/lemon_cups.jpg";
	$bouquet8->save();

	$bouquet9 = new Bouquet();
	$bouquet9->name = "Watermelon Platter";
	$bouquet9->price = 150;
	$bouquet9->image = "/images/watermelon_platter.jpg";
	$bouquet9->save();

	$bouquet10 = new Bouquet();
	$bouquet10->name = "Carved Melon Platter";
	$bouquet10->price = 150;
	$bouquet10->image = "/images/melon_carve_plater.jpg";
	$bouquet10->save();
	return 'New bouquets added to your database!';

*/
});

//CRUD READING ROUTE
Route::get('/practice-reading', function() {
	$bouquets = Bouquet::all();

	if($bouquets->isEmpty() != TRUE) {

		foreach($bouquets as $bouquet) {

			echo $bouquet->name.'<br>';
		}
	} else {
		return 'No bouquets found';
	}
});


//CRUD UPDATING ROUTE
Route::get('/practice-updating', function() {

  
    $bouquet = Bouquet::where('name', 'LIKE', '%Fruit%')->first();


    if($bouquet) {

     
        $bouquet->name = 'Sweet Fruit Cone';

   
        $bouquet->save();

        return "Update complete; check the database to see if your update worked...";
    }
    else {
        return "Bouquet not found, can't update.";
    }

});

#CRUD DELETING ROUTE
Route::get('/practice-deleting', function() {

 
    $bouquet = Bouquet::where('name', 'LIKE', '%Palm%')->first();

    if($bouquet) {

        $bouquet->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - Bouquet not found.";
    }

});