<?php
require_once "koneksi.php";
ob_start();
session_start();

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$_SESSION["admin"] = null;

if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) {
  header("location:index.php");
} else {

?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BANK ARTHA SUKAMARA</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body class="login-page">
    <div class="login-box">
      <div class="logo">
        <a href="javascript:void(0);"></a>
      </div>
      <div class="card">
        <div class="body">
          <form id="sign_in" method="POST">
            <div class="msg">
              <h3><big>BANK ARTHA SUKAMARA </big></h4>
            </div>
            <img src="images/BPR.PNG" width="300px" height="200px" alt="User" />
            <br><br><br>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">account_circle</i>
              </span>
              <div class="form-line">
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
              </div>
            </div>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">lock</i>
              </span>
              <div class="form-line">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="row">

              <div class="col-xs-4">
                <input type="submit" name="login" class="btn btn-block bg-pink waves-effect" Value="Login">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
  </body>

  </html>
  <?php

  if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $koneksi->query("select * from user where nama_user='$username' and password='$password'");

    $ketemu = $sql->num_rows;

    $data = $sql->fetch_assoc();

    if ($ketemu >= 1) {

      session_start();

      if ($data['level'] == "Admin") {


        $_SESSION['Admin'] = $data['nama_user'];

        header("location:index.php");
      } else if ($data['level'] == "Pimpinan") {

        $_SESSION['Pimpinan'] = $data['nama_user'];

        header("location:indexguru.php");
      } else {
  ?>

        <script type="text/javascript">
          alert("Login Gagal Username atau Password yang Anda Masukan Salah")
        </script>

  <?php
      }
    }
  }

  ?>

<?php
}
?>