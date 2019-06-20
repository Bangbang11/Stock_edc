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
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_length[14]');

		if ($this->form_validation->run() == FALSE) 
		{
			 $this->load->view('view_login');
        } 
        else 
        {
			$u = $this->input->post('username');
			$p = $this->input->post('password');
			$this->Stok_edc_Model->getLoginData($u,$p);
		}

	}

	public function logout()
	{
		$cek = $this->session->userdata('isLogin');
		if(empty($cek))
		{
			header('location:'.site_url().'/login');
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.site_url().'/login');
		}
	}
}