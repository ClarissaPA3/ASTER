<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Budgeting | Tambah Jabatan</title>
    <?php $this->load->view('dashboard/_part/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>BDG</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>E-Budgeting</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('nama_anggota'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Account - DMPAU/ Admin
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="logout_admin" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Welcome DMPAU/ Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Data Master</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo site_url("C_rekap_jabatan"); ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                            <li><a href="<?php echo site_url("C_user/show_user"); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_pos"); ?>"><i class="fa fa-circle-o"></i> Pos</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos"); ?>"><i class="fa fa-circle-o"></i> Sub Pos</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos2"); ?>"><i class="fa fa-circle-o"></i> Sub Pos Barang </a></li>
                        </ul>
                    </li>
                    <li class=" active treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i> <span>Rekapitulasi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url("C_rekap_pos"); ?>"><i class="fa fa-circle-o"></i> Rekap Pos Anggaran</a></li>
                            <li><a href="<?php echo site_url("C_rekap_anggaran"); ?>"><i class="fa fa-circle-o"></i> Rekap Anggaran </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url("C_persetujuan_dmpau"); ?>">
                            <i class="fa fa-check"></i> <span>Persetujuan DMPAU</span>
                            <span class="pull-right-container">
                                <span class="pull-right-container">
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-th"></i> <span>Koreksi Anggaran</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("C_menutransfer"); ?>">
                            <i class="fa fa-edit"></i> <span>Transfer</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("C_paguanggaran"); ?>">
                            <i class="fa fa-laptop"></i> <span>Setting Pagu Anggaran</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
            </section>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Tambah Jabatan</h1>
            </section>

            <!-- Main content -->
            <form action="" method="post">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="" name="" placeholder="" required>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                    <a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>
