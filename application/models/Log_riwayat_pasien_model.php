<?php

class Log_riwayat_pasien_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  /*
  * Get tracking_statu by
  */
  function get_Log_riwayat_pasien($array)
  {
    $this->db->select('Log_riwayat_pasien.*');
    //$this->db->select('status_pasien.nama_status');
    $//this->db->join('status_pasien','Log_riwayat_pasien.id_status=status_pasien.id_status');
    $this->db->order_by('tanggal','ASC');
    return $this->db->get_where('log_riwayat_pasien',$array)->result_array();
  }

  /*
  * Get all Log_riwayat_pasien
  */
  function get_all_Log_riwayat_pasien()
  {
    $this->db->order_by('', 'desc');
    return $this->db->get('log_riwayat_pasien')->result_array();
  }

  /*
  * function to add new tracking_statu
  */
  function add_Log_riwayat_pasien($params)
  {
    return $this->db->insert('log_riwayat_pasien',$params);
  }

  /*
  * function to update tracking_statu
  */
  function update_Log_riwayat_pasien($array,$params)
  {
    $this->db->where($array);
    return $this->db->update('log_riwayat_pasien',$params);
  }

  /*
  * function to delete tracking_statu
  */
  function delete_Log_riwayat_pasien($array)
  {
    return $this->db->delete('log_riwayat_pasien',$array);
  }


  // function get_report_kunjungan_permonth_bynama($bulan,$tahun,$nama){
  //   $query = "select COUNT(*) as jumlah, lengkap.nama FROM (SELECT tujuan.nama,kunjungan.tanggal FROM `kunjungan` JOIN tujuan ON kunjungan.id_tujuan = tujuan.id) as lengkap WHERE year(tanggal)=".$tahun. " AND month(tanggal)=".$bulan." AND lengkap.nama='". $nama."'";
  //
  //   $data = $this->db->query($query);
  //   return $data->result_array();
  // }
}
