<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Pasien</li>
            <li class="<?php if($this->uri->segment(1,0)=='dashboard'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('dashboard/index') ?>"><i class="fa fa-pie-chart"></i><span>Dashboard</span></a>
            </li>
            <li class="<?php if($this->uri->segment(1,0)=='pasien'&& $this->uri->segment(2,0)=='index'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('pasien/index') ?>"><i class="fa fa-user-o"></i><span>Pasien</span></a>
            </li>
            <li class="<?php if($this->uri->segment(1,0)=='pasien' && $this->uri->segment(2,0)=='tracking'){echo 'active';}else{echo '';}?>">
                <a href="<?php echo site_url('pasien/tracking') ?>"><i class="fa fa-search"></i><span>Tracking Riwayat Pasien</span></a>
            </li>
          
        </ul>
    </section>
                <!-- /.sidebar -->
</aside>
