<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Petugas</h3>
      </div>
      <?php echo form_open('petugas/add'); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
            <div class="form-group">
              <input type="username" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
              <span class="text-danger"><?php echo form_error('username'); ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
            <div class="form-group">
              <input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
              <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="nama_petugas" class="control-label">Nama</label>
            <div class="form-group">
              <input type="text" name="nama_petugas" value="<?php echo $this->input->post('nama_petugas'); ?>" class="form-control" id="nama_petugas" />
              <span class="text-danger"><?php echo form_error('nama_petugas'); ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="aktif" class="control-label"><span class="text-danger">*</span>Ustate</label>
              <select class="form-control" name="aktif"  id="aktif">
                <option value="0">Tidak Aktif</option>
                <option value="1">Aktif</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <label for="deskripsi" class="control-label">Deskripsi</label>
            <div class="form-group">
              <input type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="form-control" id="deskripsi" />
              <span class="text-danger"><?php echo form_error('deskripsi'); ?></span>
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
