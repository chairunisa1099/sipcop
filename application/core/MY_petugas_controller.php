<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_petugas_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->islogin();
	}

	protected function islogin(){
		if(!$this->session->has_userdata('session_copid_id_petugas')){
			redirect('authen');
		}
	}
}
