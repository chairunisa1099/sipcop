<?php

class Pasien extends MY_petugas_controller{
  public $array_kabupaten=array('Gresik','Luar Gresik');
  public $array_kecamatan=array('Balongpanggang','Benjeng','Bungah','Cerme','Driyorejo','Duduksampeyan','Dukun','Gresik','Kebomas',	'Kedamean','Panceng','Manyar','Menganti','Sangkapura','Sidayu','Tambak','Ujungpangkah','Wringinanom',"Luar Gresik");
  function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->model('Ruang_rawat_model');
    $this->load->model('Tracking_status_model');
    $this->load->model('Status_pasien_model');
    $this->load->model('Log_riwayat_pasien_model');
    date_default_timezone_set('Asia/Bangkok');
  }

  /*
  * Listing of pasien
  */
  function index()
  {
    $data['pasien'] = $this->Pasien_model->get_all_pasien();
    $data['status'] = $this->Status_pasien_model->get_all_status_pasien();
    $data['_view'] = 'home/pasien/index';
    $this->load->view('home/layouts/main',$data);
  }
  /*
  * Editing a pasien
  */
  function detail($nik)
  {
    // check if the pasien exists before trying to edit it
    $data['pasien'] = $this->Pasien_model->get_pasien($nik);

    if(isset($data['pasien']['nik']))
    {
      $daftarstatus=$this->Tracking_status_model->get_tracking_statu(array('ktp_pasien'=>$nik));
      $data['statussekarang']=end($daftarstatus)['id_status'];
      $data['kecamatan']=$this->array_kecamatan;
      $data['kabupaten']=$this->array_kabupaten;
      $data['status']=$this->Status_pasien_model->get_all_status_pasien();
      $data['ruang_rawat']=$this->Ruang_rawat_model->get_all_ruang_rawat();
      $data['_view'] = 'home/pasien/detail';
      $this->load->view('home/layouts/main',$data);
    }
    else
    show_error('The pasien you are trying to edit does not exist.');
  }

  /*
  * Adding a new pasien
  */
  function add()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nik','No KTP','required|numeric');
    $this->form_validation->set_rules('no_kk','No Kk','required|numeric');
    $this->form_validation->set_rules('nama_lgkp','Nama Lgkp','required');
    $this->form_validation->set_rules('jenis_klmin','Jenis Klmin','required');
    $this->form_validation->set_rules('hub_kel','Hub Kel','required');
    $this->form_validation->set_rules('nama_lgkp_ibu','Nama Lgkp Ibu','required');
    $this->form_validation->set_rules('nama_lgkp_ayah','Nama Lgkp Ayah','required');
    $this->form_validation->set_rules('nama_kel','Nama Kel','required');
    $this->form_validation->set_rules('nama_kec','Nama Kec','required');
    $this->form_validation->set_rules('alamat','Alamat','required');
    $this->form_validation->set_rules('no_rt','No Rt','required');
    $this->form_validation->set_rules('no_rw','No Rw','required');

    if($this->form_validation->run())
    {
      $params = array(
        'nik' => $this->input->post('nik'),
        'jenis_klmin' => $this->input->post('jenis_klmin'),
        'no_kk' => $this->input->post('no_kk'),
        'nama_lgkp' => $this->input->post('nama_lgkp'),
        'tmpt_lhr' => $this->input->post('tmpt_lhr'),
        'tgl_lhr' => $this->input->post('tgl_lhr'),
        'gol_darah' => $this->input->post('gol_darah'),
        'agama' => $this->input->post('agama'),
        'no_akta_lhr' => $this->input->post('no_akta_lhr'),
        'status_kawin' => $this->input->post('status_kawin'),
        'no_akta_kwn' => $this->input->post('no_akta_kwn'),
        'tgl_kwn' => $this->input->post('tgl_kwn'),
        'hub_kel' => $this->input->post('hub_kel'),
        'pendidikan' => $this->input->post('pendidikan'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'nama_lgkp_ibu' => $this->input->post('nama_lgkp_ibu'),
        'nama_lgkp_ayah' => $this->input->post('nama_lgkp_ayah'),
        'nama_kel' => $this->input->post('nama_kel'),
        'nama_kec' => $this->input->post('nama_kec'),
        'alamat' => $this->input->post('alamat'),
        'no_rt' => $this->input->post('no_rt'),
        'no_rw' => $this->input->post('no_rw'),
        'id_ruang' => $this->input->post('id_ruang'),
        'id_petugas' => $this->session->userdata(SESSIONDATA_LOGIN_PETUGAS_ID),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      );
      $params_tracking = array(
        'ktp_pasien' => $this->input->post('nik'),
        'id_status' => $this->input->post('id_status'),
        'tanggal' => $params['created_at'],
      );
      // print_r($params);
      // print_r($params_tracking);
      $pasien_return = $this->Pasien_model->add_pasien($params);
      $tracking_return = $this->Tracking_status_model->add_tracking_statu($params_tracking);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/add/success');
      redirect('pasien/index');
    }
    else
    {
      $data['kecamatan']=$this->array_kecamatan;
      $data['kabupaten']=$this->array_kabupaten;
      $data['status']=$this->Status_pasien_model->get_all_status_pasien();
      $data['ruang_rawat']=$this->Ruang_rawat_model->get_all_ruang_rawat();
      $data['_view'] = 'home/pasien/add';
      $this->load->view('home/layouts/main',$data);
    }
  }

  /*
  * Editing a pasien
  */
  function edit($nik)
  {
    // check if the pasien exists before trying to edit it
    $data['pasien'] = $this->Pasien_model->get_pasien($nik);

    if(isset($data['pasien']['nik']))
    {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('nik','No KTP','required|numeric');
      $this->form_validation->set_rules('no_kk','No Kk','required|numeric');
      $this->form_validation->set_rules('nama_lgkp','Nama Lgkp','required');
      $this->form_validation->set_rules('jenis_klmin','Jenis Klmin','required');
      $this->form_validation->set_rules('hub_kel','Hub Kel','required');
      $this->form_validation->set_rules('nama_lgkp_ibu','Nama Lgkp Ibu','required');
      $this->form_validation->set_rules('nama_lgkp_ayah','Nama Lgkp Ayah','required');
      $this->form_validation->set_rules('nama_kel','Nama Kel','required');
      $this->form_validation->set_rules('nama_kec','Nama Kec','required');
      $this->form_validation->set_rules('alamat','Alamat','required');
      $this->form_validation->set_rules('no_rt','No Rt','required');
      $this->form_validation->set_rules('no_rw','No Rw','required');

      if($this->form_validation->run())
      {
        $params = array(
          'jenis_klmin' => $this->input->post('jenis_klmin'),
          'nik' => $this->input->post('nik'),
          'no_kk' => $this->input->post('no_kk'),
          'nama_lgkp' => $this->input->post('nama_lgkp'),
          'tmpt_lhr' => $this->input->post('tmpt_lhr'),
          'tgl_lhr' => $this->input->post('tgl_lhr'),
          'gol_darah' => $this->input->post('gol_darah'),
          'agama' => $this->input->post('agama'),
          'no_akta_lhr' => $this->input->post('no_akta_lhr'),
          'status_kawin' => $this->input->post('status_kawin'),
          'no_akta_kwn' => $this->input->post('no_akta_kwn'),
          'tgl_kwn' => $this->input->post('tgl_kwn'),
          'hub_kel' => $this->input->post('hub_kel'),
          'pendidikan' => $this->input->post('pendidikan'),
          'pekerjaan' => $this->input->post('pekerjaan'),
          'nama_lgkp_ibu' => $this->input->post('nama_lgkp_ibu'),
          'nama_lgkp_ayah' => $this->input->post('nama_lgkp_ayah'),
          'nama_kel' => $this->input->post('nama_kel'),
          'nama_kec' => $this->input->post('nama_kec'),
          'nama_kabupaten' => $this->input->post('nama_kabupaten'),
          'alamat' => $this->input->post('alamat'),
          'no_rt' => $this->input->post('no_rt'),
          'no_rw' => $this->input->post('no_rw'),
          'id_ruang' => $this->input->post('id_ruang'),
          'id_petugas' => $this->session->userdata(SESSIONDATA_LOGIN_PETUGAS_ID),
          'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->Pasien_model->update_pasien($nik,$params);
        $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/edit/success');
        redirect('pasien/index');
      }
      else
      {
        $data['kecamatan']=$this->array_kecamatan;
        $data['kabupaten']=$this->array_kabupaten;
        $data['status']=$this->Status_pasien_model->get_all_status_pasien();
        $data['ruang_rawat']=$this->Ruang_rawat_model->get_all_ruang_rawat();
        $data['_view'] = 'home/pasien/edit';
        $this->load->view('home/layouts/main',$data);
      }
    }
    else
    show_error('The pasien you are trying to edit does not exist.');
  }

  /*
  * Editing a pasien
  */
  function editstatus($nik)
  {
    // check if the pasien exists before trying to edit it
    $data['pasien'] = $this->Pasien_model->get_pasien($nik);

    if(isset($data['pasien']['nik']))
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('id_status','Status','required');
      if($this->form_validation->run())
      {
        $params = array(
          'id_petugas' => $this->session->userdata(SESSIONDATA_LOGIN_PETUGAS_ID),
          'updated_at' => date('Y-m-d H:i:s'),
        );
        $params_tracking = array(
          'ktp_pasien' => $nik,
          'id_status' => $this->input->post('id_status'),
          'catatan' => $this->input->post('catatan'),
          'tanggal' => $params['updated_at'],
        );

        if($this->input->post('id_status')!=$this->input->post('old_status')){
          $tracking_return = $this->Tracking_status_model->add_tracking_statu($params_tracking);
          $this->Pasien_model->update_pasien($nik,$params);
          $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/edit/success');
        }
        redirect('pasien/index');
      }
      else
      {
        $daftarstatus=$this->Tracking_status_model->get_tracking_statu(array('ktp_pasien'=>$nik));
        $data['statussekarang']=end($daftarstatus)['id_status'];
        $data['status']=$this->Status_pasien_model->get_all_status_pasien();
        $data['_view'] = 'home/pasien/editstatus';
        $this->load->view('home/layouts/main',$data);
      }
    }
    else
    show_error('The pasien you are trying to edit does not exist.');
  }
  /*
  * Deleting pasien
  */
  function remove($nik)
  {
    $pasien = $this->Pasien_model->get_pasien($nik);

    // check if the pasien exists before trying to delete it
    if(isset($pasien['nik']))
    {
      $array_tracking=array(
        'ktp_pasien'=>$nik
      );
      $riwayat_pasien_old=$this->Tracking_status_model->get_tracking_statu($array_tracking);
      foreach ($riwayat_pasien_old as $item) {
        $params_log=array(
          'id_riwayat' => str_replace("-","",$this->uuid->v4()),
          'id_status' => $item['id_status'],
          'ktp_pasien'=> $item['ktp_pasien'],
          'nama_status'=> $item['nama_status'],
          'tanggal'=> $item['tanggal'],
          'catatan'=> $item['catatan'],
          'nama_lgkp'=> $item['nama_lgkp'],
          'nama_status'=> $item['nama_status']
        );

        $return = $this->Log_riwayat_pasien_model->add_Log_riwayat_pasien($params_log);
      }

      $this->Tracking_status_model->delete_tracking_statu($array_tracking);
      $this->Pasien_model->delete_pasien($nik);
      $this->session->set_flashdata(FLASHDATA_PATH_ALLERTS,'allerts/delete/success');
      redirect('pasien/index');
    }
    else
    show_error('The pasien you are trying to delete does not exist.');
  }

  function tracking(){
    // check if the pasien exists before trying to edit it


    $this->load->library('form_validation');
    $this->form_validation->set_rules('nik','No KTP','integer|required');
    if($this->form_validation->run())
    {
      $params=array(
        'ktp_pasien' => $this->input->post('nik')
      );
      $data['riwayat'] = $this->Tracking_status_model->get_tracking_statu($params);
      $data['_view'] = 'home/pasien/trackingriwayat_pasien';
      $this->load->view('home/layouts/main',$data);
    }
    else
    {
      $data['_view'] = 'home/pasien/trackingriwayat_pasien';
      $this->load->view('home/layouts/main',$data);
    }

  }

  // FUNCTION PROCESS
  function api_ktp(){
    $url="http://simantra.gresikkab.go.id/mantra/json/kominfo/dukcapil/dukcapil_penduduk_by_nik";
    $postdata = $this->input->post();
    $accesskey="shiqds3zgq"; //Kunci akses diperoleh dari permohonan akses requester
    $pardata=array("NIK"=>urlencode($postdata['nik']));
    $par="/".http_build_query($pardata);
    $options=array('http'=>
    	array(
    		'method'=>'GET',
    		'header'=>"User-Agent: MANTRA\r\n".
    		          "AccessKey: $accesskey"
    	)
    );
    $context=stream_context_create($options);
    $content=file_get_contents($url.$par,false,$context);
    echo json_encode($content);
  }

  function get_data_pasien_json()
  {

    $list = $this->Pasien_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $riwayat_pasien=$this->Tracking_status_model->get_tracking_statu(array('ktp_pasien'=>$field->nik));
      $status_pasien = end($riwayat_pasien)['nama_status'];

      if($status_pasien=='Selesai Isolasi' || $status_pasien=='Kematian'){
        $buttonstatus = "<a  disabled href='" .  '#' ."'" . "class='btn btn-warning btn-xs'><span class='fa fa-heartbeat'></span> Ubah Status</a>".
        "<br>" .
        "<small>Silahkan Klik Tombol Keluar Untuk Hapus Data Pasien</small>";
      }else{
        $buttonstatus = "<a href='" .  'editstatus/'. $field->nik ."'" . "class='btn btn-warning btn-xs'><span class='fa fa-heartbeat'></span> Ubah Status</a>";
      }

      $row = array();
      $row[] = $status_pasien .
      "<br>" .
      $buttonstatus;
      $row[] = "<small>No Ktp</small><br>".
      $field->nik."<br>".
      "<small>Nama</small><br>".
      $field->nama_lgkp."<br>".
      "<a href='" .  'detail/'. $field->nik ."'" . "class='btn btn-primary btn-xs'><span class='fa fa-list-ul'></span> Detail</a>";
      $row[] = $field->zona_ruang;
      $row[] = "<a href='" .  'edit/'. $field->nik ."'" . "class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Ubah Data</a>" .
      "<br>" .
      "<a href='" .  'remove/'. $field->nik ."'" . "class='btn btn-danger btn-xs' onclick='return confirm(\" Apakah Anda Yakin Akan Menghapus Data Ini ? \")'><span class='fa fa-trash'></span> Keluar</a>";
      $data[] = $row;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->Pasien_model->count_all(),
      "recordsFiltered" => $this->Pasien_model->count_filtered(),
      "data" => $data,
    );
    //output dalam format JSON
    echo json_encode($output);
  }
}
