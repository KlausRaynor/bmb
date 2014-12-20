@extends('_master')

@section('title')
{{Auth::user()->name;}}'s Cart
@stop

@section('content')

<div id='content'>

<p><h3>{{Auth::user()->name;}}'s cart<h3></p>

<!--use for loop to display bouquets inside user cart-->
	
	{{if($cart->isEmpty() != TRUE) {


		foreach($bouquets as bouquet) {


		$bouquet_array = [];
		
		$bouquet_array .=$bouquet->name;
		<img src=
	}

	  }
	}}
</div>
@stop