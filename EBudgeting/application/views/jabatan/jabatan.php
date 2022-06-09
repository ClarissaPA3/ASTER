<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Jabatan</title>
    <?php $this->load->view('dashboard/_part/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        if ($this->session->userdata('id_jabatan') == 1) {
            $this->load->view('dashboard/sidebarnav/_headsubbidang');
        } else if ($this->session->userdata('id_jabatan') == 2) {
            $this->load->view('dashboard/sidebarnav/_headdm');
        } else if ($this->session->userdata('id_jabatan') == 3) {
            $this->load->view('dashboard/sidebarnav/_headdmpau');
        }

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Data Jabatan</h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="<?php echo site_url('C_input_jabatan/add_jabatan'); ?>" class="btn btn-block btn-info"><i class="fa fa-fw fa-plus"></i> Tambah Jabatan</a>

                        <div class="box">
                            <div class="box-header">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tingkatan Jabatan</th>
                                            <th>Hak Akses</th>
                                            <th>Tingkatan User</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $id = 0;
                                        foreach ($jabatan as $nama) :
                                            $id++;


                                        ?>
                                            <tr>

                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $nama['nama_jabatan'] ?></td>
                                                <td><a href="<?php echo site_url('C_input_jabatan/hakakses/') . $nama['id_jabatan']; ?>" class="btn btn-primary">Hak Akses</a></td>
                                                <td><?php echo $nama['tingkatan_user'] ?></td>
                                                <td><a href="<?php echo site_url('C_input_jabatan/update_jabatan/') . $nama['id_jabatan']; ?>" class="btn btn-block btn-primary">Edit</a></td>
                                                <td> <a href="<?php echo site_url('C_input_jabatan/delete_jabatan/') . $nama['id_jabatan']; ?>" class="btn btn-block btn-danger">Hapus</a></td>

                                            </tr>
                                        <?php endforeach; ?>



                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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
    <?php $this->load->view('dashboard/_part/js'); ?>

</body>

</html>