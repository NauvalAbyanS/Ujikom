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
			if($petugas['id_role'] == 1){
				if(password_verify($password, $petugas['password'])){
					echo $password;
				}else{
						echo "pass salah";
					}}}}
					
					
					
					// $data = [
					// 	'email' => $petugas['email'],
					// 	'id_role' => $petugas['id_role']
					// ];
	// 				$this->session->set_userdata($data);
	// 				redirect('menu');
	// 			}else{
	// 				$this->session->set_flashdata('message','<div class="alert alert-danger" 
	// 				role="alert">Wrong Password!');
	// 				redirect('passwordsalah');
	// 			}
	// 		}else{
	// 			$this->session->set_flashdata('message','<div class="alert alert-danger" 
	// 			role="alert">this email has not been activated!');
	// 			redirect('auth');
		
	// 		}
	// 	}
	// }
	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		
		$this->session->set_flashdata('message','<div class="alert alert-danger" 
		role="alert">this email has not been activated!');
		redirect('auth');
	}
}