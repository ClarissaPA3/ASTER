<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Budgeting | Tambah Pegawai</title>
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
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
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
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Data Master</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url("C_input_jabatan/show_jabatan"); ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                            <li><a href="<?php echo site_url("C_user/show_user"); ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_pos"); ?>"><i class="fa fa-circle-o"></i> Pos</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos"); ?>"><i class="fa fa-circle-o"></i> Sub Pos</a></li>
                            <li><a href="<?php echo site_url("C_masterpos_subpos/show_subpos2"); ?>"><i class="fa fa-circle-o"></i> Sub Pos Barang </a></li>
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
                    <li class="treeview">
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
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Tambah Pegawai</h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                </div>
                                <form action="<?php echo site_url('C_user/add_user'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">




                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="" required>
                                                <?php echo form_error('nama_anggota'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal lahir</label>
                                            <div class="col-sm-5">
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" required>
                                                <?php echo form_error('tgl_lahir'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required>
                                                <?php echo form_error('alamat'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-5">
                                                <select name="id_jabatan" id="id_jabatan" class="form-control">
                                                    <option value="" selected disabled>Jabatan</option>
                                                    <?php foreach ($jabatan as $poss) : ?>

                                                        <option <?= set_select('id_jabatan', $poss['id_jabatan']) ?> value="<?= $poss['id_jabatan'] ?>"><?= $poss['nama_jabatan'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('id_jabatan'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                                                <?php echo form_error('username'); ?>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                                                <?php echo form_error('password'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" title="Kembali" class="btn btn-default">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- /.box -->

        </div>


    </div>
    <!-- /.row -->
    </section>

    <!-- /.box -->

    <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Create by</b> Mahasiswa UNS 2020.
        </div>
        <strong>Copyright &copy; 2022 <a href="https://adminlte.io">PLN ASTER</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
</body>

</html>