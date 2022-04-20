    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    session_start();

    $koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");
   

    if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) {

$view= isset($_GET['view']) ? $_GET['view'] : null;
switch($view){
  default :
    ?>
    <!DOCTYPE html>
    <html>

    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PT. Bakti Putra Meratus | Banjarmasin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />


    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
    <div class="loader">
    <div class="preloader">
    <div class="spinner-layer pl-red">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
    </div>
    <p>Please wait...</p>
    </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
    <div class="container-fluid">
    <div class="navbar-header">
    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
    <a href="javascript:void(0);" class="bars"></a>
    <a class="navbar-brand" href="index.php">Penggajian Pegawai PT Bakti Putra Meratus Banjarmasin</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-nav navbar-right">


        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
    </ul>
    </div>
    </div>
    </nav>
    <?php

    if ($_SESSION['Admin']) {
    $user = $_SESSION['Admin'];
    } elseif ($_SESSION['Pimpinan']) {
    $user = $_SESSION['Pimpinan'];
    }

    $sql = $koneksi->query("select * from user where nama_user='$user'");

    $data = $sql->fetch_assoc();

    ?>
    <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
    <div class="image">
        <img src="images/<?php echo $data['foto']; ?>" width="60" height="60" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $data['nama_user']; ?></div>
        <div class="email">PT. Bakti Putra Meratus, <?php echo $data['level']; ?></div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="logout.php"><i class="material-icons">input</i>Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>

        <?php if ($_SESSION['Admin']) { ?>

            <li>
                <a href="index.php">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=admin">
                    <i class="material-icons">person</i>
                    <span>Data Admin</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=jabatan">
                    <i class="material-icons">cases</i>
                    <span>Data Jabatan</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=pegawai">
                    <i class="material-icons">people_alt</i>
                    <span>Data Pegawai</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=golongan">
                    <i class="material-icons">cases</i>
                    <span>Data Golongan</span>
                </a>
            </li>

            <li>
                <a href="kehadiran.php">
                    <i class="material-icons">input</i>
                    <span>Data Kehadiran Pegawai</span>
                </a>
            </li>

            <li>
                <a href="gaji.php">
                    <i class="material-icons">local_atm</i>
                    <span>Gaji Pegawai</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">print</i>
                    <span>Laporan</span>
                </a>
                <ul class="ml-menu">

                    <li>
                        <a data-toggle="modal" data-target="#smallModal5">Data Pegawai</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#smallModal2">Data Jabatan</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#smallModal3">Kehadiran Pegawai</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#smallModal4">Lembur Pegawai</a>
                    </li>
                    <li>
                        <a href="page/laporan/laporanjadwalekstrakulikuler.php">Potongan Gaji Pegawai</a>
                    </li>
                    

                <?php } ?>

                <li class="active">

                    <ul class="ml-menu">

                    </ul>
                </li>
                <li>

                    <ul class="ml-menu">

                    </ul>
                </li>
                <li>

                    <ul class="ml-menu">

                    </ul>
                </li>

                </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
    <div class="copyright">
        &copy; 2020/2021 <a href="javascript:void(0);">PT. Bakti Putra Meratus</a>.
    </div>
    </div>
    <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
    <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
    </ul>
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
        <ul class="demo-choose-skin">
            <li data-theme="red" class="active">
                <div class="red"></div>
                <span>Red</span>
            </li>
            <li data-theme="pink">
                <div class="pink"></div>
                <span>Pink</span>
            </li>
            <li data-theme="purple">
                <div class="purple"></div>
                <span>Purple</span>
            </li>
            <li data-theme="deep-purple">
                <div class="deep-purple"></div>
                <span>Deep Purple</span>
            </li>
            <li data-theme="indigo">
                <div class="indigo"></div>
                <span>Indigo</span>
            </li>
            <li data-theme="blue">
                <div class="blue"></div>
                <span>Blue</span>
            </li>
            <li data-theme="light-blue">
                <div class="light-blue"></div>
                <span>Light Blue</span>
            </li>
            <li data-theme="cyan">
                <div class="cyan"></div>
                <span>Cyan</span>
            </li>
            <li data-theme="teal">
                <div class="teal"></div>
                <span>Teal</span>
            </li>
            <li data-theme="green">
                <div class="green"></div>
                <span>Green</span>
            </li>
            <li data-theme="light-green">
                <div class="light-green"></div>
                <span>Light Green</span>
            </li>
            <li data-theme="lime">
                <div class="lime"></div>
                <span>Lime</span>
            </li>
            <li data-theme="yellow">
                <div class="yellow"></div>
                <span>Yellow</span>
            </li>
            <li data-theme="amber">
                <div class="amber"></div>
                <span>Amber</span>
            </li>
            <li data-theme="orange">
                <div class="orange"></div>
                <span>Orange</span>
            </li>
            <li data-theme="deep-orange">
                <div class="deep-orange"></div>
                <span>Deep Orange</span>
            </li>
            <li data-theme="brown">
                <div class="brown"></div>
                <span>Brown</span>
            </li>
            <li data-theme="grey">
                <div class="grey"></div>
                <span>Grey</span>
            </li>
            <li data-theme="blue-grey">
                <div class="blue-grey"></div>
                <span>Blue Grey</span>
            </li>
            <li data-theme="black">
                <div class="black"></div>
                <span>Black</span>
            </li>
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="settings">
        <div class="demo-settings">
            <p>GENERAL SETTINGS</p>
            <ul class="setting-list">
                <li>
                    <span>Report Panel Usage</span>
                    <div class="switch">
                        <label><input type="checkbox" checked><span class="lever"></span></label>
                    </div>
                </li>
                <li>
                    <span>Email Redirect</span>
                    <div class="switch">
                        <label><input type="checkbox"><span class="lever"></span></label>
                    </div>
                </li>
            </ul>
            <p>SYSTEM SETTINGS</p>
            <ul class="setting-list">
                <li>
                    <span>Notifications</span>
                    <div class="switch">
                        <label><input type="checkbox" checked><span class="lever"></span></label>
                    </div>
                </li>
                <li>
                    <span>Auto Updates</span>
                    <div class="switch">
                        <label><input type="checkbox" checked><span class="lever"></span></label>
                    </div>
                </li>
            </ul>
            <p>ACCOUNT SETTINGS</p>
            <ul class="setting-list">
                <li>
                    <span>Offline</span>
                    <div class="switch">
                        <label><input type="checkbox"><span class="lever"></span></label>
                    </div>
                </li>
                <li>
                    <span>Location Permission</span>
                    <div class="switch">
                        <label><input type="checkbox" checked><span class="lever"></span></label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </aside>
    <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
    <div class="container-fluid">
    <div class="block-header">
    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kehadiran
                            </h2>
                           
                        </div>
                        <div class="body">
                                <form method="GET" action="Gaji.php">
                                <div class="form-group">
                                    <label>Bulan</label>
                                     <select name="bulan" class="form-control ">
                                          <option value="">-- Pilih --</option>
                                          <option value="01">Januari</option>
                                          <option value="02">Februari</option>
                                          <option value="03">Maret</option>
                                          <option value="04">April</option>
                                          <option value="05">Mei</option>
                                          <option value="06">Juni</option>
                                          <option value="07">Juli</option>
                                          <option value="08">Agustus</option>
                                          <option value="09">September</option>
                                          <option value="10">Oktober</option>
                                          <option value="11">November</option>
                                          <option value="12">Desember</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                     <select name="tahun" class="form-control">
                                      <option value="">-- Pilih --</option>
                                      <?php
                                      $y = date('Y');
                                      for ($i=2021; $i < $y+3; $i++) { 
                                          echo "<option value='$i'>$i</option>";
                                      }
                                      ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary"> Tampilkan Data</button>
                                
                                </form>
                                <br>
                                <?php 
                                if ((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')) {
                                    $bulan = $_GET['bulan'];
                                    $tahun = $_GET['tahun'];
                                }else{
                                  $bulan = date('m');
                                  $tahun = date('Y');
                                }
                                ?>
                                <div class="alert alert-info"><strong>Bulan : <?php echo $bulan; ?>, Tahun : <?php echo $tahun; ?></strong></div>
                               <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Gol</th>
                                <th>Status</th>
                                <th>Jml Anak</th>
                                <th>Gapok</th>
                                <th>Tj.Jabatan</th>
                                <th>Tj.S/I</th>
                                <th>Tj.Anak</th>
                                <th>Uang Makan</th>
                                <th>Uang Lembur</th>
                                <th>Askes</th>
                                <th>Pendapatan</th>
                                <th>Potongan</th>
                                <th>Total Gaji</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                           
                            $sql = $koneksi->query("SELECT * FROM gaji INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON pegawai.kode_jabatan=jabatan.kode_jabatan INNER JOIN golongan ON pegawai.kode_golongan=golongan.kode_golongan WHERE gaji.bulan=$bulan AND gaji.tahun=$tahun");
                            while ($data = $sql->fetch_assoc()) {
                            	$t_anak = $data['jumlah_anak'] * $data['t_anak'];
                            	$pendapatan = $data['gaji_pokok'] + $data['tunjangan'] + $data['t_istrisuami'] + $data['uang_makan'] + $data['uang_lembur'] + $data['askes'] + $t_anak;
                            	$totalgaji = $pendapatan - $data['potongan'];

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['nama_pegawai']; ?></td>
                                    <td><?php echo $data['nama_jabatan']; ?></td>
                                    <td><?php echo $data['nama_golongan']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['jumlah_anak']; ?></td>
                                    <td><?php echo $data['gaji_pokok']; ?></td>
                                    <td><?php echo $data['tunjangan']; ?></td>
                                    <td><?php echo $data['t_istrisuami']; ?></td>
                                    <td><?php echo $data['t_anak']; ?></td>
                                    <td><?php echo $data['uang_makan']; ?></td>
                                    <td><?php echo $data['uang_lembur']; ?></td>
                                    <td><?php echo $data['askes']; ?></td>
                                    <td><?php echo $pendapatan; ?></td>
                                    <td><?php echo $data['potongan']; ?></td>
                                    <td><?php echo $totalgaji; ?></td>
                                </tr>
                            <?php }
                            if ($sql->num_rows > 0) {
                                ?>
                              <?php
                              }else{
                                ?>
                                <tr>
                                <td colspan="10" text-align="center">
                                    Belum Ada Data pada bulan dan tahun yang anda pilih !!!
                                </td>
                                </tr>

                              <?php
                              }  
                              ?>
                        </tbody>
                    </table>
                </div>  
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="plugins/nouislider/nouislider.js"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    </body>

    </html>

    <?php
  }
     else {

    header("location:login.php");
    }


    ?>


