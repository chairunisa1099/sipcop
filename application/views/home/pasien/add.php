
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Pasien</h3>
      </div>
      <?php echo form_open('pasien/add'); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <h5>Biodata Pasien</h5>
          </div>
          <div class="col-md-12">
            <label for="nik" class="control-label"><span class="text-danger">*</span>No KTP</label>
            <div class="form-group">
              <input value="" type="number" name="nik" value="<?php echo $this->input->post('nik'); ?>" class="form-control" id="nik" />
              <span class="text-danger"><?php echo form_error('nik');?></span>
              <a id="cari_ktp" class="btn btn-primary right pull-right" >Cari</a>
            </div>
          </div>
          <div class="col-md-12">
            <label for="id_status" class="control-label">Status</label>
            <div class="form-group">
              <select class="form-control" name="id_status" id="id_status">
                <?php foreach($status as $st){ ?>
                  <option value="<?php echo $st['id_status']; ?>"><?php echo $st['nama_status']; ?></option>
                <?php } ?>
              </select>
              <a data-toggle="modal" data-target="#myModal" class="right pull-right btn btn-info btn-sm">Daftar Status</a>
              <span class="text-danger"><?php echo form_error('id_status'); ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp" class="control-label"><span class="text-danger">*</span>Nama Lengkap</label>
            <div class="form-group">
              <input type="text" name="nama_lgkp" value="<?php echo $this->input->post('nama_lgkp'); ?>" class="form-control" id="nama_lgkp" />
              <span class="text-danger"><?php echo form_error('nama_lgkp');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="jenis_klmin" class="control-label"><span class="text-danger">*</span>Jenis Kelamin</label>
            <div class="form-group">
              <select name="jenis_klmin" class="form-control">
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
              <span class="text-danger"><?php echo form_error('jenis_klmin');?></span>
            </div>
          </div>
          <div class="col-md-6">
            <label for="tmpt_lhr" class="control-label">Tempat Lahir</label>
            <div class="form-group">
              <input type="text" name="tmpt_lhr" value="<?php echo $this->input->post('tmpt_lhr'); ?>" class="form-control" id="tmpt_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="tgl_lhr" class="control-label">Tanggal Lahir</label>
            <div class="form-group">
              <input type="date" name="tgl_lhr" value="<?php echo $this->input->post('tgl_lhr'); ?>" class="form-control" id="tgl_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="gol_darah" class="control-label">Gol Darah</label>
            <div class="form-group">
              <input type="text" name="gol_darah" value="<?php echo $this->input->post('gol_darah'); ?>" class="form-control" id="gol_darah" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="agama" class="control-label">Agama</label>
            <div class="form-group">
              <input type="text" name="agama" value="<?php echo $this->input->post('agama'); ?>" class="form-control" id="agama" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="no_akta_lhr" class="control-label">No Akta Lhr</label>
            <div class="form-group">
              <input type="text" name="no_akta_lhr" value="<?php echo $this->input->post('no_akta_lhr'); ?>" class="form-control" id="no_akta_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="status_kawin" class="control-label">Status Kawin</label>
            <div class="form-group">
              <input type="text" name="status_kawin" value="<?php echo $this->input->post('status_kawin'); ?>" class="form-control" id="status_kawin" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="no_akta_kwn" class="control-label">No Akta Kawin</label>
            <div class="form-group">
              <input type="text" name="no_akta_kwn" value="<?php echo $this->input->post('no_akta_kwn'); ?>" class="form-control" id="no_akta_kwn" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="tgl_kwn" class="control-label">Tanggal Kawin</label>
            <div class="form-group">
              <input type="date" name="tgl_kwn" value="<?php echo $this->input->post('tgl_kwn'); ?>" class="form-control" id="tgl_kwn" />
            </div>
          </div>

          <div class="col-md-6">
            <label for="pendidikan" class="control-label">Pendidikan</label>
            <div class="form-group">
              <input type="text" name="pendidikan" value="<?php echo $this->input->post('pendidikan'); ?>" class="form-control" id="pendidikan" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="pekerjaan" class="control-label">Pekerjaan</label>
            <div class="form-group">
              <input type="text" name="pekerjaan" value="<?php echo $this->input->post('pekerjaan'); ?>" class="form-control" id="pekerjaan" />
            </div>
          </div>
          <div class="col-md-12">
            <h5>Biodata Keluarga</h5>
          </div>
          <div class="col-md-12">
            <label for="no_kk" class="control-label"><span class="text-danger">*</span>No Kk</label>
            <div class="form-group">
              <input type="number" name="no_kk" value="<?php echo $this->input->post('no_kk'); ?>" class="form-control" id="no_kk" />
              <span class="text-danger"><?php echo form_error('no_kk');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="hub_kel" class="control-label"><span class="text-danger">*</span>Hubungan Keluarga</label>
            <div class="form-group">
              <input type="text" name="hub_kel" value="<?php echo $this->input->post('hub_kel'); ?>" class="form-control" id="hub_kel" />
              <span class="text-danger"><?php echo form_error('hub_kel');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp_ibu" class="control-label"><span class="text-danger">*</span>Nama Lengkap Ibu</label>
            <div class="form-group">
              <input type="text" name="nama_lgkp_ibu" value="<?php echo $this->input->post('nama_lgkp_ibu'); ?>" class="form-control" id="nama_lgkp_ibu" />
              <span class="text-danger"><?php echo form_error('nama_lgkp_ibu');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp_ayah" class="control-label"><span class="text-danger">*</span>Nama Lengkap Ayah</label>
            <div class="form-group">
              <input type="text" name="nama_lgkp_ayah" value="<?php echo $this->input->post('nama_lgkp_ayah'); ?>" class="form-control" id="nama_lgkp_ayah" />
              <span class="text-danger"><?php echo form_error('nama_lgkp_ayah');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <h5>Tempat Tinggal</h5>
          </div>
          <div class="col-md-12">
            <label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
            <div class="form-group">
              <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
              <span class="text-danger"><?php echo form_error('alamat');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="no_rt" class="control-label"><span class="text-danger">*</span>No Rt</label>
            <div class="form-group">
              <input type="number" name="no_rt" value="<?php echo $this->input->post('no_rt'); ?>" class="form-control" id="no_rt" />
              <span class="text-danger"><?php echo form_error('no_rt');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="no_rw" class="control-label"><span class="text-danger">*</span>No Rw</label>
            <div class="form-group">
              <input type="number" name="no_rw" value="<?php echo $this->input->post('no_rw'); ?>" class="form-control" id="no_rw" />
              <span class="text-danger"><?php echo form_error('no_rw');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kel" class="control-label"><span class="text-danger">*</span>Nama Kelurahan</label>
            <div class="form-group">
              <input type="text" name="nama_kel" value="<?php echo $this->input->post('nama_kel'); ?>" class="form-control" id="nama_kel" />
              <span class="text-danger"><?php echo form_error('nama_kel');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kec" class="control-label"><span class="text-danger">*</span>Nama Kecamatan</label>
            <div class="form-group">
              <select class="form-control" name="nama_kec" id="nama_kec">
                <?php foreach($kecamatan as $kc){ ?>
                  <option value="<?php echo $kc; ?>"><?php echo $kc; ?></option>
                <?php } ?>
                <span class="text-danger"><?php echo form_error('nama_kec');?></span>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kabupaten" class="control-label"><span class="text-danger">*</span>Nama Kabupaten</label>
            <div class="form-group">
              <select class="form-control" name="nama_kabupaten" id="nama_kabupaten">
                <?php foreach($kabupaten as $kb){ ?>
                  <option value="<?php echo $kb; ?>"><?php echo $kb; ?></option>
                <?php } ?>
                <span class="text-danger"><?php echo form_error('nama_kabupaten');?></span>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <label for="id_ruang" class="control-label">Ruang</label>
            <div class="form-group">
              <select class="form-control" name="id_ruang" id="id_ruang">
                <?php foreach($ruang_rawat as $r){ ?>
                  <option value="<?php echo $r['id_ruang']; ?>"><?php echo $r['zona_ruang']; ?></option>
                <?php } ?>
              </select>
              <span class="text-danger"><?php echo form_error('id_ruang'); ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-success">
          <i class="fa fa-check"></i> Simpan
        </button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Daftar Status</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <tr>
            <th>Nama Status</th>
            <th>Keterangan</th>
          </tr>
          <?php foreach ($status as $item_status): ?>
            <tr>
              <td><?php echo $item_status['nama_status']; ?></td>
              <td><?php echo $item_status['keterangan_status']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  function titleCase(string) {
    var sentence = string.toLowerCase().split(" ");
    for(var i = 0; i< sentence.length; i++){
      sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
    }
    return sentence;
  }
  $('#cari_ktp').on('click',function(){
    var nik=$('#nik').val()
    $.ajax({
      url: "<?php echo site_url('pasien/api_ktp'); ?>",
      method: 'post',
      data : {nik : nik},
      dataType: 'json',
      success: function(response){
        var obj = JSON.parse(response)
        if(obj.response.code == '200'){
          console.log(obj.response.data.dukcapil_penduduk_by_nik[0]['AGAMA'])
          var dataktp  = obj.response.data.dukcapil_penduduk_by_nik[0]
          $("#no_kk").val(dataktp['NO_KK'])
          $("#nama_lgkp").val(dataktp['NAMA_LGKP'])
          $("#tmpt_lhr").val(dataktp['TMPT_LHR'])
          $("#tgl_lhr").val(dataktp['TGL_LHR'])
          $("#jenis_klmin").val(dataktp['JENIS_KLMIN'])
          $("#gol_darah").val(dataktp['GOL_DARAH'])
          $("#agama").val(dataktp['AGAMA'])
          $("#no_akta_lhr").val(dataktp['NO_AKTA_LHR'])
          $("#status_kawin").val(dataktp['STATUS_KAWIN'])
          $("#no_akta_kwn").val(dataktp['NO_AKTA_KWN'])
          $("#tgl_kwn").val(dataktp['TGL_KWN'])
          $("#hub_kel").val(dataktp['HUB_KEL'])
          $("#pendidikan").val(dataktp['PENDIDIKAN'])
          $("#pekerjaan").val(dataktp['PEKERJAAN'])
          $("#nama_lgkp_ibu").val(dataktp['NAMA_LGKP_IBU'])
          $("#nama_lgkp_ayah").val(dataktp['NAMA_LGKP_AYAH'])
          $("#nama_kel").val(dataktp['NAMA_KEL'])
          $("#alamat").val(dataktp['ALAMAT'])
          $("#no_rt").val(dataktp['NO_RT'])
          $("#no_rw").val(dataktp['NO_RW'])
          $('#nama_kec option[value="'+ titleCase(dataktp['NAMA_KEC']) +'"]').prop('selected', true);

        }else{
          alert('Data Tidak Ditemukan. Silahkan Isi Manual.')
        }
      }

    })
  })
});
</script>
