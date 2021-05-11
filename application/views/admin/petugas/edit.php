<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Ubah Petugas</h3>
      </div>
      <?php echo form_open('petugas/edit/'.$petugas['id_petugas']); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
            <div class="form-group">
              <input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $petugas['username']); ?>" class="form-control" id="username" />
            </div>
          </div>
          <div class="col-md-12">
            <label for="password" class="control-label">Password</label>
            <div class="form-group">
              <input type="text" name="password" value="" class="form-control" id="password" />
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_petugas" class="control-label">Nama</label>
            <div class="form-group">
              <input type="text" name="nama_petugas" value="<?php echo ($this->input->post('nama_petugas') ? $this->input->post('nama_petugas') : $petugas['nama_petugas']); ?>" class="form-control" id="nama_petugas" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="aktif" class="control-label"><span class="text-danger">*</span>Status</label>
              <select class="form-control" name="aktif" id='aktif'>
                <option value="0">Tidak Aktif</option>
                <option value="1" <?php echo $petugas['aktif']=='1'?'selected':""; ?> >Aktif</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <label for="deskripsi" class="control-label">Deskripsi</label>
            <div class="form-group">
              <input type="text" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $petugas['deskripsi']); ?>" class="form-control" id="deskripsi" />
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
