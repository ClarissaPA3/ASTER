<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Persetujuan DM</title>
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
                            <h1>Persetujuan DM</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Persetujuan DM</li>
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
                                    <select name="bln">
                                        <option selected="selected">Bulan</option>
                                        <?php
                                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                        $jlh_bln = count($bulan);
                                        for ($c = 0; $c < $jlh_bln; $c += 1) {
                                            echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                        }
                                        ?>
                                    </select>
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
                                                        <th>ID Pengajuan</th>
                                                        <th>Bulan</th>
                                                        <th>Minggu Ke</th>
                                                        <th>Tanggal Mulai</th>
                                                        <th>Tanggal Sampai</th>
                                                        <th>Item</th>
                                                        <th>Status</th>
                                                        <th>Catatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-striped">
                                                    <?php
                                                    for ($i = 0; $i < count($pengajuan); $i++) :
                                                    ?>


                                                        <tr>
                                                            <td><?php echo $pengajuan[$i]['id_pengajuan']; ?></td>
                                                            <td><?php echo $pengajuan[$i]['bulan2']; ?></td>
                                                            <td><?php echo $pengajuan[$i]['minggu2']; ?></td>
                                                            <td><?php echo $pengajuan[$i]['tanggal_mulai2']; ?></td>
                                                            <td><?php echo $pengajuan[$i]['tanggal_sampai2']; ?></td>

                                                            <td><?= $item[$i]; ?></td>
                                                            <td>
                                                                <?php
                                                                $array = array_intersect(array($pengajuan[$i]['status2']), array_flip($status));


                                                                if (!empty($array)) {

                                                                    echo $status[$array[0]];
                                                                }
                                                                ?>
                                                            </td>

                                                            <td><?= $pengajuan[$i]['catatan_dm2']; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('C_persetujuan_dm/reviewdm/') . $pengajuan[$i]['id_pengajuan']; ?>" class="btn btn-primary">Review</a>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    endfor; ?>
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



        <!-- /.content -->
    </div>






    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>