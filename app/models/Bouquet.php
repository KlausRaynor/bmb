<?php

class Bouquet extends Eloquent {
	
	#establish many to one-to-many (reverse) relationship with Cart
	public function user() {

		return $this->belongsTo('Cart');
	}


}