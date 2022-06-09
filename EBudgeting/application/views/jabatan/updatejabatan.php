<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Budgeting | Edit Jabatan</title>
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
              <h1>Tambah Jabatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Jabatan</li>
                <li class="breadcrumb-item active">Update jabatan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Data Jabatan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="<?php site_url('C_input_jabatan/update') ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="hakakses" value="<?php echo $jabatan['hakakses']; ?>">
                <input type="hidden" name="id_jabatan" value="<?php echo $jabatan['id_jabatan']; ?>">
                <label for="nama">Tingkatan Jabatan</label>

                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jabatan" value="<?php echo $jabatan['nama_jabatan']; ?>">


              </div>
              <div class="form-group">

                <label for="tingkat">Tingkatan User</label>
                <select name="tingkat" id="tingkat" class="form-control">
                  <option selected disabled>========== Pilih Tingkatan user ========</option>
                  <?php
                  foreach ($tingkatjabatan as $key => $value) : ?>

                    <option <?php if ($jabatan['tingkatan_user'] == $key) {
                              echo 'selected';
                            } ?> value='<?= $key; ?>'><?= $value; ?></option>
                  <?php endforeach; ?>


                </select>


              </div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </section>

      <!-- /.content-wrapper -->

    </div>

    <?php $this->load->view('dashboard/_part/footer');?>

    

  </div>
 
  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>