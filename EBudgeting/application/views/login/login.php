<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo "Login Page"; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('dashboard/_part/head'); ?>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .navbar-inverse {
      background-color: #333;
    }

    .navbar-color {
      color: #fff;
    }

    blink,
    .blink {
      animation: blinker 3s linear infinite;
    }

    @keyframes blinker {
      50% {
        opacity: 0;
      }
    }
  </style>
</head>


<body class="hold-transition login-page" style="overflow-y: hidden;background:url(
	'<?php echo base_url('assets/image/plnLogin.jpeg'); ?>')no-repeat;background-size: cover;width: 100%;">


  <div class="login-box">
    <br />
    <div class="login-logo">
      <a href="index.php" style="color: yellow;">E-Budgeting 2022<br /><b>PLN ASTER</b></a>
    </div>
    <div id="tampilalert"></div>
    <!-- /.login-logo -->

    <form action="<?= base_url('C_login/authentikasi_admin'); ?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="user" name="user" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo $this->session->flashdata('username'); ?>
      </div>


      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo $this->session->flashdata('password'); ?>
      </div>


      <div class="row">
        <div class="col-xs-8">
          <!-- /.col
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember" value="R1"> Remember Me
            </label>
          </div>-->
          <!-- /.social-auth-links -->
        </div>
        <div class="col-xs-4">
          <button type="submit" id="loding" class="btn btn-primary btn-block btn-flat">LOGIN</button>
          <div id="loadingcuy"></div>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
  <br />
  <footer>
    <div class="login-box-body text-center bg-blue">
      <a style="color: yellow;"> Copyright &copy; E-budgeting PLN ASTER - <?php echo date("Y"); ?>
    </div>
  </footer>
  </div>
  
</body>

</html>