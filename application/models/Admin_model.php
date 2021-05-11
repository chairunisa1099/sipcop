<?php

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get admin by
     */
    function get_admin($username)
    {
        return $this->db->get_where('admin',array('username'=>$username))->row_array();
    }

    /*
     * Get all admin
     */
    function get_all_admin()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('admin')->result_array();
    }

    /*
     * function to add new admin
     */
    function add_admin($params)
    {
        $this->db->insert('admin',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update admin
     */
    function update_admin($username,$params)
    {
        $this->db->where('email',$username);
        return $this->db->update('admin',$params);
    }

    /*
     * function to delete admin
     */
    function delete_admin($username)
    {
        return $this->db->delete('admin',array('email'=>$username));
    }
}
