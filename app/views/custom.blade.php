@extends('_master')


@section('title')
Custom Order Bouquet
@stop

@section('content')
<div id='content'>
Enter Order Details:
	<form method='POST'>
<p>Arrangement Description:</p> <input type="text" name="title">
<p>Submit Order</p> <input type='submit'>
</form>
</div>
@stop