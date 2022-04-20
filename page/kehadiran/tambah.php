<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Data Kehadiran
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST">
                        <div class="form-group">
                        <label>NIP</label>
                        <select class="form-control" name="nip" />
                        <?php
                        
                        echo "<option value=''>-- Pilih NIP --</option>";
                        $sql = $koneksi -> query ("select * from pegawai order by nip");
                        while ($data=$sql -> fetch_assoc()) {
                        echo "<option value ='$data[nip]'>$data[nip]</option>";
                        }

                        ?>
                            </select>
                        </div>

                        <label>Bulan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="bulan" class="form-control" placeholder="Masukkan Bulan" required />
                            </div>
                        </div> 

                        <label>Tahun</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun" required />
                            </div>
                        </div>
                        
                        <label>Masuk</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="masuk" class="form-control" placeholder="Masukkan jumlah Masuk" required />
                            </div>
                        </div>

                        <label>Sakit</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="sakit" class="form-control" placeholder="Masukkan Jumlah Sakit" required />
                            </div>
                        </div>

                        <label>Izin</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="izin" class="form-control" placeholder="Masukkan Jumlah Izin" required />
                            </div>
                        </div>

                        <label>Alpha</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="alpha" class="form-control" placeholder="Masukkan Jumlah Alpha" required />
                            </div>
                        </div>

                        <label>Lembur</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="lembur" class="form-control" placeholder="Masukkan Jumlah Lembur" required />
                            </div>
                        </div>

          
                       
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                       
                    </form>
                </div>
        </div>
</div>
</div>
<?php 

if (isset($_POST['simpan'])) {

    $nip = $_POST ['nip'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $masuk = $_POST ['masuk'];
    $sakit = $_POST ['sakit'];
    $izin = $_POST ['izin'];
    $alpha = $_POST ['alpha'];
    $lembur = $_POST ['lembur'];
    $potongan = 10000 * $alpha;

        $sql = $koneksi->query("insert into gaji (nip,bulan,tahun,masuk,sakit,izin,alpha,lembur,potongan)values('$nip','$bulan','$tahun','$masuk','$sakit','$izin','$alpha','$lembur','$potongan')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil Disimpan")
                window.location.href = "kehadiran.php";

            </script>
            
            <?php
        }
    }

 ?>