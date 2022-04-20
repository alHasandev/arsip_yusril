<?php

include "../../koneksi.php";


date_default_timezone_set('Asia/Jakarta');

$koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");
$nip = $_POST['nip'];


 function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
    }

?>

<style>

    @media print{
      input.noPrint{
        display: none;
      }

    }
.img{
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
<?php
$sql = $koneksi->query("SELECT * from gaji INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON pegawai.kode_jabatan=jabatan.kode_jabatan INNER JOIN golongan ON pegawai.kode_golongan = golongan.kode_golongan where gaji.nip = '$nip'");
    $data = $sql->fetch_assoc();
      $t_anak = $data['jumlah_anak'] * $data['t_anak'];
      $pendapatan = $data['gaji_pokok'] + $data['tunjangan'] + $data['t_istrisuami'] + $data['uang_makan'] + $data['uang_lembur'] + $data['askes'] + $t_anak;
      $totalgaji = $pendapatan - $data['potongan'];
?>
<table class="table table-borderless" style="width: 100%"> 

  <tr>
    <th style="font-size: 20px;" align="left"><center>BANK ARTHA</center></th>
  </tr> 
  <tr>
    <th style="font-size: 20px;" align="left"><center>SUKAMARA</center></th>
  </tr>
  </table>
  
   <h3><center><b>SLIP GAJI </b></center></h3> 
<table class="table " style="width: 100%"> 
    <th style="text-align: right;">Tanggal Cetak :&nbsp&nbsp<?php echo format_indo(date('Y-m-d'))?> </th>
  </table>
<table border="0" width="100%" style="border-collapse: collapse;">
   <hr>
    <tr>
                                <th>Nama Pegawai</th>
                                <td>:</td>
                                <td><?php echo $data['nama_pegawai']; ?></td>

                                <th>Alamat</th>
                                <td>:</td>
                                <td><?php echo $data['alamat']; ?></td>
    </tr>
    <tr>
                                <th>Jabatan</th>
                                <td>:</td>
                                <td><?php echo $data['nama_jabatan']; ?></td>

                                <th>Telpon</th>
                                <td>:</td>
                                <td><?php echo $data['telp']; ?></td>
    </tr>

            </table>
    <hr>
    <table border="0" width="100%" style="border-collapse: collapse;">
      <br><br><br><br>
    <tr>
                                <th>Nama Pegawai</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td><?php echo $data['nama_pegawai']; ?></td>

    </tr>
    <tr>
                                <th>Gaji Pokok</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['gaji_pokok']; ?></td>

    </tr>
    <tr>
                                <th>Tunjangan Jabatan</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['tunjangan']; ?></td>

    </tr>
    <tr>
                                <th>Tunjangan Suami Istri</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['t_istrisuami']; ?></td>

    </tr>
     <tr>
                                <th>Tunjangan Anak</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['t_anak']; ?></td>

    </tr>
    <tr>
                                <th>Uang Makan</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['uang_makan']; ?></td>

    </tr>
    <tr>
                                <th>Uang Lembur</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['uang_lembur']; ?></td>

    </tr>
    <tr>
                                <th>Askes</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['askes']; ?></td>

    </tr>
    <tr>
                                <th>Pendapatan</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $pendapatan; ?></td>

    </tr>
    <tr>
                                <th>Potongan Gaji</th>
                                <td></td>
                                <td></td>

                                <th></th>
                                <td>:</td>
                                <td>RP.<?php echo $data['potongan']; ?> </td>
                                <td>+ </td>


    </tr>

            </table>
    <hr>
    <div align="right">
      RP. <?php echo number_format($totalgaji); ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
            <br>
            <input type="button" class="noPrint button" value="Cetak" onclick="window.print()">
                      </div>
                  </div>
              </div>
          </div>
    </div>                                     
