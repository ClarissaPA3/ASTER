<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Budgeting | Koreksi Anggaran</title>
  <?php $this->load->view('dashboard/_part/head'); ?>
  <?php $this->load->view('dashboard/_part/headdatatables'); ?>

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
              <h1>Koreksi Anggaran</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Koreksi Anggaran</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('pesan'); ?>
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

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-hover" id="example" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>ID Pengajuan</th>
                            <th>Bulan</th>
                            <th>Pengajuan</th>
                            <th>Tanggal Mulai </th>
                            <th>Tanggal Sampai </th>
                            <th>Total </th>

                            <th>Status </th>
                            <th>Aksi</th>

                          </tr>
                        </thead>
                        <tbody>

                          <?php foreach ($pengajuan_anggaran as $pengajuan_anggaran) : ?>

                            <tr>
                              <td width="150">
                                <?php echo $pengajuan_anggaran->id_pengajuan ?>
                              </td>
                              <td>
                                <?php echo $bulan[$pengajuan_anggaran->bulan2]; ?>

                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->tgl_pengajuan2 ?>
                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->tanggal_mulai2 ?>
                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->tanggal_sampai2 ?>
                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->total_pengajuan2 ?>
                              </td>
                              <td>

                                <?php
                                if ($pengajuan_anggaran->status2 == 5) {
                                ?>
                                  <span class="btn btn-danger"><i class="fa fa-fw fa-warning"></i> Permohonan Koreksi oleh DM</span>
                                <?php
                                } else if ($pengajuan_anggaran->status2 == 6) {
                                ?>
                                  <p class="btn btn-danger"><i class="fa fa-fw fa-warning"></i> Permohonoan Koreksi oleh DMPAU</p>
                                <?php
                                }
                                ?>
                              </td>
                              <td width="250">
                                <a href="<?php echo site_url('C_koreksi_anggaran/update_koreksi/') . $pengajuan_anggaran->id_pengajuan . '/' . $pengajuan_anggaran->status2; ?>" class="btn btn-block btn-primary col-md-8"><i class="fas fa-edit"></i> Detail anggaran</a>
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
    <!-- /.row (main row) -->


    <!-- /.content -->
  </div>





  <?php $this->load->view('dashboard/_part/js'); ?>
  <?php $this->load->view('dashboard/_part/jsdatatables'); ?>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        columnDefs: [{
            targets: [0],
            orderData: [0, 1],
          },
          {
            targets: [1],
            orderData: [1, 0],
          },
          {
            targets: [4],
            orderData: [4, 0],
          },
        ],
      });
    });
  </script>
</body>

</html>