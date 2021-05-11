<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Ubah Status Pasien</h3>
      </div>
      <?php echo form_open('status_pasien/edit/'.$status_pasien['id_status']); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <label for="nama_status" class="control-label"><span class="text-danger">*</span>Nama Status</label>
            <div class="form-group">
              <input type="text" name="nama_status" value="<?php echo ($this->input->post('nama_status') ? $this->input->post('nama_status') : $status_pasien['nama_status']); ?>" class="form-control" id="nama_status" />
              <span class="text-danger"><?php echo form_error('nama_status');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="keterangan_status" class="control-label">Keterangan</label>
            <div class="form-group">
              <input type="text" name="keterangan_status" value="<?php echo ($this->input->post('keterangan_status') ? $this->input->post('keterangan_status') : $status_pasien['keterangan_status']); ?>" class="form-control" id="keterangan_status" />
              <span class="text-danger"><?php echo form_error('keterangan_status');?></span>
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
