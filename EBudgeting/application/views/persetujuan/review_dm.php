<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Review DM</title>
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
                <h1>Review DM</h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="<?php echo site_url('C_ajuananggaran/update_datapengajuan/') . $id; ?>" class="btn btn-info active">Input</a>
                                <a href="<?php echo site_url('C_ajuananggaran/show_rekapanggaran/') . $id; ?>" class="btn btn-info">Rekap</a>


                                <div class="box-body">
                                    <form class="form-horizontal" id="ajuananggaran" action="<?php echo site_url('C_persetujuan_dm/reviewdm'); ?>" method="post">

                                        <input type="hidden" name="id_pengajuan" value="<?php echo $ajuan['id_pengajuan']; ?>">
                                        <input type="hidden" name="id_anggota" value="<?php echo $ajuan['id_anggota']; ?>">
                                        <input type="hidden" name="status2" value="<?php echo $ajuan['status2']; ?>" id="status">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="minggu2" class="col-sm-2 control-label">Minggu</label>

                                                    <div class="col-sm-10">

                                                        <select name="minggu2" id="minggu2" class="form-control" disabled>
                                                            <option value="" selected disabled>=== Pilih Minggu ==</option>
                                                            <?php foreach ($minggu as $mingguu) : ?>


                                                                <option <?= set_select('minggu2', $mingguu); ?> <?php if ($mingguu == $ajuan['minggu2']) echo "selected"; ?> value="<?= $mingguu ?>">Minggu ke -<?= $mingguu; ?></option>
                                                            <?php endforeach; ?>

                                                        </select>



                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tanggal_mulai2" class="col-sm-2 control-label">Tanggal Mulai</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" readonly class="form-control" name="tanggal_mulai2" id="tanggal_mulai2" placeholder="tanggal mulai" value="<?php echo date('Y-m-d', strtotime($ajuan['tanggal_mulai2'])); ?>">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="bulan2" class="col-sm-2 control-label">Bulan</label>
                                                    <div class="col-sm-10">
                                                
                                                        <select name="bulan2" id="bulan2" class="form-control" disabled>
                                                            <option value="" selected disabled>=== Pilih Bulan ==</option>
                                                            <?php foreach ($bulan as $bulann) : ?>

                                                                <option <?= set_select('bulan2', $bulann); ?> <?php if ($bulann == $ajuan['bulan2']) echo "selected"; ?> value="<?= $bulann ?>"><?= $bulann; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>



                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tanggal_sampai2" class="col-sm-2 control-label">Tanggal Sampai</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="tanggal_sampai2" id="tanggal_sampai2" placeholder="tanggal sampai" value="<?php echo date('Y-m-d', strtotime($ajuan['tanggal_sampai2'])); ?>" readonly>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>

                                        <!-- mulai ini -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered text-center">
                                                    <tr>
                                                        <th> POS</th>
                                                        <th>SUB POS</th>
                                                        <th>SUB POS</th>
                                                        <th>Kegiatan</th>
                                                        <th>nominal</th>
                                                        <th>Deskripsi</th>
                                                        <th colspan="2">Disetujui</th>
                                                    </tr>

                                                    <?php foreach ($detailajuan as $key) : ?>

                                                        <tr>

                                                            <input type="hidden" name="id_pengajuan" id="id_pengajuan" value="<?php echo $ajuan['id_pengajuan']; ?>">
                                                            <input type="hidden" name="id_detailpengajuan[]" id="id_detailpengajuan[]" value="<?= $key['id_detailpengajuan']; ?>">


                                                            <td>
                                                                <select name="id_pos[]" disabled id="id_pos" class="form-control">
                                                                    <option value="" selected disabled>Pos</option>
                                                                    <?php foreach ($pos as $poss) : ?>
                                                                        <option <?= set_select('id_pos', $poss['id_pos']) ?> <?php if ($poss['id_pos'] == $key['id_pos']) echo "Selected"; ?> value="<?= $poss['id_pos'] ?>"><?= $poss['nama_pos'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                            </td>
                                                            <td>
                                                                <select name="id_subpos[]" disabled id="id_subpos" class="form-control">
                                                                    <option value="" selected disabled>Sub pos</option>
                                                                    <?php foreach ($subpos as $poss) : ?>
                                                                        <option <?= set_select('id_subpos', $poss['id_subpos']) ?> <?php if ($poss['id_subpos'] == $key['id_subpos']) echo "Selected"; ?> value="<?= $poss['id_subpos'] ?>"><?= $poss['nama_subpos'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="id_subpos2[]" disabled id="id_subpos2" class="form-control">
                                                                    <option value="" selected disabled>Sub Pos</option>
                                                                    <?php foreach ($subpos2 as $poss) : ?>
                                                                        <option <?= set_select('id_subpos2', $poss['id_subpos2']) ?> <?php if ($poss['id_subpos2'] == $key['id_subpos2']) echo "Selected"; ?> value="<?= $poss['id_subpos2'] ?>"><?= $poss['nama_subpos2'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="kegiatan[]" id="kegiatan" placeholder="kegiatan" class="form-control" value="<?= $key['kegiatan2']; ?>" readonly>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="nominal[]" id="nominal" placeholder="nominal" class="form-control" value="<?= $key['nominal_pengajuan2']; ?>" readonly>
                                                            </td>
                                                            <td> <input readonly type="text" name="deskripsi[]" id="deskripsi" placeholder="deskripsi" class="form-control" value="<?= $key['deskripsi2']; ?>"></td>
                                                            <td> <input type="number" name="nominal_persetujuan2[]" id="nominal_persetujuan2" placeholder="nominal persetujuan" class="form-control" value="<?= $key['nominal_persetujuan2']; ?>"></td>



                                                        </tr>
                                                    <?php endforeach; ?>



                                                </table>

                                            </div>
                                            <div class="col-md-12" id="review-dm">
                                                <?php
                                                if ($ajuan['catatan_dm2']) {
                                                ?>

                                                    <label for="catatan_dm2">Catatan DM</label>
                                                    <textarea name="catatan_dm2" id="catatan_dm2" class="form-control" cols="30" rows="10"><?php echo $ajuan['catatan_dm2']; ?></textarea>
                                                <?php
                                                    # code...
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer bg-gray" id="box-footer">
                                    <div class="pull-right">
                                        <?php
                                        if ($ajuan['catatan_dm2']) {
                                        ?>
                                            <button class="btn btn-warning" id="tmbhkoreksi">Ajukan koreksi</button>

                                            <button onclick="Kirim()" class="btn btn-primary">Setujui</button>

                                        <?php
                                        } else {
                                        ?>
                                            <button class="btn btn-default" id="revisi">Ajukan Revisi</button>
                                            <button onclick="Kirim()" class="btn btn-primary">Setujui</button>



                                        <?php
                                        }
                                        ?>








                                    </div>




                                </div>
                                <!-- /.box-footer -->

                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                        </div>
                        <!-- /.box -->

                    </div>


                </div>
                <!-- /.row -->
            </section>

            <!-- right col -->
        </div>
        <?php $this->load->view('dashboard/sidebarnav/_footpage.php'); ?>
        <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->








    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $(document).on('click', '#revisi', function() {


                $('#review-dm').append('<div id="review">\
            </div>').append('<label for="catatan_dm2">Catatan DM</label>\
            <textarea name="catatan_dm2" id="catatan_dm2" class="form-control" cols="30" rows="10"></textarea>');
                $('#box-footer').empty().append('<div class="pull-right">\
            <button class="btn btn-default" id="kembali">Kembali</button>\
            <button class="btn btn-warning" id="tmbhkoreksi">Ajukan koreksi</button>\
            </div>');
            });

            $(document).on('click', '#kembali', function() {
                $('#review-dm').empty();
                $('#box-footer').empty().append('<div class="pull-right">\
                                        <button class="btn btn-default" id="revisi">Ajukan Revisi</button>\
                                        <button onclick="Kirim()" class="btn btn-primary">Setujui</button>\
                                    </div>');



            });

            $(document).on('click', '#tmbhkoreksi', function() {
                $('#status').val('5');
                FormSubmit();


            });
        });

        function Kirim() {
            var input = document.getElementById('status');
            input.setAttribute('value', '2');
            FormSubmit();


        }

        function FormSubmit() {
            $(':disabled').each(function(e) {
                    $(this).removeAttr('disabled');
                });
            document.getElementById('ajuananggaran').submit();

        }
    </script>




    <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>