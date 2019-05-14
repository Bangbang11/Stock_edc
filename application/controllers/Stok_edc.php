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

	public function detail_issue(){
		$data['data_issue'] = $this->Stok_edc_Model->per_iddetail_issue($this->uri->segment(3));
 		$this->load->view('view_detail_issue', $data);
	}

	public function rusak_done_issue() {
		$data_rusak_done = $this->Stok_edc_Model->per_idrusak_done_issue($this->uri->segment(3));
 		if(!empty($data_rusak_done)){
 			foreach ($data_rusak_done as $data) {
 				$id = $data->id;
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = $data->kondisi;
				$status_edc = $data->status_edc;
				$kondisi_edc = $data->kondisi_edc;
				$mid = $data->mid;
				$tid = $data->tid;
				$nama_merchant = $data->nama_merchant;
				$alamat = $data->alamat_merchant;
				$digunakan = $data->digunakan;
				$vendor = $data->vendor;
				$date_in = $data->date_in;
				$date_out = $data->date_out;
				$this->Stok_edc_Model->rusak_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out);
 		}
 		}
	}

	public function rusak_replace_issue(){

	}

	public function baik_replace_issue(){

	}

	public function baik_done_issue(){
		$data_baik_done = $this->Stok_edc_Model->per_idbaik_done_issue($this->uri->segment(3));
 		if(!empty($data_baik_done)){
 			foreach ($data_baik_done as $data) {
 				$id = $data->id;
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = $data->kondisi;
				$status_edc = $data->status_edc;
				$kondisi_edc = $data->kondisi_edc;
				$mid = $data->mid;
				$tid = $data->tid;
				$nama_merchant = $data->nama_merchant;
				$alamat = $data->alamat_merchant;
				$digunakan = $data->digunakan;
				$vendor = $data->vendor;
				$date_in = $data->date_in;
				$date_out = $data->date_out;
				$this->Stok_edc_Model->baik_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out);
 		}
 		}
	}

	public function tambah_issue_out(){

		$data['serial_number'] = $this->input->post('serial_number');
		$data['tipe_edc'] = $this->input->post('tipe_edc');
		$data['kondisi_1'] = $this->input->post('kondisi_1');
		$data['status_edc'] = $this->input->post('status_edc');
		$data['kondisi_edc'] = $this->input->post('kondisi_edc');
		$data['mid'] = $this->input->post('mid');
		$data['tid'] = $this->input->post('tid');
		$data['nama_merchant'] = $this->input->post('nama_merchant');
		$data['alamat'] = $this->input->post('alamat');
		$data['digunakan'] = $this->input->post('digunakan');
		$data['vendor'] = $this->input->post('vendor');
		$data['date_in'] = $this->input->post('date_in');
		$data['date_out'] = $this->input->post('date_out');

		$this->load->view('view_tambah_field_issue',$data);
	}

	public function tambah_issue(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('status_issue', 'status_issue', 'trim|required');
		$this->form_validation->set_rules('case_issue', 'case_issue', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			redirect('Stok_edc/tambah_issue_out');
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
			$status_issue = $this->input->post('status_issue');
			$case_issue = $this->input->post('case_issue');
			$this->Stok_edc_Model->tambah_issue($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out,$status_issue,$case_issue);
 		}
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

 	public function detail_edc_in(){
 		$data['data_edc_in'] = $this->Stok_edc_Model->per_iddetail_edc_in($this->uri->segment(3));
 		$this->load->view('view_detail_edc_in', $data);
 	}

	public function tampil_edc_out(){
		$tampil_data_edc_out['data_edc_out'] = $this->Stok_edc_Model->tampil_edc_out_model();
		$this->load->view('view_edc_out', $tampil_data_edc_out);
	}

	public function tambah_edc_out_merchant(){
		$data['serial_number'] = $this->input->post('serial_number');
		$data['tipe_edc'] = $this->input->post('tipe_edc');
		$data['kondisi_1'] = $this->input->post('kondisi_1');
		$data['status_edc'] = $this->input->post('status_edc');
		$data['kondisi_edc'] = $this->input->post('kondisi_edc');
		$data['date_in'] = $this->input->post('date_in');
		$data['date_out'] = $this->input->post('date_out');

		$this->load->view('view_tambah_field_edc_in',$data);
	}

	public function tambah_edc_out(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mid', 'mid', 'trim|required');
		$this->form_validation->set_rules('tid', 'tid', 'trim|required');
		$this->form_validation->set_rules('nama_merchant', 'nama_merchant', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('digunakan', 'digunakan', 'trim|required');
		$this->form_validation->set_rules('vendor', 'vendor', 'trim|required');
		$this->form_validation->set_rules('date_in', 'date_in', 'trim|required');
		$this->form_validation->set_rules('date_out', 'date_out', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			redirect('Stok_edc/tambah_edc_out_merchant');
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
			$this->Stok_edc_Model->tambah_edc_out($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out);
 		}
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