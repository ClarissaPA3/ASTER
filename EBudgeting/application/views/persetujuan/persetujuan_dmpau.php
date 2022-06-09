<!DOCTYPE html>
<html>

<head>

    <title>E-Budgeting | Persetujuan DMPAU</title>
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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Persetujuan DMPAU</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Persetujuan DMPAU</li>
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
                                                        <th rowspan="2">ID Pengajuan</th>
                                                        <th rowspan="2">Bulan</th>
                                                        <th rowspan="2">Minggu Ke</th>
                                                        <th rowspan="2">Tanggal Mulai</th>
                                                        <th rowspan="2">Tanggal Sampai</th>
                                                        <th rowspan="2">Item</th>
                                                        <th rowspan="2">Status</th>
                                                        <th rowspan="2">Catatan</th>
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

                                                            <td><?= $pengajuan[$i]['catatan_dmpau2']; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('C_persetujuan_dmpau/reviewdmpau/') . $pengajuan[$i]['id_pengajuan']; ?>" class="btn btn-primary">Review</a>
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

    </div>





<?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>