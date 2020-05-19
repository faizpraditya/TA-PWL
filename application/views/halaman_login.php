<!DOCTYPE html>
<html>
<head>
	<title>Sewa Motor Aja</title>
	<!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>asset/css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
	<div class="container">
    <div class="card card-login mx-auto mt-5">
      <form action="<?php echo base_url('login/do_login') ?>" method="post">
      <?php $this->session->flashdata('login') ?>
      <div class="card-header">Login Admin Sewa Motor</div>
      <div class="card-body">
        <form>
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="uname" class="form-control" placeholder="Username" required="required">
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
          </div>
          <input type="submit" name="simpan" value="LOGIN" class="btn btn-info">
        </form>
      </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>