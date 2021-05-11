<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pasien</h3>
        <div class="box-tools">
          <a data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm">Daftar Status</a>
          <a href="<?php echo site_url('pasien/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
        </div>
      </div>
      <div class="box-body">
        <table id="custom_datatable" class="display table-hover dt-responsive nowrap" width="100%">
          <thead>
            <tr>
              <th>Status</th>
              <th>Biodata Pasien</th>
              <th>Penempatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
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
var table;
$(document).ready(function() {
  table = $('#custom_datatable').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],

    "ajax": {
      "url": "<?php echo site_url('pasien/get_data_pasien_json')?>",
      "type": "POST"

    },
    "columnDefs": [
      {
        "targets": [ 0 ],
        "orderable": false,
      },
    ],

  });
});

</script>

<!-- <table class="table table-striped">
<tr>
<th>Status</th>
<th>Biodata Pasien</th>
<th>Penempatan</th>
<th>Aksi</th>
</tr>
<?php $iterate=0; ?>
<?php foreach($pasien as $p){ ?>
<tr>
<td>
<?php echo $status_pasien[$iterate]; ?><br>
<a href="<?php echo site_url('pasien/editstatus/'.$p['nik']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-heartbeat"></span> Ubah Status</a><br>
</td>
<td>
<small>No Ktp</small><br>
<?php echo $p['nik']; ?><br>
<small>Nama</small><br>
<?php echo $p['nama_lgkp']; ?><br>
<a href="<?php echo site_url('pasien/detail/'.$p['nik']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-list-ul"></span> Detail</a><br>
</td>
<td>
<?php echo $p['zona_ruang']; ?> <br>
</td>
<td>
<a href="<?php echo site_url('pasien/edit/'.$p['nik']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Ubah</a><br>
<a href="<?php echo site_url('pasien/remove/'.$p['nik']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
</td>
</tr>
<?php $iterate++; ?>
<?php } ?>
</table> -->







<!-- <?php foreach($pasien as $p){ ?>
<tr>
<td>
<li>
<small>NIK</small><br>
<?php echo $p['nik']; ?>
</li>
<li>
<small>Nama</small><br>
<?php echo $p['nama_lgkp']; ?>
</li>
<li>
<small>Jenis kelamin</small><br>
<?php echo $p['jenis_klmin']; ?>
</li>
<li>
<small>Tempat Lahir</small><br>
<?php echo $p['tmpt_lhr']; ?>
</li>
<li>
<small>Tanggal Lahir</small><br>
<?php echo $p['tgl_lhr']; ?>
</li>
<li>
<small>Goldar</small><br>
<?php echo $p['gol_darah']; ?>
</li>
<li>
<small>Agama</small><br>
<?php echo $p['agama']; ?>
</li>
<li>
<small>No Akta Lahir</small><br>
<?php echo $p['no_akta_lhr']; ?>
</li>
<li>
<small>Status</small><br>
<?php echo $p['status_kawin']; ?>
</li>
<li>
<small>No Akta Kawin</small><br>
<?php echo $p['no_akta_kwn']; ?>
</li>
<li>
<small>Tanggal Kawin</small><br>
<?php echo $p['tgl_kwn']; ?>
</li>
<li>
<small>Pendidikan</small><br>
<?php echo $p['pendidikan']; ?>
</li>
<li>
<small>Pekerjaan</small><br>
<?php echo $p['pekerjaan']; ?>
</li>
</td>
<td>
<ul>
<li>
<small>NO KK</small><br>
<?php echo $p['no_kk']; ?> <br>
</li>
<li>
<small>Hubungan Keluarga</small><br>
<?php echo $p['hub_kel']; ?> <br>
</li>
<li>
<small>Nama Ayah</small><br>
<?php echo $p['nama_lgkp_ayah']; ?> <br>
</li>
<li>
<small>Nama Ibu</small><br>
<?php echo $p['nama_lgkp_ibu']; ?> <br>
</li>
</ul>
</td>
<td>
<ul>
<li>
<small>Alamat</small><br>
<?php echo $p['alamat']; ?> <br>
</li>
<li>
<small>RT</small><br>
<?php echo $p['no_rt']; ?> <br>
</li>
<li>
<small>RW</small><br>
<?php echo $p['no_rw']; ?> <br>
</li>
<li>
<small>Kelurahan</small><br>
<?php echo $p['nama_kel']; ?> <br>
</li>
<li>
<small>Kecamatan</small><br>
<?php echo $p['nama_kec']; ?> <br>
</li>
<li>
<small>Kabupaten</small><br>
<?php echo $p['nama_kabupaten']; ?> <br>
</li>
</ul>
</td>
<td>
<?php echo $p['id_ruang']; ?> <br>
<?php echo $p['id_petugas']; ?>
</td>
<td>
<a href="<?php echo site_url('pasien/editstatus/'.$p['nik']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-heartbeat"></span> Ubah Status</a><br>
<a href="<?php echo site_url('pasien/edit/'.$p['nik']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Ubah</a><br>
<a href="<?php echo site_url('pasien/remove/'.$p['nik']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
</td>



</tr>
<?php } ?> -->
