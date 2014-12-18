@extends('_master')

@section('title')
Bouquet Search
@stop


@section('content')
<h3> List of all Bouquets</h3>

<p>Click a bouquet to add it to your cart!</p>

<div id='bouquetGrid'>
	<span class='thumbnail'><img src='/images/cone.jpg' alt='fruit cone' class='img-thumbnail'>
		<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/watermelon_flower.jpg' alt='watermelon flower' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/palm_bouquet.jpg' alt='palm bouquet' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/fruit_platter.jpg' alt='fruit platter' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/fruit_platter2.jpg' alt='fruit platter' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/watermelon_floral_carve.jpg' alt='watermelon flower' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/baby_carriage.jpg' alt='baby carriage' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/lemon_cups.jpg' alt='lemon cups' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/watermelon_platter.jpg' alt='watermelon platter' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	<span class='thumbnail'><img src='/images/melon_carve_platter.jpg' alt='melon carve platter' class='img-thumbnail'>
	<p><a class='btn btn-default' href='cart'>Add to Cart</a></p></span>
	
</div>
@stop