<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NCAAMBB_Coaches_Poll extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/ncaambb/coaches_poll_view');
	}
}