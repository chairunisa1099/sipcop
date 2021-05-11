<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Data Pasien</h3>
      </div>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <h5>Biodata Pasien</h5>
          </div>
          <div class="col-md-12">
            <label for="id_status" class="control-label">Status</label>
            <div class="form-group">
              <select disabled class="form-control" name="id_status" id="id_status">
                <?php foreach($status as $st){ ?>
                  <?php $selected = ($st['id_status']==$statussekarang)? "selected = 'selected'" :''; ?>
                  <option value="<?php echo $st['id_status']; ?>" <?php echo $selected; ?>><?php echo $st['nama_status']; ?></option>
                <?php } ?>
              </select>
              <span class="text-danger"><?php echo form_error('id_status'); ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nik" class="control-label"><span class="text-danger">*</span>No KTP</label>
            <div class="form-group">
              <input disabled type="number" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $pasien['nik']); ?>" class="form-control" id="nik" />
              <span class="text-danger"><?php echo form_error('nik');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp" class="control-label"><span class="text-danger">*</span>Nama Lengkap</label>
            <div class="form-group">
              <input disabled type="text" name="nama_lgkp" value="<?php echo ($this->input->post('nama_lgkp') ? $this->input->post('nama_lgkp') : $pasien['nama_lgkp']); ?>" class="form-control" id="nama_lgkp" />
              <span class="text-danger"><?php echo form_error('nama_lgkp');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="jenis_klmin" class="control-label"><span class="text-danger">*</span>Jenis Kelamin</label>
            <div class="form-group">
              <select disabled name="jenis_klmin" class="form-control">
                <?php
                $jenis_klmin_values = array(
                  'L'=>'Laki - Laki',
                  'P'=>'Perempuan',
                );

                foreach($jenis_klmin_values as $value => $display_text)
                {
                  $selected = ($value == $pasien['jenis_klmin']) ? ' selected="selected"' : "";

                  echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                }
                ?>
              </select>
              <span class="text-danger"><?php echo form_error('jenis_klmin');?></span>
            </div>
          </div>

          <div class="col-md-6">
            <label for="tmpt_lhr" class="control-label">Tempat Lahir</label>
            <div class="form-group">
              <input disabled type="text" name="tmpt_lhr" value="<?php echo ($this->input->post('tmpt_lhr') ? $this->input->post('tmpt_lhr') : $pasien['tmpt_lhr']); ?>" class="form-control" id="tmpt_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="tgl_lhr" class="control-label">Tanggal Lahir</label>
            <div class="form-group">
              <input disabled type="date" name="tgl_lhr" value="<?php echo date('Y-m-d', strtotime($pasien['tgl_lhr'])); ?>" class="form-control" id="tgl_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="gol_darah" class="control-label">Gol Darah</label>
            <div class="form-group">
              <input disabled type="text" name="gol_darah" value="<?php echo ($this->input->post('gol_darah') ? $this->input->post('gol_darah') : $pasien['gol_darah']); ?>" class="form-control" id="gol_darah" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="agama" class="control-label">Agama</label>
            <div class="form-group">
              <input disabled type="text" name="agama" value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $pasien['agama']); ?>" class="form-control" id="agama" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="no_akta_lhr" class="control-label">No Akta Lhr</label>
            <div class="form-group">
              <input disabled type="text" name="no_akta_lhr" value="<?php echo ($this->input->post('no_akta_lhr') ? $this->input->post('no_akta_lhr') : $pasien['no_akta_lhr']); ?>" class="form-control" id="no_akta_lhr" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="status_kawin" class="control-label">Status Kawin</label>
            <div class="form-group">
              <input disabled type="text" name="status_kawin" value="<?php echo ($this->input->post('status_kawin') ? $this->input->post('status_kawin') : $pasien['status_kawin']); ?>" class="form-control" id="status_kawin" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="no_akta_kwn" class="control-label">No Akta Kawin</label>
            <div class="form-group">
              <input disabled type="text" name="no_akta_kwn" value="<?php echo ($this->input->post('no_akta_kwn') ? $this->input->post('no_akta_kwn') : $pasien['no_akta_kwn']); ?>" class="form-control" id="no_akta_kwn" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="tgl_kwn" class="control-label">Tanggal Kawin</label>
            <div class="form-group">
              <input disabled type="date" name="tgl_kwn" value="<?php echo date('Y-m-d', strtotime($pasien['tgl_kwn'])); ?>" class="form-control" id="tgl_kwn" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="pendidikan" class="control-label">Pendidikan</label>
            <div class="form-group">
              <input disabled type="text" name="pendidikan" value="<?php echo ($this->input->post('pendidikan') ? $this->input->post('pendidikan') : $pasien['pendidikan']); ?>" class="form-control" id="pendidikan" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="pekerjaan" class="control-label">Pekerjaan</label>
            <div class="form-group">
              <input disabled type="text" name="pekerjaan" value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $pasien['pekerjaan']); ?>" class="form-control" id="pekerjaan" />
            </div>
          </div>
          <div class="col-md-12">
            <h5>Biodata Keluarga</h5>
          </div>
          <div class="col-md-12">
            <label for="no_kk" class="control-label"><span class="text-danger">*</span>No Kk</label>
            <div class="form-group">
              <input disabled type="number" name="no_kk" value="<?php echo ($this->input->post('no_kk') ? $this->input->post('no_kk') : $pasien['no_kk']); ?>" class="form-control" id="no_kk" />
              <span disabled class="text-danger"><?php echo form_error('no_kk');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="hub_kel" class="control-label"><span class="text-danger">*</span>Hubungan Keluarga</label>
            <div class="form-group">
              <input disabled type="text" name="hub_kel" value="<?php echo ($this->input->post('hub_kel') ? $this->input->post('hub_kel') : $pasien['hub_kel']); ?>" class="form-control" id="hub_kel" />
              <span class="text-danger"><?php echo form_error('hub_kel');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp_ibu" class="control-label"><span class="text-danger">*</span>Nama Lgkp Ibu</label>
            <div class="form-group">
              <input disabled type="text" name="nama_lgkp_ibu" value="<?php echo ($this->input->post('nama_lgkp_ibu') ? $this->input->post('nama_lgkp_ibu') : $pasien['nama_lgkp_ibu']); ?>" class="form-control" id="nama_lgkp_ibu" />
              <span class="text-danger"><?php echo form_error('nama_lgkp_ibu');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_lgkp_ayah" class="control-label"><span class="text-danger">*</span>Nama Lgkp Ayah</label>
            <div class="form-group">
              <input disabled type="text" name="nama_lgkp_ayah" value="<?php echo ($this->input->post('nama_lgkp_ayah') ? $this->input->post('nama_lgkp_ayah') : $pasien['nama_lgkp_ayah']); ?>" class="form-control" id="nama_lgkp_ayah" />
              <span class="text-danger"><?php echo form_error('nama_lgkp_ayah');?></span>
            </div>
          </div>

          <div class="col-md-12">
            <h5>Tempat Tinggal</h5>
          </div>
          <div class="col-md-12">
            <label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
            <div class="form-group">
              <input disabled type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pasien['alamat']); ?>" class="form-control" id="alamat" />
              <span class="text-danger"><?php echo form_error('alamat');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="no_rt" class="control-label"><span class="text-danger">*</span>No Rt</label>
            <div class="form-group">
              <input disabled type="text" name="no_rt" value="<?php echo ($this->input->post('no_rt') ? $this->input->post('no_rt') : $pasien['no_rt']); ?>" class="form-control" id="no_rt" />
              <span class="text-danger"><?php echo form_error('no_rt');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="no_rw" class="control-label"><span class="text-danger">*</span>No Rw</label>
            <div class="form-group">
              <input disabled type="text" name="no_rw" value="<?php echo ($this->input->post('no_rw') ? $this->input->post('no_rw') : $pasien['no_rw']); ?>" class="form-control" id="no_rw" />
              <span class="text-danger"><?php echo form_error('no_rw');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kel" class="control-label"><span class="text-danger">*</span>Nama Kelurahan</label>
            <div class="form-group">
              <input disabled type="text" name="nama_kel" value="<?php echo ($this->input->post('nama_kel') ? $this->input->post('nama_kel') : $pasien['nama_kel']); ?>" class="form-control" id="nama_kel" />
              <span class="text-danger"><?php echo form_error('nama_kel');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kec" class="control-label"><span class="text-danger">*</span>Nama Kecamatan</label>
            <div class="form-group">
              <select disabled class="form-control" name="nama_kec" id='nama_kec'>
                <?php foreach($kecamatan as $kc){ ?>
                  <?php $selected= ($kc==$pasien['nama_kec'])?"selected='selected'":''; ?>
                  <option value="<?php echo $kc; ?>" <?php echo $selected; ?> ><?php echo $kc; ?></option>
                <?php } ?>
              </select>
              <span class="text-danger"><?php echo form_error('nama_kec');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_kabupaten" class="control-label"><span class="text-danger">*</span>Kabupaten</label>
            <div class="form-group">
              <select disabled class="form-control" name="nama_kabupaten" id='nama_kabupaten'>
                <?php foreach($kabupaten as $kb){ ?>
                  <?php $selected= ($kb==$pasien['nama_kabupaten'])?"selected='selected'":''; ?>
                  <option value="<?php echo $kb; ?>" <?php echo $selected; ?> ><?php echo $kb; ?></option>
                <?php } ?>
              </select>
              <span class="text-danger"><?php echo form_error('nama_kabupaten');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="id_ruang" class="control-label">Ruang</label>
            <div class="form-group">
              <select disabled class="form-control" name="id_ruang" id='id_ruang'>
                <?php foreach($ruang_rawat as $rr){ ?>
                  <?php $selected= ($rr['id_ruang']==$pasien['id_ruang'])?"selected='selected'":''; ?>
                  <option value="<?php echo $rr['id_ruang']; ?>" <?php echo $selected; ?> ><?php echo $rr['zona_ruang']; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
