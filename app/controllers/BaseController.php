<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */ /*
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	} */

	public function __construct() {

		#protect against cross site request forgery attacks for posts
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

}
