<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Petugas</h3>
        <div class="box-tools">
          <a href="<?php echo site_url('petugas/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <tr>
            <th>Username</th>
            <th>Status</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($petugas as $u){ ?>
            <tr>
              <td><?php echo $u['username']; ?></td>
              <td><?php echo $u['aktif']=='1'?'Aktif':'Tidak Aktif'; ?></td>
              <td><?php echo $u['nama_petugas']; ?></td>
              <td><?php echo $u['deskripsi']; ?></td>
              <td>
                <a href="<?php echo site_url('petugas/edit/'.$u['id_petugas']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Ubah</a>
                <a href="<?php echo site_url('petugas/remove/'.$u['id_petugas']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </table>

      </div>
    </div>
  </div>
</div>
