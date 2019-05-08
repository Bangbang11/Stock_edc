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

	public function tambah_edc_in(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('serial_number', 'serial_number', 'trim|required');
		$this->form_validation->set_rules('tipe_edc', 'tipe_edc', 'trim|required');
		$this->form_validation->set_rules('kondisi_1', 'kondisi_1', 'trim|required');
		$this->form_validation->set_rules('status_edc', 'status_edc', 'trim|required');
		$this->form_validation->set_rules('kondisi_edc', 'kondisi_edc', 'trim|required');
		$this->form_validation->set_rules('mid', 'mid', 'trim|required');
		$this->form_validation->set_rules('tid', 'tid', 'trim|required');
		$this->form_validation->set_rules('nama_merchant', 'nama_merchant', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('digunakan', 'digunakan', 'trim|required');
		$this->form_validation->set_rules('vendor', 'vendor', 'trim|required');
		$this->form_validation->set_rules('date_in', 'date_in', 'trim|required');
		$this->form_validation->set_rules('date_out', 'date_out', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			redirect('Stok_edc/form_edc_in');
		} else {
			$serial_number = $this->input->post('serial_number');
			$tipe_edc = $this->input->post('tipe_edc');
			$kondisi_1 = $this->input->post('kondisi_1');
			$status_edc = $this->input->post('status_edc');
			$kondisi_edc = $this->input->post('kondisi_edc');
			$mid = $this->input->post('mid');
			$tid = $this->input->post('tid');
			$nama_merchant = $this->input->post('nama_merchant');
			$alamat = $this->input->post('alamat');
			$digunakan = $this->input->post('digunakan');
			$vendor = $this->input->post('vendor');
			$date_in = $this->input->post('date_in');
			$date_out = $this->input->post('date_out');
			$this->Stok_edc_Model->tambah_edc_in($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out);
 		}
 	}

	public function tampil_edc_out(){
		$tampil_data_edc_out['data_edc_out'] = $this->Stok_edc_Model->tampil_edc_out_model();
		$this->load->view('view_edc_out', $tampil_data_edc_out);
	}

	public function detail_edc_out() {
		$data['data_edc_out'] = $this->Stok_edc_Model->per_iddetail_edc_out($this->uri->segment(3));
		$this->load->view('view_detail_edc_out', $data);
	}

	public function tampil_laporan(){
		$tampil_data_laporan['data_laporan'] = $this->Stok_edc_Model->tampil_laporan_model();
		$this->load->view('view_laporan', $tampil_data_laporan);
	}
}