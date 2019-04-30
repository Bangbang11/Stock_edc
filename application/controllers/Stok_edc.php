<?php
/**
 * 
 */
class Stok_edc extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("form"); 
		$this->load->helper("url");
	}

	public function index(){
		$this->load->view('view_dashboard');
	}

	public function tampil_issue(){
		$this->load->view('view_issue');
	}

	public function tampil_edc_in(){
		$this->load->view('view_edc_in');
	}

	public function tampil_edc_out(){
		$this->load->view('view_edc_out');
	}
}