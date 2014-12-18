@extends('_master')

@section('title')
	New User
@stop

@section('content')
<div id='content'>
	<h3>Sign up to order custom bouquets!</h3>

@foreach($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach

<form method='POST' action='/signup'>
	<label for'signup'>First Name:</label>
		<input type="text" name="first_name">
	<label for'signup'>Last Name:</label>
		<input type="text" name="last_name">	
	<label for'signup'>Email:</label>
		<input type="text" name="email">
	<label for'signup'>Password:</label>
		<input type="password" name="password">

		<input type="submit">
</form>

<p>Already registered?</p>
<a class='btn btn-default' href='login'>Login</a>
</div>


@stop