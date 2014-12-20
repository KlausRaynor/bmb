<?php

class CartController extends BaseController {


	public function __construct() {
    
    	parent::__construct();

	    $this->beforeFilter('guest', 
    		    array(
                'only' => array('getLogin', 'getSignup')
        		));
    }

    

}