<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NFL_Standings extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nfl/standings_view');
	}
	
}