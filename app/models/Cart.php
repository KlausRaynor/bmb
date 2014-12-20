<?php

//associated with user_bouquet pivot table
class Cart extends Eloquent {

	public function bouquets() {
		#many bouquets per cart: one-to-many
		return $this->hasMany('Bouquet');
	}

	public function user() {
		#one cart per user : one-to-one
		return $this->belongsTo('User');
	}
}