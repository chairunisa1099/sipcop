<?php

class Admin extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->helper('password_helper');
  }

  /*
  * Listing of user
  */
  function index()
  {
    // $data['user'] = $this->Super_admin_model->get_all_super_admin();
    //
    // $data['_view'] = 'admin/user/index';
    // $this->load->view('admin/layouts/main',$data);
    echo str_replace("-","",$this->uuid->v4()) . "<br>";
    echo hash_password("adminganteng");
  }



}
