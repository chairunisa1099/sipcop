<?php

class Petugas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get petugas by
     */
    function get_petugas_byusername($username)
    {
        return $this->db->get_where('petugas',array('username'=>$username))->row_array();
    }

    /*
     * Get petugas by
     */
    function get_petugas($id)
    {
        return $this->db->get_where('petugas',array('id_petugas'=>$id))->row_array();
    }

    /*
     * Get all petugas
     */
    function get_all_petugas()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('petugas')->result_array();
    }

    /*
     * function to add new petugas
     */
    function add_petugas($params)
    {
        return $this->db->insert('petugas',$params);
    }

    /*
     * function to update petugas
     */
    function update_petugas($id,$params)
    {
        $this->db->where('id_petugas',$id);
        return $this->db->update('petugas',$params);
    }

    /*
     * function to delete petugas
     */
    function delete_petugas($id)
    {
        return $this->db->delete('petugas',array('id_petugas'=>$id));
    }
}
