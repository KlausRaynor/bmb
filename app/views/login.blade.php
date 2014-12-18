@extends('_master')

@section('title')
	Login to Bite Me Bouquet
@stop

@section('content')
<div id='content'>


<form method='POST' action='/login'>
	<label for'signup'>Email:</label>
		<input type="text" name="email">
	<label for'signup'>Password:</label>
		<input type="password" name="password">	

		<input type="submit">
</form>
</div>
@stop