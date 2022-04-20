<?php

// Mapping jenis laporan
$reports = [
  "gaji" => [
    "pdf" => "page/report/laporangaji.php",
    "judul" => "Laporan Gaji Pegawai"
  ]
];

$jenis_laporan = @$_GET['laporan'] ? $_GET['laporan'] : "gaji";

?>

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Cetak <?= $reports[$jenis_laporan]['judul'] ?>
        </h2>
      </div>

      <div class="body">

        <form action="<?= $reports[$jenis_laporan]['pdf'] ?>" method="GET" target="_BLANK" enctype="multipart/form-data">
          <!-- Uncomment & Ubah ini untuk mengubah nama file pdf yang didownload -->
          <!-- <input type="hidden" name="download" value="laporan-gaji.pdf"> -->

          <label>No Pegawai</label>
          <div class="form-group">
            <div class="form-line">
              <input type="number" name="nip" class="form-control" placeholder="Isi no induk pegawai atau kosongkan untuk mencetak semua" />
            </div>
          </div>

          <label>Mode</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="mode" id="mode1" value="D" checked>
            <label class="form-check-label" for="mode1">
              Download
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="mode" id="mode2" value="I">
            <label class="form-check-label" for="mode2">
              Cetak
            </label>
          </div>

          <br>
          <input type="submit" value="Proses" class="btn btn-primary">

        </form>
      </div>
    </div>
  </div>
</div>