<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		$this->load->helper('password_helper');
		$this->load->model("Petugas_model");
	}

	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()){

			$username= $this->input->post('username');
			$password = $this->input->post('password');
			if($this->is_registered($username,$password)){
				$this->login_success($username);
			}else{
				$this->login_failed();
			}
		}else{
			if($this->is_section_active()){
				$this->login_success($this->session->userdata(SESSIONDATA_LOGIN_PETUGAS_USERNAME));
			}
			$this->load->view('login');
		}
	}
	private function is_section_active(){
		if($this->session->has_userdata(SESSIONDATA_LOGIN_PETUGAS_ID)){
			return true;
		}
		return false;
	}

	private function is_registered($user,$pass){
		$user = $this->Petugas_model->get_petugas_byusername($user);

		//print_r($user);
		if($user){
			if(password_verify($pass, $user['password']) && $user['aktif']=='1') {
				return true;
			}
		}
		return false;
	}

	private function login_success($username){
		$user = $this->Petugas_model->get_petugas_byusername($username);
		$newdata = [
			SESSIONDATA_LOGIN_PETUGAS_ID => $user['id_petugas'],
			SESSIONDATA_LOGIN_PETUGAS_USERNAME  => $username,
			SESSIONDATA_LOGIN_PETUGAS_PETUGAS  => $user['nama_petugas'],
			SESSIONDATA_LOGIN_PETUGAS_DESKRIPSI => $user['deskripsi'],
			SESSIONDATA_LOGIN_PETUGAS_LOGGEDIN => TRUE
		];
		$this->session->set_userdata($newdata);


		redirect('dashboard/index');
	}
	private function login_failed(){
		$this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/login/error');
		$this->load->view('login');
	}
	public function logout(){
		$this->session->sess_destroy();

		redirect('authen/index');
	}

}
