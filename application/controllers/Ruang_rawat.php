<?php

class Ruang_rawat extends MY_super_admin_controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Ruang_rawat_model');
    date_default_timezone_set('Asia/Bangkok');
  }

  /*
  * Listing of ruang_rawat
  */
  function index()
  {
    $data['ruang_rawat'] = $this->Ruang_rawat_model->get_all_ruang_rawat();

    $data['_view'] = 'admin/ruang_rawat/index';
    $this->load->view('admin/layouts/main',$data);
  }

  /*
  * Adding a new ruang_rawat
  */
  function add()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('zona_ruang','Zona Ruang','required');

    if($this->form_validation->run())
    {
      $params = array(
        'id_ruang' => str_replace("-","",$this->uuid->v4()),
        'zona_ruang' => $this->input->post('zona_ruang'),
        'keterangan_ruang' => $this->input->post('keterangan_ruang'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      );

      $ruang_rawat_id = $this->Ruang_rawat_model->add_ruang_rawat($params);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/add/success');
      redirect('ruang_rawat/index');
    }
    else
    {
      $data['_view'] = 'admin/ruang_rawat/add';
      $this->load->view('admin/layouts/main',$data);
    }
  }

  /*
  * Editing a ruang_rawat
  */
  function edit($id_ruang)
  {
    // check if the ruang_rawat exists before trying to edit it
    $data['ruang_rawat'] = $this->Ruang_rawat_model->get_ruang_rawat($id_ruang);

    if(isset($data['ruang_rawat']['id_ruang']))
    {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('zona_ruang','Zona Ruang','required');

      if($this->form_validation->run())
      {
        $params = array(
          'zona_ruang' => $this->input->post('zona_ruang'),
          'keterangan_ruang' => $this->input->post('keterangan_ruang'),
          'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->Ruang_rawat_model->update_ruang_rawat($id_ruang,$params);
        $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/edit/success');
        redirect('ruang_rawat/index');
      }
      else
      {
        $data['_view'] = 'admin/ruang_rawat/edit';
        $this->load->view('admin/layouts/main',$data);
      }
    }
    else
    show_error('The ruang_rawat you are trying to edit does not exist.');
  }

  /*
  * Deleting ruang_rawat
  */
  function remove($id_ruang)
  {
    $ruang_rawat = $this->Ruang_rawat_model->get_ruang_rawat($id_ruang);

    // check if the ruang_rawat exists before trying to delete it
    if(isset($ruang_rawat['id_ruang']))
    {
      $this->Ruang_rawat_model->delete_ruang_rawat($id_ruang);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/delete/success');
      redirect('ruang_rawat/index');
    }
    else
    show_error('The ruang_rawat you are trying to delete does not exist.');
  }

}
