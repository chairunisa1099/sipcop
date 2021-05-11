<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Pasien Covid19</span>

        <!-- <span class="logo-mini"><img height="50" width="50" src="<?php  echo base_url( FOLDERPATH_DEFAULT. "/" . $this->session->userdata('session_copid_logoperusahaan')); ?>" /> </span> -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Pasien Covid19</span>
        <!-- <span class="logo-lg"><img height="20" width="20" src="<?php  echo base_url( FOLDERPATH_DEFAULT. "/" . $this->session->userdata('session_copid_logoperusahaan')); ?>" /><?php echo "   ".$this->session->userdata('session_copid_namaperusahaan');?></span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo site_url('resources/img/user.png');?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME);?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo site_url('resources/img/user.png');?>" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_USERNAME);?>
                                <br>
                                <small><?php echo $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_NAMA);?></small>
                                <br>
                                <small><?php echo $this->session->userdata(SESSIONDATA_LOGIN_ADMIN_DESKRIPSI);?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?php echo site_url('authen_super/logout') ?>" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
