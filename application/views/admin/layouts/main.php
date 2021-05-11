<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Halaman Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Jquery 3.3.1 -->
        <!-- <script src="<?php echo base_url();?>resources/js/jquery-3.3.1.js"></script> -->
        <script src="<?php echo base_url();?>resources/js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
        <!-- ADMIN LTE -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">

        <!-- DataTable 1.10.19-->
      	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/material.min.css">
      	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/jquery.dataTables.min.css">
      	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/responsive.dataTables.css">
      	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/buttons.dataTables.min.css">
      	<script src="<?php echo base_url();?>resources/js/jquery.dataTables.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/dataTables.responsive.js" type="text/javascript"></script>
      	<script src="<?php echo base_url();?>resources/js/dataTables.buttons.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/buttons.flash.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/jszip.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/pdfmake.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/vfs_fonts.js"></script>
      	<script src="<?php echo base_url();?>resources/js/buttons.html5.min.js"></script>
      	<script src="<?php echo base_url();?>resources/js/buttons.print.min.js"></script>

        <!-- Selectize-->
      	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/selectize.css" />
      	<script src="<?php echo base_url();?>resources/js/selectize.js"></script>

        <!-- CKEDITOR -->
        <script src="<?php echo base_url().'resources/ckeditor/ckeditor.js'?>"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php
                $this->load->view('admin/layouts/topbar');
                $this->load->view("admin/layouts/sidebar_admin");
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <!-- <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                      <?php for($i=1;$i<=$this->uri->total_segments();$i++){ ?>
                        <li class="breadcrumb-item"><a href="#"><?php echo $this->uri->segment($i); ?></a></li>
                      <?php } ?>
                      </ol>
                    </nav> -->
                    <?php
                    if($this->session->flashdata(FLASHDATA_PATH_ALLERTS))
                      $this->load->view($this->session->flashdata(FLASHDATA_PATH_ALLERTS));
                    ?>
                    <?php
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php $this->load->view('admin/layouts/footer'); ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->

                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>

    </body>
</html>

<script>
    CKEDITOR.replace( 'isi' );

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.selectize-beast').selectize({
            create: false,
            sortField: 'text'
        });
    });
</script>

 <script>
  $(function () {
    $('#datatable').DataTable({
      "language": {
            "lengthMenu": "Tampilkan _MENU_ Data per Halaman",
            "zeroRecords": "Data Tidak Ditemukan.",
            "info": "Halaman Ke- _PAGE_ Dari _PAGES_",
            "infoEmpty": "Halaman Ke- 0 Dari 0",
            "infoFiltered": "(terfilter dari _MAX_ data)",
            "loadingRecords": "Mohon Tunggu...",
            "processing": "Sedang Diproses...",
            "search": "Cari:",
            "bSort": true,
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
              }

          }
    })
  })
</script>
