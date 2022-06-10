<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Pagu Anggaran</title>
    <?php $this->load->view('dashboard/_part/head'); ?>

</head>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <?php
        if ($this->session->userdata('jabatan') == 'subbidang') {
            $this->load->view('dashboard/sidebarnav/_headsubbidang');
        } else if ($this->session->userdata('jabatan') == 'dm') {
            $this->load->view('dashboard/sidebarnav/_headdm');
        } else if ($this->session->userdata('jabatan') == 'dmpau') {
            $this->load->view('dashboard/sidebarnav/_headdmpau');
        }

        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pagu Anggaran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Pagu Anggaran</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="col-md-2">
                                    <a href="<?php echo site_url('C_paguanggaran/add'); ?>" class="btn btn-block btn-info"><i class="fa fa-fw fa-plus"></i> Tambah Pagu Anggaran</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example2" class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Anggota</th>
                                                        <th>Nominal Pagu</th>
                                                        <th>Nominal Terpakai</th>
                                                        <th>Bulan</th>
                                                        <th>Tahun</th>
                                                        <th colspan="2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-striped">

                                                    <?php
                                                    $id = 0;
                                                    foreach ($pagu_anggaran as $id_anggota) :
                                                        $id++;

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $id; ?></td>
                                                            <td><?php echo $id_anggota['id_anggota'] ?></td>
                                                            <td><?php echo $id_anggota['nominal_pagu'] ?></td>
                                                            <td><?php echo $id_anggota['nominal_terpakai'] ?></td>
                                                            <td><?php echo $id_anggota['bulan'] ?></td>
                                                            <td><?php echo $id_anggota['tahun'] ?></td>
                                                            <td>

                                                                <a href="<?php echo site_url('C_paguanggaran/edit/') . $id_anggota['id_paguanggaran']; ?>" class="btn btn-block btn-primary">Edit</a>
                                                                <a href="<?php echo site_url('C_paguanggaran/delete/') . $id_anggota['id_paguanggaran']; ?>" class="btn btn-block btn-danger">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>



                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        
        <?php $this->load->view('dashboard/_part/footer'); ?>
    </div>
    <!-- /.row (main row) -->
    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>