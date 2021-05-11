<?php

class Petugas extends MY_super_admin_controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Petugas_model');
    $this->load->helper('string');
    $this->load->helper('password_helper');
    date_default_timezone_set('Asia/Bangkok');
  }

  /*
  * Listing of petugas
  */
  function index()
  {
    $data['petugas'] = $this->Petugas_model->get_all_petugas();

    $data['_view'] = 'admin/petugas/index';
    $this->load->view('admin/layouts/main',$data);

  }

  /*
  * Adding a new petugas
  */
  function add()
  {
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run())
    {
      $params = array(
        'id_petugas' =>str_replace("-","",$this->uuid->v4()),
        'aktif' => $this->input->post('aktif'),
        'username' => $this->input->post('username'),
        'password' => hash_password($this->input->post('password')),
        'nama_petugas' => $this->input->post('nama_petugas'),
        'deskripsi' => $this->input->post('deskripsi'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'created_by' => $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME),
        'modified_by' => $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME),
      );
      $petugas_id = $this->Petugas_model->add_petugas($params);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/add/success');
      redirect('petugas/index');
    }
    else
    {
      $data['_view'] = 'admin/petugas/add';
      $this->load->view('admin/layouts/main',$data);
    }
  }

  /*
  * Editing a petugas
  */
  function edit($id)
  {
    // check if the petugas exists before trying to edit it
    $data['petugas'] = $this->Petugas_model->get_petugas($id);

    if(isset($data['petugas']['id_petugas']))
    {
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run())
      {
        $params = array(
          'aktif' => $this->input->post('aktif'),
          'username' => $this->input->post('username'),
          'password' => hash_password($this->input->post('password')),
          'nama_petugas' => $this->input->post('nama_petugas'),
          'deskripsi' => $this->input->post('deskripsi'),
          'updated_at' => date('Y-m-d H:i:s'),
          'modified_by' => $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME),
        );
        if($this->input->post('password')){
          $param['password'] = hash_password($this->input->post('password'));
        }
        $this->Petugas_model->update_petugas($id,$params);
        $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/edit/success');
        redirect('petugas/index');
      }
      else
      {
        $data['_view'] = 'admin/petugas/edit';
        $this->load->view('admin/layouts/main',$data);
      }
    }
    else
    show_error('The petugas you are trying to edit does not exist.');
  }

  /*
  * Deleting petugas
  */
  function remove($id)
  {
    $petugas = $this->Petugas_model->get_petugas($id);

    // check if the petugas exists before trying to delete it
    if(isset($petugas['id_petugas']))
    {
      $this->Petugas_model->delete_petugas($id);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/delete/success');
      redirect('petugas/index');
    }
    else
    show_error('The petugas you are trying to delete does not exist.');
  }

}
