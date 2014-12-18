@extends('_master')

@section('title')
Bite Me Bouquet
@stop

@section('head')
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='title'>
	<h3>Welcome To Bite Me Bouquet!</h3>
</div>
	<div id='content'>
		<p>Founded in 2011, Bite Me Bouquet has continued to be innovative in it's approach to customizable edible and floral arrangements.  
			From baby showers to birthdays, weddings and special occasions, Bite Me Bouquet has delicious and eye-catching bouquets for your next event!
		</p>
	

		<div id='centered_options' class='btn-group' role='group' aria-label='HomePage Buttons'>
			<button type='button' class='btn btn-default'>Login</button>
			<button type='button' class='btn btn-default'>Sign Up</button>
			<button type='button' class='btn btn-default'>Browse Bouquets</button>
		</div>
	</div>	
@stop
