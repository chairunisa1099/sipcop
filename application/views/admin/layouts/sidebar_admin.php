<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar petugas panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Petugas Input</li>
            <li class="<?php if($this->uri->segment(1,0)=='petugas'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('petugas') ?>"><i class="fa fa-user-o"></i><span>Petugas</span></a>
            </li>
            <li class="header">Data Pendukung</li>
            <li class="<?php if($this->uri->segment(1,0)=='ruang_rawat'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('ruang_rawat/index') ?>"><i class="fa fa-hospital-o"></i><span>Ruang Rawat</span></a>
            </li>
            <li class="<?php if($this->uri->segment(1,0)=='status_pasien'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('status_pasien/index') ?>"><i class="fa fa-heartbeat"></i><span>Status Pasien</span></a>
            </li>
        </ul>
    </section>
                <!-- /.sidebar -->
</aside>
