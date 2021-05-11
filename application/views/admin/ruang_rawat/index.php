<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Ruang Rawat</h3>
        <div class="box-tools">
          <a href="<?php echo site_url('ruang_rawat/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <tr>
            <th>Zona Ruang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($ruang_rawat as $r){ ?>
            <tr>
              <td><?php echo $r['zona_ruang']; ?></td>
              <td><?php echo $r['keterangan_ruang']; ?></td>
              <td>
                <a href="<?php echo site_url('ruang_rawat/edit/'.$r['id_ruang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Ubah</a>
                <a href="<?php echo site_url('ruang_rawat/remove/'.$r['id_ruang']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </table>

      </div>
    </div>
  </div>
</div>
