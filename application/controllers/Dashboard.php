<?php

class Dashboard extends MY_petugas_controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->model('Tracking_status_model');
    $this->load->model('Status_pasien_model');
  }

  function index()
  {
    //------Grafik Tahunan
    $array_bulan_string=array();
    $array_bulan = [1,2,3,4,5,6,7,8,9,10,11,12];
    foreach ($array_bulan as $bulan) {
      array_push($array_bulan_string, date('F', mktime(0, 0, 0, $bulan, 10))) ;
    }
    $data['sumbux_grafik_line'] = $array_bulan_string;
    $data['data_grafik_tahunan'] = $this->prepare_grafik_tahunan();

    //------Grafik Harian
    if(isset($_POST) && count($_POST) > 0){
      $tahun = $this->input->post('tahun');
      $bulan = $this->input->post('bulan');
      $tgl = $this->input->post('tgl');
      $data['data_grafik_harian'] = $this->prepare_grafik_harian($tgl,$bulan,$tahun);
    }else{
      $data['data_grafik_harian'] = array();
    }
    $data['total_pasien'] = $this->Pasien_model->count_all();
    $data['tanggal_sekarang'] = date('d', time());
    $data['bulan_sekarang'] = date('m', time());
    $data['tahun_sekarang'] = date('Y', time());
    $data['_view'] = 'home/dashboard';
    $this->load->view('home/layouts/main',$data);
  }

  function prepare_grafik_harian($tgl,$bulan,$tahun){
    $tahun_sekarang = date('Y', time());
    $bulan_sekarang = date('m', time());
    $array_bulan = [1,2,3,4,5,6,7,8,9,10,11,12];
    $array_bulan_string=array();
    $array_status = $this->Status_pasien_model->get_all_status_pasien();
    $arrayresult_harian = array();

    foreach($array_status as $item_status){
      $array_jumlahdata = [];

      $result = $this->Tracking_status_model->get_tracking_statu(
        array(
          'day(tanggal)' => $tgl,
          'month(tanggal)' => $bulan,
          'year(tanggal)' => $tahun,
          'tracking_status.id_status' =>$item_status['id_status']
        )
      );
      $jumlahdata = count($result);
      $array_obj= array(
        'name' => $item_status['nama_status'],
        'y' => (int)$jumlahdata
      );
      array_push($arrayresult_harian, $array_obj);
    }


    return $arrayresult_harian;
  }

  function prepare_grafik_tahunan(){
    $tahun_sekarang = date('Y', time());
    $bulan_sekarang = date('m', time());
    $array_bulan = [1,2,3,4,5,6,7,8,9,10,11,12];
    $array_bulan_string=array();
    $array_status = $this->Status_pasien_model->get_all_status_pasien();
    $arrayresult = array();
    //**************************ALGORITMA UNTUK GRAFIK LINE**********************
    foreach ($array_bulan as $bulan) {
      array_push($array_bulan_string, date('F', mktime(0, 0, 0, $bulan, 10))) ;
    }

    foreach($array_status as $item_status){
      $array_jumlahdata = [];
      for($j =0 ; $j< count($array_bulan); $j++){
        $result = $this->Tracking_status_model->get_tracking_statu(
          array(
            'month(tanggal)' => $array_bulan[$j],
            'year(tanggal)' => $tahun_sekarang,
            'tracking_status.id_status' =>$item_status['id_status']
          )
        );
        $jumlahdata = count($result);
        array_push($array_jumlahdata, (int)$jumlahdata);
      }

      //'color' => $this->convert_bilnilai_ke_warna($array_penilaian[$i]),
      $array_obj= array(
        'name' => $item_status['nama_status'],
        'data' => $array_jumlahdata
      );
      array_push($arrayresult, $array_obj);
    }

    return $arrayresult;
  }
}
