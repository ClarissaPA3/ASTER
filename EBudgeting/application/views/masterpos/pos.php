<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Master Pos</title>
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
        <div class="content-wrapper" style="min-height: 1113.69px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Master Pos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Master Pos</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> <a href="<?php echo site_url('C_masterpos_subpos/add_pos'); ?>" class="btn btn-block btn-info"><i class="fa fa-fw fa-plus"></i> Tambah Pos</a></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">

                                            </div>
                                            <div class="col-sm-12 col-md-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pos</th>
                                                            <th colspan="2">Aksi</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $id = 0;
                                                        foreach ($pos as $nama) :
                                                            $id++;


                                                        ?>
                                                            <tr>

                                                                <td><?php echo $id; ?></td>
                                                                <td><?php echo $nama['nama_pos'] ?></td>
                                                                <td><a href="<?php echo site_url('C_masterpos_subpos/update_pos/') . $nama['id_pos']; ?>" class="btn btn-block btn-primary">Edit</a></td>
                                                                <td> <a id="hapus" href="<?php echo site_url('C_masterpos_subpos/delete_pos/') . $nama['id_pos']; ?>" class="btn btn-block btn-danger">Hapus</a></td>

                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

    </div>


    <?php $this->load->view('dashboard/_part/js'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- SweetAlert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '#hapus', function(event) {
            event.preventDefault();
            
            const href = $(this).attr('href');
        
            Swal.fire({
                title: 'Apakah anda yakin untuk menghapusnya?',

                icon: 'question',
                confirmButtonText: 'OK!',
                showCancelButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });

        })
    </script>
   
</body>

</html>