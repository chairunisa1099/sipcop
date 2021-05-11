<?php

class Ruang_rawat_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  /*
  * Get ruang_rawat by id_ruang
  */
  function get_ruang_rawat($id_ruang)
  {
    return $this->db->get_where('ruang_rawat',array('id_ruang'=>$id_ruang))->row_array();
  }

  /*
  * Get all ruang_rawat
  */
  function get_all_ruang_rawat()
  {
    $this->db->order_by('zona_ruang', 'asc');
    return $this->db->get('ruang_rawat')->result_array();
  }

  /*
  * function to add new ruang_rawat
  */
  function add_ruang_rawat($params)
  {
    $this->db->insert('ruang_rawat',$params);
    return $this->db->insert_id();
  }

  /*
  * function to update ruang_rawat
  */
  function update_ruang_rawat($id_ruang,$params)
  {
    $this->db->where('id_ruang',$id_ruang);
    return $this->db->update('ruang_rawat',$params);
  }

  /*
  * function to delete ruang_rawat
  */
  function delete_ruang_rawat($id_ruang)
  {
    return $this->db->delete('ruang_rawat',array('id_ruang'=>$id_ruang));
  }
}
