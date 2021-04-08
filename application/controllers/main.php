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
			echo "data tidak ditemukan";
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
		function crud(){
			$button = $this->input->post('button');
		if ($button == 'siswa'){
			$this->load->view('petugas/admin/crud/siswa');
		}elseif ($button == 'petugas'){
			$this->load->view('petugas/admin/crud/petugas');
		}elseif ($button == 'kelas'){
			$this->load->view('petugas/admin/crud/kelas');
		}elseif ($button == 'spp'){
			$this->load->view('petugas/admin/crud/spp');
		}else{
			echo "button tidak ditemukan";
		}
	}	


	function loginsiswaform(){
		$this->load->view('auth/loginsiswa');
	}
	function loginsiswa(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$siswa = $this->db->get_where('siswa',['email'=> $email])->row_array();
			if($siswa['email'] == $email){
				if(password_verify($password, $siswa['password'])){
					$data = [
						'email' => $siswa['email'],
						'nama' => $siswa['nama'],
						'nisn' => $siswa['nisn']

					];
					$this->session->set_userdata($data);
					$this->load->view('siswa/mainpagesiswa');
					}
				}
			}
	function vsiswa(){
		$this->load->view('siswa/history');
	}
	/////////////////////////////////////////////////////////
	///////////// 	Transaksi Pembayaran 	/////////////////
	/////////////////////////////////////////////////////////

	function transaksi(){
		$this->load->view('petugas/transaksi');
	}
	function tambah(){
		$idpembayaran = $this->input->post('id_pembayaran');
		$idpetugas = $this->input->post('id_petugas');
		$idspp = $this->input->post('idspp');
		$nisn = $this->input->post('nisn');
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$jumlahbayar = $this->input->post('jumbay');

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
		$this->model->input($data,'pembayaran');
		redirect('user/tampil');
	}

	/////////////////////////////////////////////////////////////
	///////////// 	UPDATE SISWA | | DELETE SISWA 	/////////////
	/////////////////////////////////////////////////////////////
	function editsiswa($id){
		$data['siswa'] = $this->model->editsiswa($id);
	
		$this->load->view('petugas/admin/editsiswa',$data);
	}
	function addsiswaform(){
		$this->load->view('petugas/admin/addsiswa');
	}
	function addsiswa(){
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$idkelas = $this->input->post('idkelas');
		$alamat = $this->input->post('alamat');
		$notelp = $this->input->post('notelp');
		$idspp = $this->input->post('idspp');

		$siswa = $this->db->get_where('siswa',['nisn'=> $nisn])->row_array();
		$data = array(
			'nisn' => $nisn,
			'nis' => $nis,
			'email' => $email,
			'nama' => $nama,
			'password' => $password,
			'id_kelas' => $idkelas,
			'alamat' => $alamat,
			'notelp' => $notelp,
			'id_spp' => $idspp
			);
		$this->model->inputsiswa($data,'siswa');
		$this->load->view('petugas/admin/crud/siswa');
		}
	function updatesiswa(){
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$idkelas = $this->input->post('idkelas');
		$alamat = $this->input->post('alamat');
		$notelp = $this->input->post('notelp');
		$idspp = $this->input->post('idspp');

		$siswa = $this->db->get_where('siswa',['nisn'=> $nisn])->row_array();
		$data = array(
			'nis' => $nis,
			'email' => $email,
			'nama' => $nama,
			'password' => $password,
			'id_kelas' => $idkelas,
			'alamat' => $alamat,
			'notelp' => $notelp,
			'id_spp' => $idspp
			);
		$this->model->updatesiswa($data,'siswa',$nisn);
		$this->load->view('petugas/admin/crud/siswa');
	}
	function deletesiswa($nisn){
		$this->model->deletesiswa($nisn);
		$this->load->view('petugas/admin/crud/siswa');
	}

	/////////////////////////////////////////////////////////////////
	///////////// 	UPDATE PETUGAS | | DELETE PETUGAS 	/////////////
	/////////////////////////////////////////////////////////////////

	function editpetugas($id_petugas){
		$data['petugas'] = $this->model->editpetugas($id_petugas);
		$this->load->view('petugas/admin/editpetugas',$data);
	}
	function addpetugasform(){
		$this->load->view('petugas/admin/addpetugas');
	}
	function addpetugas(){
		$idpetugas = $this->input->post('idpetugas');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$namapetugas = $this->input->post('namapetugas');
		$level = $this->input->post('level');
		$data = array(
			'id_petugas' => $idpetugas,
			'email' => $email,
			'password' => $password,
			'nama_petugas' => $namapetugas,
			'level' => $level
			);
		$this->model->inputpetugas($data,'petugas');
		$this->load->view('petugas/admin/crud/petugas');
		}
	function updatepetugas(){
		$idpetugas = $this->input->post('idpetugas');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$namapetugas = $this->input->post('namapetugas');
		$level = $this->input->post('level');

		$petugas = $this->db->get_where('petugas',['id_petugas'=> $idpetugas])->row_array();
		$data = array(
			'id_petugas' => $idpetugas,
			'email' => $email,
			'password' => $password,
			'nama_petugas' => $namapetugas,
			'level' => $level
			);
		$this->model->updatepetugas($data,'petugas',$idpetugas);
		$this->load->view('petugas/admin/crud/petugas');
	}
	function deletepetugas($idpetugas){
		$this->model->deletepetugas($idpetugas);
		$this->load->view('petugas/admin/crud/petugas');
	}

	/////////////////////////////////////////////////////////////
	///////////// 	UPDATE KELAS | | DELETE KELAS 	/////////////
	/////////////////////////////////////////////////////////////

	function editkelas($idkelas){
		$data['kelas'] = $this->model->editkelas($idkelas);
		$this->load->view('petugas/admin/editkelas',$data);
	}
	function addkelasform(){
		$this->load->view('petugas/admin/addkelas');
	}
	function addkelas(){

		$idkelas = $this->input->post('idkelas');
		$nakel = $this->input->post('namakelas');
		$ahli = $this->input->post('keahlian');
		$data = array(
			'id_kelas' => $idkelas,
			'nama_kelas' => $nakel,
			'kompetensi_keahlian' => $ahli
			);
		$this->model->inputkelas($data,'kelas');
		$this->load->view('petugas/admin/crud/kelas');
		}

	function updatekelas(){
		$idkelas = $this->input->post('id');
		$namakel = $this->input->post('namakelas');
		$ahli = $this->input->post('kompetensi');
		

		$kelas = $this->db->get_where('kelas',['id_kelas'=> $idkelas])->row_array();
		$data = array(
			'id_kelas' => $idkelas,
			'nama_kelas' => $namakel,
			'kompetensi_keahlian' => $ahli
			);
		$this->model->updatekelas($data,'kelas',$idkelas);
		$this->load->view('petugas/admin/crud/kelas');
	}
	function deletekelas($id_kelas){
		$this->model->deletekelas($id_kelas);
		$this->load->view('petugas/admin/crud/kelas');
	}
	/////////////////////////////////////////////////////////
	///////////// 	UPDATE SPP | | DELETE SPP 	/////////////
	/////////////////////////////////////////////////////////

	function editspp($id_spp){
		$data['spp'] = $this->model->editspp($id_spp);
		$this->load->view('petugas/admin/editspp',$data);
	}
	function addsppform(){
		$this->load->view('petugas/admin/addspp');
	}
	function addspp(){

		$idspp = $this->input->post('idspp');
		$tahun = $this->input->post('tahun');
		$nominal = $this->input->post('nominal');
		$data = array(
			'id_spp' => $idspp,
			'tahun' => $tahun,
			'nominal' => $nominal
			);
		$this->model->inputspp($data,'spp');
		$this->load->view('petugas/admin/crud/spp');
		}

	function updatespp(){
		$idspp = $this->input->post('idspp');
		$tahun = $this->input->post('tahun');
		$nominal = $this->input->post('nominal');


		$siswa = $this->db->get_where('spp',['id_spp'=> $idspp])->row_array();
		$data = array(
			'id_spp' => $idspp,
			'tahun' => $tahun,
			'nominal' => $nominal
			);
		$this->model->updatespp($data,'spp',$idspp);
		$this->load->view('petugas/admin/crud/spp');
	}
	function deletespp($idspp){
		$this->model->deletespp($idspp);
		$this->load->view('petugas/admin/crud/spp');
	}
	/////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////


	

	function homepetugas(){
		$data['petugas'] = $this->db->get_where('petugas',['email' => $this->session->userdata('email')])->row_array();
        if($this->session->userdata('level') == 1){
			$this->load->view('petugas/admin/mainpageadmin');
		}elseif($this->session->userdata('level') == 2){
			$this->load->view('petugas/mainpagepetugas');
		}
	}

	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		
		$this->session->set_flashdata('message','<div class="alert alert-danger" 
		role="alert">this email has not been activated!');
		$this->load->view('auth/login');
	}
}