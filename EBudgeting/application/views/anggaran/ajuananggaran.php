<!DOCTYPE html>
<html lang="en">

<head>
  <title>E-Budgeting | Ajuan Anggaran</title>
  <?php $this->load->view("dashboard/_part/head"); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">

  <!-- Google Font -->

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
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
              <h1>Data Ajuan Anggaran</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Ajuan Anggaran</li>
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

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <a href="<?php echo site_url('SearchController2/'); ?>" class="btn btn-block btn-info"></i> Filter Minggu</a>

                  </div>
                  <div class="col-md-6">
                    <a href="<?php echo site_url('SearchController/'); ?>" class="btn btn-block btn-info"></i> Filter Bulan</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">

                <div class="col-md-2">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    + Tambah Ajuan
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                  <div class="row">
                    <div class="col-sm-12">

                      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>ID Pengajuan</th>
                            <th>Minggu Ke</th>
                            <th>Bulan</th>
                            <th>Pengajuan</th>
                            <th>Tanggal Mulai </th>
                            <th>Tanggal Sampai </th>
                            <th>Total </th>
                            <th>Status </th>
                            <th colspan="2">Aksi</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($pengajuan_anggaran as $pengajuan_anggaran) : ?>

                            <tr>
                              <td>
                                <?php echo $pengajuan_anggaran->id_pengajuan ?>
                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->minggu2 ?>
                              </td>
                              <td>
                                <?php echo $pengajuan_anggaran->bulan2 ?>
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
                                <?php echo  $pengajuan_anggaran->total_pengajuan2 != null ?  'Rp. ' . number_format($pengajuan_anggaran->total_pengajuan2, 2, ',', '.') : ''; ?>
                              </td>
                              <td>
                                <?php
                                $array = array_intersect(array($pengajuan_anggaran->status2), array_flip($status));


                                if (!empty($array)) {

                                  echo $status[$array[0]];
                                }
                                ?>
                              </td>



                              <td class="small">
                              <td width="250">

                                <a href="<?php echo site_url('C_ajuananggaran/update_datapengajuan/') . $pengajuan_anggaran->id_pengajuan; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </a>
                                <?php
                                if ($pengajuan_anggaran->status2 < 2) {
                                ?>

                                  <a class="btn btn-danger" id="hapus"><i class="fas fa-trash"></i></a>

                                <?php
                                }

                                ?>

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
















    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Create by</b> Mahasiswa UNS 2020.
      </div>
      <strong>Copyright &copy; 2022 <a href="https://adminlte.io">PLN ASTER</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Ajuan Anggaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="form-horizontal" id="aju" action="<?php echo site_url('C_ajuananggaran/add_datapengajuan'); ?>" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="minggu2" class="col-sm-3  control-label">Minggu</label>

                  <div class="col-sm-9">

                    <select name="minggu2" id="minggu2" class="form-control" required>
                      <option value="" selected disabled>=== Pilih Minggu ==</option>
                      <?php foreach ($minggu as $mingguu) : ?>
                        <option <?= set_select('minggu2', $mingguu); ?> value="<?= $mingguu ?>">Minggu ke -<?= $mingguu; ?></option>
                      <?php endforeach; ?>

                    </select>


                  </div>
                </div>

                <div class=" form-group">
                  <label for="tanggal_mulai2" class="col-sm-3  control-label">Tanggal Mulai</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tanggal_mulai2" id="tanggal_mulai2" placeholder="tanggal mulai" required>

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bulan2" class="col-sm-3 control-label">Bulan</label>
                  <div class="col-sm-9">
                    <select name="bulan2" id="bulan2" class="form-control" required>
                      <option value="" selected disabled>=== Pilih Bulan ==</option>
                      <?php foreach ($bulan as $bulann) : ?>

                        <option <?= set_select('bulan2', $bulann); ?> value="<?= $bulann ?>"><?= $bulann; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal_sampai2" class="col-sm-3  control-label">Tanggal Sampai</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tanggal_sampai2" id="tanggal_sampai2" placeholder="tanggal sampai" required>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>




  <?php $this->load->view('dashboard/_part/js'); ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function() {
      $('#hapus').on('click', function() {

        Swal.fire({
          title: 'Apakah anda yakin untuk menghapusnya?',

          icon: 'question',
          confirmButtonText: 'OK!',
          showCancelButton: true

        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location = "<?php echo site_url('C_ajuananggaran/delete_datapengajuan/') . $pengajuan_anggaran->id_pengajuan; ?>";
        }
      });

      })

    });
  </script>
</body>

</html>