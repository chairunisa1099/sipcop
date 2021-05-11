<?php

class Status_pasien_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  /*
  * Get status_pasien by id_status
  */
  function get_status_pasien($id_status)
  {
    return $this->db->get_where('status_pasien',array('id_status'=>$id_status))->row_array();
  }

  /*
  * Get all status_pasien
  */
  function get_all_status_pasien()
  {
    $this->db->order_by('nama_status', 'asc');
    return $this->db->get('status_pasien')->result_array();
  }

  /*
  * function to add new status_pasien
  */
  function add_status_pasien($params)
  {
    $this->db->insert('status_pasien',$params);
    return $this->db->insert_id();
  }

  /*
  * function to update status_pasien
  */
  function update_status_pasien($id_status,$params)
  {
    $this->db->where('id_status',$id_status);
    return $this->db->update('status_pasien',$params);
  }

  /*
  * function to delete status_pasien
  */
  function delete_status_pasien($id_status)
  {
    return $this->db->delete('status_pasien',array('id_status'=>$id_status));
  }
}
