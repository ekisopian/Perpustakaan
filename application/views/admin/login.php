<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assetsadmin/assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assetsadmin/css/sb-admin.css')?>" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" >
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" type="submit" name="input" value="simpan" id="simpan">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assetsadmin/assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assetsadmin/assets/jquery-easing/jquery.easing.min.js') ?>"></script>

</body>

</html>

<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
echo "<script>window.alert('Username belum diisi')
window.location='indexadmin.php'</script>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=indexadmin.php'>";
}else{
session_start();
$login = mysql_query("select * from admin where username='$username' and password='$password'");
if (mysql_num_rows($login) > 0){
$_SESSION['username'] = $username;
header("location:berandaadmin.php");
}else{
echo "<script>window.alert('Username atau Password salah')
window.location='admin.html'</script>";
}
}
?>