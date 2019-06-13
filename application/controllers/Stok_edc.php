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
		$this->load->library("excel");
	}

	public function index(){
		$cek = $this->session->userdata('isLogin');

		if(!empty($cek)) {
		$data_edc_baik = $this->Stok_edc_Model->edc_baik();
		$data_edc_rusak = $this->Stok_edc_Model->edc_rusak();
		$data_edc_ICT220 = $this->Stok_edc_Model->edc_ict220();
		$data_edc_ICT250 = $this->Stok_edc_Model->edc_ict250();
		$data_edc_IWC220 = $this->Stok_edc_Model->edc_iwc220();
		$data_edc_MOVE2500 = $this->Stok_edc_Model->edc_move2500();
		$data_edc_PAXD210 = $this->Stok_edc_Model->edc_paxd210();
		$jumlah['edc_baik'] = count($data_edc_baik);
		$jumlah['edc_rusak'] = count($data_edc_rusak);
		$jumlah['edc_ict220'] = count($data_edc_ICT220);
		$jumlah['edc_ict250'] = count($data_edc_ICT250);
		$jumlah['edc_iwc220'] = count($data_edc_IWC220);
		$jumlah['edc_move2500'] = count($data_edc_MOVE2500);
		$jumlah['edc_paxd210'] = count($data_edc_PAXD210);
		$this->load->view('view_dashboard', $jumlah);
		} else {
			header('location:'.base_url().'login');
		}
	}

	public function tampil_issue(){
		$cek = $this->session->userdata('isLogin');

		if(!empty($cek)) {
		$this->load->database();
		$jumlah_data = $this->Stok_edc_Model->jumlah_data_issue();
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/Stock_edc/index.php/Stok_edc/tampil_issue/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 1;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$tampil_data_issue['data_issue'] = $this->Stok_edc_Model->paging_issue_model($config['per_page'],$from);
		$this->load->view('view_issue',$tampil_data_issue);
		} else {
			header('location:'.base_url().'login');
		}

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
				$kondisi_1 = "bekas";
				$status_edc = $data->status_edc;
				$kondisi_edc = "rusak";
				$mid = $data->mid;
				$tid = $data->tid;
				$nama_merchant = $data->nama_merchant;
				$alamat = $data->alamat_merchant;
				$digunakan = $data->digunakan;
				$vendor = $data->vendor;
				$date_in = $data->date_in;
				$date_out = $data->date_out;
				$status_issue = "done";
				$case_issue = $data->case_issue;
				$this->Stok_edc_Model->rusak_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue);
 		}
 		}
	}

	public function rusak_replace_issue(){
		$data_rusak_replace = $this->Stok_edc_Model->per_idrusak_replace_issue($this->uri->segment(3));
 		if(!empty($data_rusak_replace)){
 			foreach ($data_rusak_replace as $data) {
 				$id = $data->id;
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = "bekas";
				$status_edc = $data->status_edc;
				$kondisi_edc = "rusak";
				$mid = $data->mid;
				$tid = $data->tid;
				$nama_merchant = $data->nama_merchant;
				$alamat = $data->alamat_merchant;
				$digunakan = $data->digunakan;
				$vendor = $data->vendor;
				$date_in = $data->date_in;
				$date_out = $data->date_out;
				$status_issue = $data->status_issue;
				$case_issue = $data->case_issue;
				$this->Stok_edc_Model->rusak_replace($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue);
 			}
 		}
	}

	public function baik_replace_issue(){
		$data_baik_replace = $this->Stok_edc_Model->per_idbaik_replace_issue($this->uri->segment(3));
 		if(!empty($data_baik_replace)){
 			foreach ($data_baik_replace as $data) {
 				$id = $data->id;
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = "bekas";
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
				$status_issue = $data->status_issue;
				$case_issue = $data->case_issue;
				$this->Stok_edc_Model->baik_replace($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue);
 			}
 		}
	}

	public function baik_done_issue(){
		$data_baik_done = $this->Stok_edc_Model->per_idbaik_done_issue($this->uri->segment(3));
 		if(!empty($data_baik_done)){
 			foreach ($data_baik_done as $data) {
 				$id = $data->id;
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = "bekas";
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
				$status_issue = "done";
				$case_issue = $data->case_issue;
				$this->Stok_edc_Model->baik_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue);
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
		$cek = $this->session->userdata('isLogin');

		if(!empty($cek)) {
		$this->load->database();
		$jumlah_data = $this->Stok_edc_Model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/Stock_edc/index.php/Stok_edc/tampil_edc_in/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$tampil_data_edc_in['data_edc_in'] = $this->Stok_edc_Model->paging_edc_in_model($config['per_page'],$from);
		$this->load->view('view_edc_in',$tampil_data_edc_in);
		} else {
			header('location:'.base_url().'login');
		}

	}

	public function tampil_edc_in_duplicate(){
		$tampil_data_edc_in['data_edc_in'] = $this->Stok_edc_Model->tampil_edc_in_duplicate_model();
		$this->load->view('view_edc_in_duplicate', $tampil_data_edc_in);
	}

	public function tampil_edc_in_duplicate2(){
		$tampil_data_edc_in['data_edc_in'] = $this->Stok_edc_Model->tampil_edc_in_duplicate_model();
		$this->load->view('view_edc_in_duplicate', $tampil_data_edc_in);
	}

	public function tambah_edc_in(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('serial_number', 'serial_number', 'trim|required');
		$this->form_validation->set_rules('tipe_edc', 'tipe_edc', 'trim|required');
		$this->form_validation->set_rules('kondisi_1', 'kondisi_1', 'trim|required');
		$this->form_validation->set_rules('status_edc', 'status_edc', 'trim|required');
		$this->form_validation->set_rules('kondisi_edc', 'kondisi_edc', 'trim|required');
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
			$date_in = $this->input->post('date_in');
			$date_out = $this->input->post('date_out');
			$this->Stok_edc_Model->tambah_edc_in($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $date_in,$date_out);
 		}
 	}

 	public function detail_edc_in(){
 		$data['data_edc_in'] = $this->Stok_edc_Model->per_iddetail_edc_in($this->uri->segment(3));
 		$this->load->view('view_detail_edc_in', $data);
 	}

 	public function detail_edc_in_duplicate(){
 		$data['data_edc_in'] = $this->Stok_edc_Model->per_iddetail_edc_in($this->uri->segment(3));
 		$data['data_temporary'] = $this->Stok_edc_Model->tampil_temporary_data();
 		$this->load->view('view_detail_edc_in_duplicate', $data);
 	}

	public function tampil_edc_out(){
		$cek = $this->session->userdata('isLogin');

		if(!empty($cek)) {
		$this->load->database();
		$jumlah_data = $this->Stok_edc_Model->jumlah_data_out();
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/Stock_edc/index.php/Stok_edc/tampil_edc_out/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 1;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$tampil_data_edc_out['data_edc_out'] = $this->Stok_edc_Model->paging_edc_out_model($config['per_page'],$from);
		$this->load->view('view_edc_out',$tampil_data_edc_out);
		} else {
			header('location:'.base_url().'login');
		}

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

	public function tambah_edc_out_duplicate(){
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
			$serial_number_pengganti = $this->input->post('serial_number');
			$tipe_edc_pengganti = $this->input->post('tipe_edc');
			$kondisi_1_pengganti = $this->input->post('kondisi_1');
			$status_edc_pengganti = $this->input->post('status_edc');
			$kondisi_edc_pengganti = $this->input->post('kondisi_edc');
			$mid = $this->input->post('mid');
			$tid = $this->input->post('tid');
			$nama_merchant = $this->input->post('nama_merchant');
			$alamat = $this->input->post('alamat');
			$digunakan = $this->input->post('digunakan');
			$vendor = $this->input->post('vendor');
			$date_in = $this->input->post('date_in');
			$date_out = $this->input->post('date_out');
			$data_temporary = $this->Stok_edc_Model->tampil_temporary_data();
			foreach ($data_temporary as $data) {
 				$serial_number = $data->serial_number;
				$tipe_edc = $data->tipe_edc;
				$kondisi_1 = $data->kondisi;
				$status_edc = $data->status_edc;
				$kondisi_edc = $data->kondisi_edc;
				$status_issue = "done";
				$case_issue = $data->case_issue;
 		}			
			$this->Stok_edc_Model->tambah_edc_out_duplicate($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc,$serial_number_pengganti, $tipe_edc_pengganti, $kondisi_1_pengganti, $status_edc_pengganti, $kondisi_edc_pengganti, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue);
 		}
	}

	public function detail_edc_out() {
		$data['data_edc_out'] = $this->Stok_edc_Model->per_iddetail_edc_out($this->uri->segment(3));
		$this->load->view('view_detail_edc_out', $data);
	}

	public function tampil_laporan(){
		$cek = $this->session->userdata('isLogin');

		if(!empty($cek)) {
		$tampil_data_laporan['data_laporan'] = $this->Stok_edc_Model->tampil_laporan_model();
		$this->load->view('view_laporan', $tampil_data_laporan);
		} else {
			header('location:'.base_url().'login');
		}
	}

	public function print_laporan(){
		ob_start();
    	$data['data_laporan_print'] = $this->Stok_edc_Model->tampil_laporan_model();
    	$this->load->view('print_laporan_pdf', $data);
    	$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    	$pdf = new HTML2PDF('P','A4','en');
    	$pdf->WriteHTML($html);
    	$pdf->Output('laporan.pdf');
	}

	public function detail_laporan(){
		$data['data_laporan'] = $this->Stok_edc_Model->per_iddetail_laporan($this->uri->segment(3));
 		$this->load->view('view_detail_laporan', $data);
	}

	public function cari_issue(){
		$keyword = $this->input->post('search');
		$data['data_issue']=$this->Stok_edc_Model->get_search_issue($keyword);
		$this->load->view('view_issue',$data);
	}

	public function cari_edc_in(){
		$keyword = $this->input->post('search');
		$data['data_edc_in']=$this->Stok_edc_Model->get_search_in($keyword);
		$this->load->view('view_edc_in',$data);
	}

	public function cari_edc_out(){
		$keyword = $this->input->post('search');
		$data['data_edc_out']=$this->Stok_edc_Model->get_search_out($keyword);
		$this->load->view('view_edc_out',$data);
	}

	public function tampil_import(){
		$this->load->view('view_import_excel');
	}

	public function import(){
		if (isset($_FILES['file']['name'])) 
		{
			$path = $_FILES['file']['tmp_name'];
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row=2; $row <= $highestRow ; $row++) 
				{ 
					$serial_number = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$tipe_edc = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$kondisi = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$status_edc = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$kondisi_edc = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$date_in = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$date_out = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$data[] = array(
						'serial_number' => $serial_number,
						'tipe_edc' => $tipe_edc,
						'kondisi' => $kondisi,
						'status_edc' => $status_edc,
						'kondisi_edc' => $kondisi_edc,
						'date_in' => $date_in,
						'date_out' => $date_out
					);
				}
			}
			$this->Stok_edc_Model->insert($data);
			header('location:'.site_url().'/stok_edc/tampil_edc_in');
		}
	}

}