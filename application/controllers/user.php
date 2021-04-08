<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function indexadmin(){
        $this->load->view('petugas/admin/mainpageadmin');
    }
    public function indexpetugas(){
        $this->load->view('petugas/mainpagepetugas');
    }
    public function indexsiswa(){
        $data['siswa'] = $this->db->get_where('siswa',['email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang '. $data['siswa']['nama_siswa']  . '!!';
    }
    function tampil(){
        // echo '<script>';
        // echo 'alert("Pembayaran berhasil!!")';
        // echo '</script>';
		$this->load->view('petugas/history');
	}


}