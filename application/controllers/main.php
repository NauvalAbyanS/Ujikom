<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	public function index(){
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
			echo"hallo";
			if($petugas['id_role'] == 1){
				if(password_verify($password, 'petugas'['password'])){
					$data = [
						'email' => $petugas['email'],
						'id_role' => $petugas['id_role']
					];
					$this->session->set_userdata($data);
					redirect('user');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" 
					role="alert">Wrong Password!');
					redirect('auah');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" 
				role="alert">this email has not been activated!');
				redirect('auth');
		
			}
		}
	}
	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		
		$this->session->set_flashdata('message','<div class="alert alert-danger" 
		role="alert">this email has not been activated!');
		redirect('auth');
	}
}