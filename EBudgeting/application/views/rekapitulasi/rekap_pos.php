<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Budgeting | Rekap POS</title>
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
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Rekapitulasi Pos Anggaran
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <form id="formbulan" action="<?php base_url('C_ajuananggaran/show_rekapposanggaran') ?>" method="get">
                                <select name="bln" style="margin-bottom: 10px;margin-top: 10px;" id="bulan">
                                    <option selected="selected">Bulan</option>
                                    <?php
                                    $bulan = array("1" => 'Januari', "2" => 'Februari', "3" => 'Maret', "4" => 'April', "5" => 'Mei', "6" => 'Juni', "7" => 'Juli', "8" => 'Agustus', "9" => 'September', "10" => 'Oktober', "11" => 'November', "12" => 'Desember');
                                    $jlh_bln = count($bulan);
                                    for ($c = 1; $c <= $jlh_bln; $c += 1) {
                                    ?>
                                        <option value=<?= $c ?> <?php if ($this->input->get('bln') == $c) {
                                                                    echo "selected";
                                                                } ?>><?= $bulan[$c] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </form>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Pos</th>
                                                    <th>Uraian</th>
                                                    <th>Rencana Kebutuhan (Minggu I)</th>
                                                    <th>Rencana Kebutuhan (Minggu II)</th>
                                                    <th>Rencana Kebutuhan (Minggu III)</th>
                                                    <th>Rencana Kebutuhan (Minggu IV)</th>
                                                    <th>Rencana Kebutuhan (Total)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                for ($i = 0; $i < count($subpos); $i++) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $subpos[$i]['id_subpos']; ?></td>
                                                        <td><?= $subpos[$i]['nama_subpos']; ?></td>
                                                        <td>Rp. <?= number_format($hitungajuan[$i]['minggu1']['nominal'], 2, ',', '.'); ?></td>
                                                        <td>Rp. <?= number_format($hitungajuan[$i]['minggu2']['nominal'], 2, ',', '.'); ?></td>
                                                        <td>Rp. <?= number_format($hitungajuan[$i]['minggu3']['nominal'], 2, ',', '.'); ?></td>
                                                        <td>Rp. <?= number_format($hitungajuan[$i]['minggu4']['nominal'], 2, ',', '.'); ?></td>
                                                        <td>Rp. <?= number_format($hitungajuan[$i]['total'], 2, ',', '.'); ?></td>
                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="7">Total Ajuan Anggaran</td>
                                                    <td>Rp.<?php echo number_format($totalkeseluruhan, 2, ',', '.'); ?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->

                </section>
                <!-- /.content -->
            </div>

            
        </div>
        <?php $this->load->view('dashboard/_part/footer'); ?>
        <!-- ./wrapper -->
    </div>
    <?php $this->load->view('dashboard/_part/js'); ?>

       
        <!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>



        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                        extend: 'copy',
                        title: 'Rekapitulasi Pos Anggaran'

                    }, {
                        extend: 'csv',
                        title: 'Rekapitulasi Pos Anggaran'

                    }, {
                        extend: 'pdf',
                        title: 'Rekapitulasi Pos Anggaran'

                    }, {
                        extend: 'excel',
                        title: 'Rekapitulasi Pos Anggaran'

                    }, {
                        extend: 'print',
                        title: "Rekapitulasi Pos Anggaran",
                        customize: function(win) {
                            $(win.document.body).find('h1').css('text-align', 'center');
                            $(win.document.body).css('font-size', '16px');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }]
                });
            });
        </script>
</body>

</html>