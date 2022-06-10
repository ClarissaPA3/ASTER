<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Budgeting | Tambah jabatan</title>
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
              <h1>Tambah Jabatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Jabatan</li>
                <li class="breadcrumb-item active">Tambah Jabatan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Jabatan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="<?php site_url('C_input_jabatan/add'); ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Jabatan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jabatan">
              </div>

              <div class="form-group">
                <label for="tingkat">Tingkatan</label>
                <select name="tingkat" id="tingkat" class="form-control">
                  <option selected disabled>========== Pilih Tingkatan user ========</option>
                  <?php
                  foreach ($tingkatjabatan as $key => $value) {
                    echo '<option value=' . $key . '>' . $value . '</option>';
                  }
                  ?>

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
    <?php $this->load->view('dashboard/_part/footer'); ?>









    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>




  <?php $this->load->view('dashboard/_part/js'); ?>
</body>

</html>