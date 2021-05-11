<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Ruang Rawat</h3>
      </div>
      <?php echo form_open('ruang_rawat/add'); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <label for="zona_ruang" class="control-label"><span class="text-danger">*</span>Zona Ruang</label>
            <div class="form-group">
              <input type="text" name="zona_ruang" value="<?php echo $this->input->post('zona_ruang'); ?>" class="form-control" id="zona_ruang" />
              <span class="text-danger"><?php echo form_error('zona_ruang');?></span>
            </div>
          </div>
          <div class="col-md-12">
            <label for="keterangan_ruang" class="control-label">Keterangan</label>
            <div class="form-group">
              <input type="text" name="keterangan_ruang" value="<?php echo $this->input->post('keterangan_ruang'); ?>" class="form-control" id="keterangan_ruang" />
              <span class="text-danger"><?php echo form_error('keterangan_ruang');?></span>
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
