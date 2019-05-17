<?php
/**
 * 
 */
class Stok_edc_Model extends CI_Model
{
	
	public function getLoginData($username,$password) {
		$cek_login = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password));
		if(count($cek_login->result())>0) {
			$ambil_data_issue = $this->db->get('issue');
			foreach ($ambil_data_issue->result() as $data_issue) {
				$sess_data['isLogin'] = 'yes';
				$sess_data['id'] = $data_issue->id;
				$sess_data['serial_number'] = $data_issue->serial_number;
				$sess_data['tipe_edc'] = $data_issue->tipe_edc;
				$sess_data['kondisi'] = $data_issue->kondisi;
				$sess_data['status_edc'] = $data_issue->status_edc;
				$sess_data['kondisi_edc'] = $data_issue->kondisi_edc;
				$sess_data['mid'] = $data_issue->mid;
				$sess_data['tid'] = $data_issue->tid;
				$sess_data['nama_merchant'] = $data_issue->nama_merchant;
				$sess_data['alamat_merchant'] = $data_issue->alamat_merchant;
				$sess_data['digunakan'] = $data_issue->digunakan;
				$sess_data['status_issue'] = $data_issue->status_issue;
				$sess_data['case_issue'] = $data_issue->case_issue;
				$sess_data['vendor'] = $data_issue->vendor;
				$sess_data['date_in'] = $data_issue->date_in;
				$sess_data['date_out'] = $data_issue->date_out;
				$this->session->set_userdata($sess_data);
			}

			$ambil_data_edc_in = $this->db->get('edc_in');
			foreach ($ambil_data_edc_in->result() as $data_edc_in) {
				$sess_data['isLogin'] = 'yes';
				$sess_data['serial_number'] = $data_edc_in->serial_number;
				$sess_data['tipe_edc'] = $data_edc_in->tipe_edc;
				$sess_data['kondisi'] = $data_edc_in->kondisi;
				$sess_data['status_edc'] = $data_edc_in->status_edc;
				$sess_data['kondisi_edc'] = $data_edc_in->kondisi_edc;
				$sess_data['mid'] = $data_edc_in->mid;
				$sess_data['tid'] = $data_edc_in->tid;
				$sess_data['nama_merchant'] = $data_edc_in->nama_merchant;
				$sess_data['alamat_merchant'] = $data_edc_in->alamat_merchant;
				$sess_data['digunakan'] = $data_edc_in->digunakan;
				$sess_data['date_in'] = $data_edc_in->date_in;
				$sess_data['date_out'] = $data_edc_in->date_out;
				$sess_data['vendor'] = $data_edc_in->vendor;
				$this->session->set_userdata($sess_data);
			}

			$ambil_data_edc_out = $this->db->get('edc_out');
			foreach ($ambil_data_edc_out->result() as $data_edc_out) {
				$sess_data['isLogin'] = 'yes';
				$sess_data['serial_number'] = $data_edc_out->serial_number;
				$sess_data['tipe_edc'] = $data_edc_out->tipe_edc;
				$sess_data['kondisi'] = $data_edc_out->kondisi;
				$sess_data['status_edc'] = $data_edc_out->status_edc;
				$sess_data['kondisi_edc'] = $data_edc_out->kondisi_edc;
				$sess_data['mid'] = $data_edc_out->mid;
				$sess_data['tid'] = $data_edc_out->tid;
				$sess_data['nama_merchant'] = $data_edc_out->nama_merchant;
				$sess_data['alamat_merchant'] = $data_edc_out->alamat_merchant;
				$sess_data['digunakan'] = $data_edc_out->digunakan;
				$sess_data['date_in'] = $data_edc_out->date_in;
				$sess_data['date_out'] = $data_edc_out->date_out;
				$sess_data['vendor'] = $data_edc_out->vendor;
				$this->session->set_userdata($sess_data);
			}
			header('location:'.site_url().'/stok_edc');
		}
		else {
			header('location:'.site_url().'/login');
		}
	}

	public function tambah_issue($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue){
		$this->db->query("INSERT INTO issue (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out, status_issue, case_issue) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."', '".$status_issue."', '".$case_issue."')");
		$this->db->query("DELETE FROM edc_out WHERE serial_number = '".$serial_number."'");
		header('location:'.site_url().'/stok_edc/tampil_issue');
	}

	public function tampil_edc_in_model(){
		return $this->db->query('SELECT * FROM  edc_in ORDER BY serial_number ASC')->result();
	}

	public function tampil_edc_in_duplicate_model(){
		return $this->db->query('SELECT * FROM  edc_in WHERE kondisi_edc = "baik" ')->result();
	}

	public function tambah_edc_in($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out){
		$this->db->query("INSERT INTO edc_in (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."')");
		header('location:'.site_url().'/stok_edc/tampil_edc_in');
	}

	public function per_iddetail_issue($id) {
		return $this->db->query('SELECT * FROM issue WHERE id = "'.$id.'" ')->result();
	}

	public function per_idrusak_done_issue($id) {
		return $this->db->query('SELECT * FROM issue WHERE id = "'.$id.'" ')->result();
	}

	public function per_idrusak_replace_issue($id) {
		return $this->db->query('SELECT * FROM issue WHERE id = "'.$id.'" ')->result();
	}

	public function per_idbaik_done_issue($id) {
		return $this->db->query('SELECT * FROM issue WHERE id = "'.$id.'" ')->result();
	}

	public function rusak_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out){
		$this->db->query("INSERT INTO edc_in (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."')");
		$this->db->query("DELETE FROM issue WHERE id = '".$id."'");
		header('location:'.site_url().'/stok_edc/tampil_edc_in');
	}

	public function rusak_replace($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out, $status_issue, $case_issue){
		$this->db->query("INSERT INTO edc_in (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."')");
		$this->db->query("DELETE FROM temporary_data");
		$this->db->query("INSERT INTO temporary_data (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out, status_issue, case_issue) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."', '".$status_issue."', '".$case_issue."')");
		$this->db->query("DELETE FROM issue WHERE id = '".$id."'");
		header('location:'.site_url().'/stok_edc/tampil_edc_in_duplicate');
	}

	public function baik_done($id,$serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out){
		$this->db->query("INSERT INTO edc_in (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."')");
		$this->db->query("DELETE FROM issue WHERE id = '".$id."'");
		header('location:'.site_url().'/stok_edc/tampil_edc_in');
	}

	public function per_iddetail_edc_in($serial_number) {
		return $this->db->query('SELECT * FROM edc_in WHERE serial_number = "'.$serial_number.'" ')->result();
	}

	public function tampil_edc_out_model(){
		return $this->db->query('SELECT * FROM edc_out ORDER BY serial_number ASC')->result();
	}

	public function per_iddetail_edc_out($serial_number) {
		return $this->db->query('SELECT * FROM edc_out WHERE serial_number = "'.$serial_number.'" ')->result();
	}

	public function tambah_edc_out($serial_number, $tipe_edc, $kondisi_1, $status_edc, $kondisi_edc, $mid, $tid, $nama_merchant, $alamat, $digunakan, $vendor, $date_in,$date_out){
		$this->db->query("INSERT INTO edc_out (serial_number, tipe_edc, kondisi, status_edc, kondisi_edc, mid, tid, nama_merchant, alamat_merchant, digunakan, vendor, date_in,date_out) VALUES ('".$serial_number."', '".$tipe_edc."', '".$kondisi_1."', '".$status_edc."', '".$kondisi_edc."', '".$mid."', '".$tid."', '".$nama_merchant."', '".$alamat."', '".$digunakan."', '".$vendor."', '".$date_in."', '".$date_out."')");
		$this->db->query("DELETE FROM edc_in WHERE serial_number = '".$serial_number."'");
		header('location:'.site_url().'/stok_edc/tampil_edc_out');
	}

	public function tampil_laporan_model(){
		return $this->db->query('SELECT * FROM laporan ORDER BY id ASC')->result();
	}

	public function tampil_issue_model(){
		return $this->db->query('SELECT * FROM issue ORDER BY id ASC')->result();
	}

	public function tampil_temporary_data(){
		return $this->db->query('SELECT * FROM temporary_data')->result();
	}

}