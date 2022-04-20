<?php

require_once '../vendor/autoload.php';
require_once "../app/helpers.php";
require_once '../app/MyMPDF.php';
require_once "../app/koneksi.php";

$query = "SELECT * FROM pasien";

$tanggal = @$_GET['tanggal'] or "";

if ($tanggal) {
  $query .= " WHERE tgl_daftar = '$tanggal'";
} else {
  $tanggal = "Semua Tanggal";
}

// capturing html template
ob_start();

?>

<html>

<head>
  <?php require_once 'styles.php' ?>
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
  <div>
    <!-- <img src="../assets/img/banners/cop-surat.jpg" alt=""> -->
    <table width="100%" class="border-none text-center" style="border-bottom: 1px solid rgb(0, 0, 0);" cellpadding="0">
      <tbody>
        <tr>
          <td rowspan="3">
            <img src="../assets/img/logo/bkkbn.png" alt="logo" style="width: 180px;">
          </td>
          <td rowspan="3"></td>
          <td>
            <h1 class="report-header">SISTEM INFORMASI PELAYANAN KB BERBASIS WEB PADA PERWAKILAN BKKBN PROVINSI KALIMANTAN SELATAN</h1>
          </td>
        </tr>
        <tr>
          <td>
            <p>Fax/Telp: 0511-32013222</p>
          </td>
        </tr>
        <tr>
          <td>
            <h4 class="report-title">Laporan Data Pasien</h4>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br />
  <table width="100%" style="border-collapse: collapse;" cellpadding="8">
    <thead>
      <tr>
        <td width="20%" class="text-bold">Tanggal Daftar</td>
        <td width="2%" class="text-center">:</td>
        <td width="28%"><?= $tanggal ?></td>
        <td width="20%" class="text-bold">Tanggal Cetak</td>
        <td width="2%" class="text-center">:</td>
        <td width="28%"><?= date('Y-m-d') ?></td>
      </tr>
    </thead>
  </table>
  <br>
  <table width="100%" style="font-size: 9pt;" cellpadding="8">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">No. Anggota</th>
        <th class="text-center">NIK</th>
        <th>Nama</th>
        <th class="text-center">Tgl Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kontak</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $no = 1;
      $barang_masuk = $conn->query($query);
      while ($data = $barang_masuk->fetch_assoc()) :
      ?>
        <tr>
          <td class="text-center"><?= $no; ?></td>
          <td class="text-center"><?= $data['no_anggota'] ?></td>
          <td class="text-center"><?= $data['nik'] ?></td>
          <td><?= $data['nama'] ?></td>
          <td class="text-center"><?= $data['tgl_lahir'] ?></td>
          <td><?= $data['jk'] ?></td>
          <td><?= $data['kontak'] ?></td>
        </tr>
        <?php $no++; ?>
      <?php endwhile; ?>
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
  'margin_footer' => 5
]);

$mpdf->template($html);

$mpdf->renderPDF();
