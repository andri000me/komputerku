<?php 

class Forum extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){

		$this->load->view('V_Forum');
	}
}