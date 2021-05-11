<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Status Pasien</h3>
        <div class="box-tools">
          <a href="<?php echo site_url('status_pasien/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <tr>
            <th>Nama Status</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($status_pasien as $s){ ?>
            <tr>
              <td><?php echo $s['nama_status']; ?></td>
              <td><?php echo $s['keterangan_status']; ?></td>
              <td>
                <a href="<?php echo site_url('status_pasien/edit/'.$s['id_status']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                <a href="<?php echo site_url('status_pasien/remove/'.$s['id_status']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')"><span class="fa fa-trash"></span> Delete</a>
              </td>
            </tr>
          <?php } ?>
        </table>

      </div>
    </div>
  </div>
</div>
