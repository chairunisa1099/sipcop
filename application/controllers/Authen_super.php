<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authen_super extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		$this->load->helper('password_helper');
		$this->load->model("Admin_model");
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
				$this->login_success($this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME));
			}
			$this->load->view('login_super');
		}
	}
	private function is_section_active(){
		if($this->session->has_userdata(SESSIONDATA_LOGIN_ADMIN_ID)){
			return true;
		}
		return false;
	}

	private function is_registered($user,$pass){
		$user = $this->Admin_model->get_admin($user);

		//print_r($user);
		if($user){
			if(password_verify($pass, $user['password'])&& $user['aktif']=='1') {
				return true;
			}
		}
		return false;
	}

	private function login_success($username){
		$user = $this->Admin_model->get_admin($username);
		$newdata = [
			SESSIONDATA_LOGIN_ADMIN_ID => $user['id_petugas'],
			SESSIONDATA_LOGIN_ADMIN_USERNAME => $username,
			SESSIONDATA_LOGIN_ADMIN_NAMA => $user['nama_petugas'],
			SESSIONDATA_LOGIN_ADMIN_DESKRIPSI => $user['deskripsi'],
			SESSIONDATA_LOGIN_ADMIN_LOGGEDIN => TRUE
		];
		$this->session->set_userdata($newdata);


		redirect('petugas');
		//redirect('slider/index');
	}
	private function login_failed(){
		$data['_view']='login';
		$this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/login/error');
		$this->load->view('login_super',$data);
	}
	public function logout(){
		$this->session->sess_destroy();

		redirect('authen_super/index');
	}

}
