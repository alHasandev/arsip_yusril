<?php

include "../../koneksi.php";
require_once '../../my_mpdf/MyMPDF.php';

date_default_timezone_set('Asia/Jakarta');

$bulan = '01'; //$_POST['bulan'];
$tahun = 2021; //$_POST['tahun'];

$suffix_judul = "";
if (@$_GET['nip']) {
  $pegawai = $koneksi->query("SELECT nama_pegawai, nama_jabatan FROM pegawai INNER JOIN jabatan ON pegawai.kode_jabatan = jabatan.kode_jabatan WHERE nip = '$_GET[nip]'")->fetch_assoc();
  $suffix_judul = " - $pegawai[nama_pegawai] - $pegawai[nama_jabatan]";
}

$judul = "LAPORAN GAJI PEGAWAI $suffix_judul";


function format_indo($date)
{
  $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);
  $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
  return ($result);
}

// capturing html template
ob_start();
?>


<html>

<head>
  <title><?= $judul ?> -- <?php echo format_indo(date('Y-m-d')) ?></title>
  <?php //include_once 'styles.php' 
  ?>
  <style>
    /* @media print {
    input.noPrint {
      display: none;
    }

  } */

    .img {
      width: 900px;
      height: auto;
      margin-left: 20px;

    }

    .button {
      background-color: #1E90FF;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .tumblr {
      background-color: #1E90FF;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <!--mpdf
  <htmlpagefooter name="myfooter">
  <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
  Halaman {PAGENO} dari {nb}
  </div>
  <div class="text-right">
    <small class="text-italic"><?= __DIR__ ?></small>
  </div>
  </htmlpagefooter>
  
  <sethtmlpagefooter name="myfooter" value="on" />
  mpdf-->


  <!-- <img src="../../images/Kop.jpg"> -->
  <table class="table table-borderless" style="width: 100%">
    <thead>
      <tr>
        <th>
          <h3><?= $judul ?></h3>
        </th>
      </tr>
      <tr>
        <td style="text-align: right;">Tanggal Cetak : <?php echo format_indo(date('Y-m-d')) ?> </td>
      </tr>
    </thead>
  </table>
  <hr>
  <br>

  <table border="1" width="100%" style="border-collapse: collapse;">
    <thead>
      <tr>

        <th width="25px" height="50px">No</th>
        <th width="25px" height="50px">NIP</th>
        <th width="25px" height="50px">Nama Pegawai</th>
        <th width="25px" height="50px">Jabatan</th>
        <th width="25px" height="50px">Gol</th>
        <th width="25px" height="50px">Status</th>
        <!-- <th width="25px" height="50px">Jml Anak</th> -->
        <th width="25px" height="50px">Gapok</th>
        <th width="25px" height="50px">Total Tunjangan</th>
        <!-- <th width="25px" height="50px">Tj.S/I</th>
        <th width="25px" height="50px">Tj.Anak</th> -->
        <!-- <th width="25px" height="50px">Uang Makan</th>
        <th width="25px" height="50px">Uang Lembur</th> -->
        <!-- <th width="25px" height="50px">Askes</th> -->
        <th width="25px" height="50px">Pendapatan</th>
        <th width="25px" height="50px">Potongan</th>
        <th width="25px" height="50px">Total Gaji</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;


      $query = "SELECT * from gaji INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON pegawai.kode_jabatan=jabatan.kode_jabatan INNER JOIN golongan ON pegawai.kode_golongan = golongan.kode_golongan where bulan = '$bulan' AND tahun = '$tahun'";

      // Filter berdasarkan nip jika ada
      if (@$_GET['nip']) {
        $query .= " AND pegawai.nip = '$_GET[nip]'";
      }
      $sql = $koneksi->query($query);

      while ($data = $sql->fetch_assoc()) {
        $t_anak = $data['jumlah_anak'] * $data['t_anak'];
        $total_tunjangan = $data['tunjangan'] + $data['t_istrisuami'] + $data['uang_makan'] + $data['uang_lembur'] + $data['askes'] + $t_anak;
        $pendapatan = $data['gaji_pokok'] + $total_tunjangan;
        $totalgaji = $pendapatan - $data['potongan'];

      ?>
        <tr>
          <td width="25px" height="50px">
            <center><?php echo $no++; ?></center>
          </td>
          <td width="100px" height="50px">
            <center><?php echo $data['nip']; ?></center>
          </td>
          <td width="100px" height="50px">
            <center><?php echo $data['nama_pegawai']; ?></center>
          </td>
          <td width="100px" height="50px">
            <center><?php echo $data['nama_jabatan']; ?></center>
          </td>
          <td width="100px" height="50px">
            <center><?php echo $data['nama_golongan']; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center><?php echo $data['status']; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center>RP.<?php echo $data['gaji_pokok']; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center>RP.<?php echo $total_tunjangan; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center>RP.<?php echo $pendapatan; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center>RP.<?php echo $data['potongan']; ?> </center>
          </td>
          <td width="100px" height="50px">
            <center>RP.<?php echo $totalgaji; ?> </center>
          </td>
        </tr>
      <?php }  ?>
    </tbody>
  </table>


</body>

</html>

<?php

$html = ob_get_contents();

ob_end_clean();

// echo $file_template;

$mpdf = new MyMPDF([
  'margin_left' => 8,
  'margin_right' => 5,
  'margin_top' => 10,
  'margin_bottom' => 25,
  'margin_header' => 0,
  'margin_footer' => 5,
  'orientation' => 'L'
]);

$mpdf->template($html);

// Default
$mode = 'I'; // I for Inline / preview pdf in browser
$download_filename = "$judul.pdf";

if (@$_GET['download']) {
  $download_filename = $_GET['download'];
}

if (@$_GET['mode']) {
  $mode = $_GET['mode'];
  // mpdf::output<-dest = D for Download
}

$mpdf->renderPDF($download_filename, $mode);
