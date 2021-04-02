<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	public function index(){
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		$this->load->view('auth/login');
	}
    public function __construct(){
        parent::__construct();
        $this->load->model('model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function auth(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$petugas = $this->db->get_where('petugas',['email'=> $email])->row_array();
		if($petugas){
			if($petugas['level'] == 1){
				if(password_verify($password, $petugas['password'])){
					$data = [
						'email' => $petugas['email'],
						'level' => $petugas['level'],
						'id_petugas' => $petugas['id_petugas']
					];
					$this->session->set_userdata($data);
					redirect('user/indexadmin');
					}
				}if($petugas['level'] == 2){
						if(password_verify($password, $petugas['password'])){
							$data = [
								'email' => $petugas['email'],
								'level' => $petugas['level'],
								'id_petugas' => $petugas['id_petugas']
							];
						$this->session->set_userdata($data);
					redirect('user/indexpetugas');
				}
			}
		}else{
			echo "data dtidak ditemukan";
		}
	}
		public function link(){
			$button = $_POST['button'];
    	if ($button == 'transaksi'){
       		$this->load->view('petugas/transaksi');
    	}elseif ($button == 'history'){
			$this->load->view('petugas/history');
	 	}elseif ($button == 'editdata'){
			$this->load->view('petugas/admin/editdata');
	 	}elseif ($button == 'laporan'){
			$this->load->view('petugas/admin/laporan');
	 	}else{
			echo "button tidak ditemukan";
		}
	}	
		public function linkCRUD(){
			$button = $_POST['button'];
		if ($button == 'siswa'){
			$this->load->view('petugas/admin/crud/siswa');
		}elseif ($button == 'petugas'){
			$this->load->view('petugas/admin/crud/petugas');
		}elseif ($button == 'kelas'){
			$this->load->view('petugas/admin/crud/');
		}elseif ($button == 'spp'){
			$this->load->view('petugas/admin/crud/');
		}else{
			echo "button tidak ditemukan";
		}
	}	

	function tambah(){
		$idpembayaran = $this->input->post('id_pembayaran');
		$idpetugas = $this->input->post('id_petugas');
		$idspp = $this->input->post('idspp');
		$nisn = $this->input->post('nisn');
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$jumlahbayar = $this->input->post('jumlahbayar');

		$siswa = $this->db->get_where('siswa',['nisn'=> $nisn])->row_array();
		$data = array(
			'id_pembayaran' => $idpembayaran,
			'id_petugas' => $idpetugas,
			'nisn' => $nisn,
			'tanggal_bayar' => $tanggal,
			'bulan_bayar' => $bulan,
			'tahun_bayar' => $tahun,
			'id_spp' => $idspp,
			'jumlah_bayar' => $jumlahbayar
			);
		$this->m_data->input_data($data,'pembayaran');
		redirect('user/input');
	}

	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		
		$this->session->set_flashdata('message','<div class="alert alert-danger" 
		role="alert">this email has not been activated!');
		redirect('auth');
	}
}