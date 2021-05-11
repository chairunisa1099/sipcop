<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tracking Riwayat Pasien</h3>
      </div>
      <?php echo form_open('pasien/tracking'); ?>
      <div class="box-body">
        <div class="row clearfix">
          <div class="col-md-12">
            <label for="nik" class="control-label"><span class="text-danger">*</span>No KTP</label>
            <div class="form-group">
              <div class="col-md-11">
                <input value="" type="number" name="nik" value="<?php echo $this->input->post('nik'); ?>" class="form-control" id="nik" />
                <span class="text-danger"><?php echo form_error('nik');?></span>
              </div>
              <div class="col-md-1">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-check"></i> Cari
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <?php if(isset($riwayat)) {?>
      <table class="table table-striped">
        <tr>
          <th>Tanggal</th>
          <th>Status</th>
          <th>No KTP</th>
          <th>Nama Lengkap</th>
          <th>Catatan</th>
        </tr>
        <?php foreach ($riwayat as $riway): ?>
          <tr>
              <td><?php echo $riway['tanggal']; ?></td>
              <td><?php echo $riway['nama_status']; ?></td>
              <td><?php echo $riway['ktp_pasien']; ?></td>
              <td><?php echo $riway['nama_lgkp']; ?></td>
              <td><?php echo $riway['catatan']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php }else{ ?>
      <p class="center text-center">Data Tidak Ditemukan</p>
    <?php } ?>
  </div>
</div>
