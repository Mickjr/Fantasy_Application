<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nba/blank_view');
	}
}