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
		$tampil_data_issue['data_issue'] = $this->Stok_edc_Model->tampil_issue_model();
		$this->load->view('view_issue', $tampil_data_issue);
	}

	public function form_edc_in(){
		$this->load->view('view_form_edc_in');
	}

	public function tampil_edc_in(){
		$tampil_data_edc_in['data_edc_in'] = $this->Stok_edc_Model->tampil_edc_in_model();
		$this->load->view('view_edc_in', $tampil_data_edc_in);
	}

	public function tampil_edc_out(){
		$tampil_data_edc_out['data_edc_out'] = $this->Stok_edc_Model->tampil_edc_out_model();
		$this->load->view('view_edc_out', $tampil_data_edc_out);
	}

	public function tampil_laporan(){
		$tampil_data_laporan['data_laporan'] = $this->Stok_edc_Model->tampil_laporan_model();
		$this->load->view('view_laporan', $tampil_data_laporan);
	}
}