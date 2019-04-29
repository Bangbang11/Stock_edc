<?php
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper("url");
	}

	public function index(){
		$this->load->view('view_login');
	}

	public function masuk(){
		$this->load->view('view_dashboard');
	}
}