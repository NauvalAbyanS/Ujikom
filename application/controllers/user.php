<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function indexpetugas(){
        $data['petugas'] = $this->db->get_where('petugas',['email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang '. $data['petugas']['nama_petugas']  . '!!';

    }

    public function indexsiswa(){
        $data['siswa'] = $this->db->get_where('siswa',['nisn' => $this->session->userdata('nisn')])->row_array();
        echo 'selamat datang '. $data['siswa']['nama_siswa']  . '!!';

    }


}