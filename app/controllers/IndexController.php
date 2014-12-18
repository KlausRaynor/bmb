<?php

class IndexController extends \BaseController {

	#basecontroller call
	public function __construct() {

		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('index');
	}

}
