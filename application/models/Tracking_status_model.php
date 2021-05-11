<?php

class Tracking_status_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  /*
  * Get tracking_status by
  */
  function get_tracking_statu($array)
  {
    $this->db->select('tracking_status.*');
    $this->db->select('status_pasien.nama_status');
    $this->db->select('pasien.nama_lgkp');
    $this->db->join('status_pasien','tracking_status.id_status=status_pasien.id_status');
    $this->db->join('pasien','tracking_status.ktp_pasien=pasien.nik');
    $this->db->order_by('tanggal','ASC');
    return $this->db->get_where('tracking_status',$array)->result_array();
  }

  /*
  * Get all tracking_status
  */
  function get_all_tracking_status()
  {
    $this->db->order_by('', 'desc');
    return $this->db->get('tracking_status')->result_array();
  }

  /*
  * function to add new tracking_statu
  */
  function add_tracking_statu($params)
  {
    return $this->db->insert('tracking_status',$params);
  }

  /*
  * function to update tracking_statu
  */
  function update_tracking_statu($array,$params)
  {
    $this->db->where($array);
    return $this->db->update('tracking_status',$params);
  }

  /*
  * function to delete tracking_statu
  */
  function delete_tracking_statu($array)
  {
    return $this->db->delete('tracking_status',$array);
  }


  // function get_report_kunjungan_permonth_bynama($bulan,$tahun,$nama){
  //   $query = "select COUNT(*) as jumlah, lengkap.nama FROM (SELECT tujuan.nama,kunjungan.tanggal FROM `kunjungan` JOIN tujuan ON kunjungan.id_tujuan = tujuan.id) as lengkap WHERE year(tanggal)=".$tahun. " AND month(tanggal)=".$bulan." AND lengkap.nama='". $nama."'";
  //
  //   $data = $this->db->query($query);
  //   return $data->result_array();
  // }
}
