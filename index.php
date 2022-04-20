    <?php
    // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    session_start();

    $koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");

    if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) {


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
              <a class="navbar-brand" href="index.php">BANK ARTHA SUKAMARA</a>
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
                <div class="email">BPRSUKAMARA, <?php echo $data['level']; ?></div>
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
                    <a href="?page=admin">
                      <i class="material-icons">person</i>
                      <span>Data Admin</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=adendum">
                      <i class="material-icons">people_alt</i>
                      <span>ADENDUM</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=adm_kredit">
                      <i class="material-icons">people_alt</i>
                      <span>ADM KREDIT</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=ao_kredit">
                      <i class="material-icons">people_alt</i>
                      <span>AO KREDIT</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_intern">
                      <i class="material-icons">people_alt</i>
                      <span>CS KREDIT INTERN</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_konsumtif">
                      <i class="material-icons">people_alt</i>
                      <span>CS KONSUMTIF</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_kendaraan">
                      <i class="material-icons">people_alt</i>
                      <span>CS KENDARAAN</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_modal">
                      <i class="material-icons">people_alt</i>
                      <span>CS MODAL</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_mk_skt">
                      <i class="material-icons">people_alt</i>
                      <span>CS MODAL KERJA SKT</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=cs_pertanian">
                      <i class="material-icons">people_alt</i>
                      <span>CS PERTANIAN</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=klam_asuransi">
                      <i class="material-icons">people_alt</i>
                      <span>KLAM ASURANSI</span>
                    </a>
                  </li>

                  <li>
                    <a href="?page=pelunasan_kredit">
                      <i class="material-icons">people_alt</i>
                      <span>PELUNASAN KREDIT</span>
                    </a>
                  </li>

                  <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                      <i class="material-icons">print</i>
                      <span>REPORT</span>
                    </a>
                    <ul class="ml-menu">
                      <li>
                        <a href="?page=report&laporan=gaji">LAPORAN GAJI PEGAWAI</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                      <i class="material-icons">print</i>
                      <span>Laporan</span>
                    </a>
                    <ul class="ml-menu">
                      <li>
                        <a href="page/laporan/laporanpegawai.php">LAPORAN DATA PEGAWAI</a>
                      </li>
                      <li>
                        <a href="?page=report">Tani</a>
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
                &copy; 2022 <a href="javascript:void(0);">MUHAMMAD YUSRIL MAHENDERA</a>.
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
                  <li data-theme="red">
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
                  <li data-theme="green" class="active">
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
              <?php
              $page = $_GET['page'];
              $aksi = $_GET['aksi'];

              if ($page == "admin") {
                if ($aksi == "") {
                  include "page/admin/admin.php";
                } elseif ($aksi == "tambah") {
                  include "page/admin/tambah.php";
                } else if ($aksi == "ubah") {
                  include "page/admin/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/admin/hapus.php";
                }
              } elseif ($page == "jabatan") {
                if ($aksi == "") {
                  include "page/jabatan/jabatan.php";
                } elseif ($aksi == "tambah") {
                  include "page/jabatan/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/jabatan/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/jabatan/hapus.php";
                }
              } elseif ($page == "cs_intern") {
                if ($aksi == "") {
                  include "page/cs_intern/cs_intern.php";
                } elseif ($aksi == "tambah") {
                  include "page/cs_intern/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/cs_intern/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/cs_intern/hapus.php";
                }
              } elseif ($page == "cs_mk_skt") {
                if ($aksi == "") {
                  include "page/cs_mk_skt/cs_mk_skt.php";
                } elseif ($aksi == "tambah") {
                  include "page/cs_mk_skt/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/cs_mk_skt/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/cs_mk_skt/hapus.php";
                }
              } elseif ($page == "cs_konsumtif") {
                if ($aksi == "") {
                  include "page/cs_konsumtif/cs_konsumtif.php";
                } elseif ($aksi == "tambah") {
                  include "page/cs_konsumtif/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/cs_konsumtif/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/cs_konsumtif/hapus.php";
                }
              } elseif ($page == "cs_kendaraan") {
                if ($aksi == "") {
                  include "page/cs_kendaraan/cs_kendaraan.php";
                } elseif ($aksi == "tambah") {
                  include "page/cs_kendaraan/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/cs_kendaraan/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/cs_kendaraan/hapus.php";
                }
              } elseif ($page == "cs_pertanian") {
                if ($aksi == "") {
                  include "page/cs_pertanian/cs_pertanian.php";
                } elseif ($aksi == "tambah") {
                  include "page/cs_pertanian/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/cs_pertanian/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/cs_pertanian/hapus.php";
                }
              } elseif ($page == "ao_kredit") {
                if ($aksi == "") {
                  include "page/ao_kredit/ao_kredit.php";
                } elseif ($aksi == "tambah") {
                  include "page/ao_kredit/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/ao_kredit/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/ao_kredit/hapus.php";
                }
              } elseif ($page == "adendum") {
                if ($aksi == "") {
                  include "page/adendum/adendum.php";
                } elseif ($aksi == "tambah") {
                  include "page/adendum/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/adendum/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/adendum/hapus.php";
                }
              } elseif ($page == "klam_asuransi") {
                if ($aksi == "") {
                  include "page/klam_asuransi/klam_asuransi.php";
                } elseif ($aksi == "tambah") {
                  include "page/klam_asuransi/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/klam_asuransi/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/klam_asuransi/hapus.php";
                }
              } elseif ($page == "pelunasan_kredit") {
                if ($aksi == "") {
                  include "page/pelunasan_kredit/pelunasan_kredit.php";
                } elseif ($aksi == "tambah") {
                  include "page/pelunasan_kredit/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/pelunasan_kredit/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/pelunasan_kredit/hapus.php";
                }
              } elseif ($page == "golongan") {
                if ($aksi == "") {
                  include "page/golongan/golongan.php";
                } elseif ($aksi == "tambah") {
                  include "page/golongan/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/golongan/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/golongan/hapus.php";
                }
              } elseif ($page == "kehadiran") {
                if ($aksi == "") {
                  include "page/kehadiran/kehadiran.php";
                } elseif ($aksi == "tambah") {
                  include "page/kehadiran/tambah.php";
                } elseif ($aksi == "ubah") {
                  include "page/kehadiran/ubah.php";
                } elseif ($aksi == "hapus") {
                  include "page/kehadiran/hapus.php";
                }
              } elseif ($page == "report") {
                if ($aksi == "") {
                  include "page/report/report.php";
                }
                // elseif ($aksi == "tambah") {
                //     include "page/kehadiran/tambah.php";
                // } elseif ($aksi == "ubah") {
                //     include "page/kehadiran/ubah.php";
                // } elseif ($aksi == "hapus") {
                //     include "page/kehadiran/hapus.php";
                // }
              } elseif ($page == "") {
                include "home.php";
              }



              ?>
            </div>
          </div>
        </section>

        <div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Lembur Pegawai</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="page/laporan/laporanlembur.php">


                  <label>Bulan</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="bulan" class="form-control" placeholder="Masukkan Bulan EX : 01" required />
                    </div>
                  </div>

                  <label>Tahun</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun EX : 2020" required />
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Print</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>


        <div class="modal fade" id="smallModal2" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Kehadiran Pegawai</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="page/laporan/laporankehadiran.php">
                  <label>Bulan</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="bulan" class="form-control" placeholder="Masukkan Bulan EX : 01" required />
                    </div>
                  </div>

                  <label>Tahun</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun EX : 2020" required />
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Print</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="smallModal3" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Potongan Gaji Pegawai</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="page/laporan/laporanpotongan.php">


                  <label>Bulan</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="bulan" class="form-control" placeholder="Masukkan Bulan EX : 01" required />
                    </div>
                  </div>

                  <label>Tahun</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun EX : 2020" required />
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Print</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="smallModal4" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Slip Gaji Pegawai</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="page/laporan/slipgaji.php">


                  <label>NIP</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" required />
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Print</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="smallModal5" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Gaji Pegawai</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="page/laporan/laporangaji.php">


                  <label>Bulan</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="bulan" class="form-control" placeholder="Masukkan Bulan EX : 01" required />
                    </div>
                  </div>

                  <label>Tahun</label>
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun EX : 2020" required />
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Print</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>

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
    } else {
      header("location:login.php");
    }
    ?>