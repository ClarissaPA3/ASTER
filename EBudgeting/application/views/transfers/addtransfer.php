<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Budgeting | Tambah Transfer</title>
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
      <div class="container-fluid">

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Rekap Transfer</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php site_url('C_masterpos_subpos/add') ?>" method="post">
                  <div class="box-body">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Pengirim</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_pengirim" placeholder="Nama Pengirim">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No Telp</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="no_telp" placeholder="No Telp">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No Rekening</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="no_rekening" placeholder="No Rekening">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Bank</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_bank" placeholder="Nama Bank">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tgl Kirim</label>
                          <div class="col-sm-5">
                            <input type="datetime-local" class="form-control" name="tgl_kirim" placeholder="Tgl Kirim">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Kategori</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">PPN</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="PPN" placeholder="PPN">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">PPH 21</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="PPH_21" placeholder="PPH 21">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">PPH 22</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="PPH_22" placeholder="PPH 22">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">PPH 23</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="PPH_23" placeholder="PPH 23">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Denda</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="denda" placeholder="Denda">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Administrasi Bank</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="administrasi_bank" placeholder="Administrasi Bank">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Total Dibayar</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="total_dibayar" placeholder="Total Dibayar">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Berita</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="berita" placeholder="Berita">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">


                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Asesmen</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_asesmen" placeholder="Honor Asesmen">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Evaluator</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_evaluator" placeholder="Honor Evaluator">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Tester</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_tester" placeholder="Honor Tester">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Feedback</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_feedback" placeholder="Honor Feedback">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Pewawancara</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_pewawancara" placeholder="Honor Pewawancara">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Honor Korektor Pauli</label>
                          <div class="col-sm-5">
                            <input type="number" class="form-control" name="honor_korektor_pauli" placeholder="Honor Korektor Pauli">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nilai Kontrak</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="nilai_kontrak" placeholder="Nilai Kontrak">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Pekerjaan</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Waktu Kerja</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="waktu_kerja" placeholder="Waktu Kerja">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Lumpsum Transport Bandara</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="lumpsum_transport_bandara" placeholder="Lumpsum Transport Bandara">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Lumpsum Konsumsi</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="lumpsum_komsumsi" placeholder="Lumpsum Komsumsi">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Lumpsum Transport Lok</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="lumpsum_transpoet_lok" placeholder="Lumpsum Transport Lok">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Lumpsum Uang Cod</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="lumpsum_uang_cod" placeholder="Lumpsum Uang Cod">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->



            </div>

            <!--/.col (left) -->

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