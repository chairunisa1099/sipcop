<?php

class Pasien_model extends CI_Model
{
  var $table = 'pasien';
  var $column_order = array('nik','no_kk','nama_lgkp','tmpt_lhr','tgl_lhr','jenis_klmin','gol_darah','agama','no_akta_lhr','status_kawin','no_akta_kwn','tgl_kwn','hub_kel','pendidikan','pekerjaan','nama_lgkp_ibu','nama_lgkp_ayah','nama_kel','nama_kec','nama_kabupaten','alamat','no_rt','no_rw','pasien.id_ruang','pasien.id_petugas','ruang_rawat.zona_ruang'); //set column field database for datatable orderable
  var $column_search = array('nik','no_kk','nama_lgkp','tmpt_lhr','tgl_lhr','jenis_klmin','gol_darah','agama','no_akta_lhr','status_kawin','no_akta_kwn','tgl_kwn','hub_kel','pendidikan','pekerjaan','nama_lgkp_ibu','nama_lgkp_ayah','nama_kel','nama_kec','nama_kabupaten','alamat','no_rt','no_rw','pasien.id_ruang','pasien.id_petugas','ruang_rawat.zona_ruang');//set column field database for datatable searchable just firstname , lastname , address are searchable
  var $order = array('nik' => 'desc'); // default order

  function __construct()
  {
    parent::__construct();
  }
  //UNTUK DATATABEL
  private function _get_datatables_query()
  {
      if($this->input->post('id'))
      {
          $this->db->where('id', $this->input->post('id'));
      }
      $this->db->select('pasien.*');
      $this->db->select('petugas.nama_petugas');
      $this->db->select('ruang_rawat.zona_ruang');
      $this->db->from($this->table);
      $this->db->join('petugas','pasien.id_petugas=petugas.id_petugas');
      $this->db->join('ruang_rawat','pasien.id_ruang=ruang_rawat.id_ruang');
      $i = 0;

      foreach ($this->column_search as $item) // looping awal
      {
          if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
          {

              if($i===0) // looping awal
              {
                  $this->db->group_start();
                  $this->db->like($item, $_POST['search']['value']);
              }
              else
              {
                  $this->db->or_like($item, $_POST['search']['value']);
              }

              if(count($this->column_search) - 1 == $i)
                  $this->db->group_end();
          }
          $i++;
      }

      if(isset($_POST['order']))
      {
          $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      }
      else if(isset($this->order))
      {
          $order = $this->order;
          $this->db->order_by(key($order), $order[key($order)]);
      }
  }

  function get_datatables()
  {
      $this->_get_datatables_query();
      if($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
      $query = $this->db->get();
      return $query->result();
  }

  function count_filtered()
  {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
  }
  public function count_all()
  {
      $this->db->from($this->table);
      return $this->db->count_all_results();
  }
  /////////////////////////
  /*
  * Get pasien by nik
  */
  function get_pasien($nik)
  {
    return $this->db->get_where('pasien',array('nik'=>$nik))->row_array();
  }

  /*
  * Get all pasien
  */
  function get_all_pasien()
  {
    $this->db->select('pasien.*');
    $this->db->select('petugas.nama_petugas');
    $this->db->select('ruang_rawat.zona_ruang');
    $this->db->join('petugas','pasien.id_petugas=petugas.id_petugas');
    $this->db->join('ruang_rawat','pasien.id_ruang=ruang_rawat.id_ruang');
    $this->db->order_by('nik', 'desc');
    return $this->db->get('pasien')->result_array();
  }

  /*
  * function to add new pasien
  */
  function add_pasien($params)
  {
    return $this->db->insert('pasien',$params);
  }

  /*
  * function to update pasien
  */
  function update_pasien($nik,$params)
  {
    $this->db->where('nik',$nik);
    return $this->db->update('pasien',$params);
  }

  /*
  * function to delete pasien
  */
  function delete_pasien($nik)
  {
    return $this->db->delete('pasien',array('nik'=>$nik));
  }

}
