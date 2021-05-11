<?php

class Status_pasien extends MY_super_admin_controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Status_pasien_model');
    date_default_timezone_set('Asia/Bangkok');
  }

  /*
  * Listing of status_pasien
  */
  function index()
  {
    $data['status_pasien'] = $this->Status_pasien_model->get_all_status_pasien();

    $data['_view'] = 'admin/status_pasien/index';
    $this->load->view('admin/layouts/main',$data);
  }

  /*
  * Adding a new status_pasien
  */
  function add()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama_status','Nama Status','required');

    if($this->form_validation->run())
    {
      $params = array(
        'id_status' => str_replace("-","",$this->uuid->v4()),
        'nama_status' => $this->input->post('nama_status'),
        'keterangan_status' => $this->input->post('keterangan_status'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      );

      $status_pasien_id = $this->Status_pasien_model->add_status_pasien($params);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/add/success');
      redirect('status_pasien/index');
    }
    else
    {
      $data['_view'] = 'admin/status_pasien/add';
      $this->load->view('admin/layouts/main',$data);
    }
  }

  /*
  * Editing a status_pasien
  */
  function edit($id_status)
  {
    // check if the status_pasien exists before trying to edit it
    $data['status_pasien'] = $this->Status_pasien_model->get_status_pasien($id_status);

    if(isset($data['status_pasien']['id_status']))
    {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('nama_status','Nama Status','required');

      if($this->form_validation->run())
      {
        $params = array(
          'nama_status' => $this->input->post('nama_status'),
          'keterangan_status' => $this->input->post('keterangan_status'),
          'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->Status_pasien_model->update_status_pasien($id_status,$params);
        $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/edit/success');
        redirect('status_pasien/index');
      }
      else
      {
        $data['_view'] = 'admin/status_pasien/edit';
        $this->load->view('admin/layouts/main',$data);
      }
    }
    else
    show_error('The status_pasien you are trying to edit does not exist.');
  }

  /*
  * Deleting status_pasien
  */
  function remove($id_status)
  {
    $status_pasien = $this->Status_pasien_model->get_status_pasien($id_status);

    // check if the status_pasien exists before trying to delete it
    if(isset($status_pasien['id_status']))
    {
      $this->Status_pasien_model->delete_status_pasien($id_status);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/delete/success');
      redirect('status_pasien/index');
    }
    else
    show_error('The status_pasien you are trying to delete does not exist.');
  }

}
