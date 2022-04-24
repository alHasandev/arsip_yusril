<?php

// require_once "../../koneksi.php";

// Mapping jenis laporan
$reports = [
  "suami" => "Berkas Suami",
  "istri" => "Berkas Istri",
  "permohonan" => "Berkas Permohonan",
  "persetujuan" => "Berkas Persetujuan",
  "sk" => "Berkas SK",
  "slip" => "Berkas Slip",
  "kk" => "Berkas Kartu Keluarga",
  "nikah" => "Berkas Kartu Nikah",
  "npwp" => "Berkas Kartu NPWP",
  "tespen" => "Berkas Taspen",
  "tabungan" => "Berkas Tabungan",
  "jaminan" => "Berkas Jaminan",
];

// Proses data cs_konsumtif
if (@$_POST['no']) {
  $query = "SELECT * FROM cs_konsumtif WHERE nomor = '$_POST[no]'";
  $konsumtif = $koneksi->query($query)->fetch_assoc();
  var_dump($query);
}

?>

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Cari Berkas Konsumtif
        </h2>
      </div>

      <div class="body">

        <form action="?page=report_batch" method="POST" enctype="multipart/form-data">
          <!-- Uncomment & Ubah ini untuk mengubah nama file pdf yang didownload -->
          <!-- <input type="hidden" name="download" value="laporan-gaji.pdf"> -->

          <label>No Berkas Konsumtif</label>
          <div class="form-group">
            <div class="form-line">
              <input type="number" name="no" class="form-control" placeholder="Isi nomer untuk mencari berkas" />
            </div>
          </div>

          <br>
          <input type="submit" value="Cari" class="btn btn-primary">

        </form>
      </div>
    </div>
  </div>
</div>

<?php if (@$konsumtif) : ?>

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          Keterangan
        </div>
        <div class="body">
          <div class="form-group">
            <label>Nomor</label>
            <div><?= $konsumtif['nomor'] ?></div>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <div><?= $konsumtif['nama'] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php foreach ($reports as $report => $judul) : ?>
        <div class="card">
          <div class="header">
            <?= $judul ?>
          </div>
          <div class="body">
            <div class="">
              <?= $konsumtif[$report] ?>
            </div>
            <a href="images/<?= $konsumtif[$report] ?>" download class="btn btn-primary">Download</a>
            <a href="images/<?= $konsumtif[$report] ?>" target="_BLANK" class="btn btn-secondary">Cetak</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>