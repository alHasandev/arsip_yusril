<?php

include "../../koneksi.php";


date_default_timezone_set('Asia/Jakarta');

$koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];


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


<img src="../../images/Kop.jpg" >
<hr>
  <table class="table table-borderless" style="width: 100%"> 
   <h3><center><b>LAPORAN GAJI PEGAWAI </b></center></h3>
    <th style="text-align: right;">Tanggal Cetak :&nbsp&nbsp<?php echo format_indo(date('Y-m-d'))?> </th>
  </table>
<table border="1" width="100%" style="border-collapse: collapse;"> 

                                       <thead>
                                        <tr>

   <th width="25px" height="50px">No</th>
   <th width="25px" height="50px">NIP</th>
   <th width="25px" height="50px">Nama Pegawai</th>
   <th width="25px" height="50px">Jabatan</th>
   <th width="25px" height="50px">Gol</th>
   <th width="25px" height="50px">Status</th>
   <th width="25px" height="50px">Jml Anak</th>
   <th width="25px" height="50px">Gapok</th>
   <th width="25px" height="50px">Tj.Jabatan</th>
   <th width="25px" height="50px">Tj.S/I</th>
   <th width="25px" height="50px">Tj.Anak</th>
   <th width="25px" height="50px">Uang Makan</th>
   <th width="25px" height="50px">Uang Lembur</th>
   <th width="25px" height="50px">Askes</th>
   <th width="25px" height="50px">Pendapatan</th>
   <th width="25px" height="50px">Potongan</th>
   <th width="25px" height="50px">Total Gaji</th>

 </tr>  
    </thead>
    <tbody>
                                     

        <?php
        $no = 1;

        $sql = $koneksi ->query("SELECT * from gaji INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON pegawai.kode_jabatan=jabatan.kode_jabatan INNER JOIN golongan ON pegawai.kode_golongan = golongan.kode_golongan where bulan = '$bulan' AND tahun = '$tahun'");
        while ($data=$sql->fetch_assoc()) {
              $t_anak = $data['jumlah_anak'] * $data['t_anak'];
              $pendapatan = $data['gaji_pokok'] + $data['tunjangan'] + $data['t_istrisuami'] + $data['uang_makan'] + $data['uang_lembur'] + $data['askes'] + $t_anak;
              $totalgaji = $pendapatan - $data['potongan'];

        ?>
          <tr>
              <td width="25px" height="50px"><center><?php echo $no++;?></center></td> 
              <td width="100px" height="50px"><center><?php echo $data['nip'];?></center></td>
              <td width="100px" height="50px"><center><?php echo $data['nama_pegawai'];?></center></td>
              <td width="100px" height="50px"><center><?php echo $data['nama_jabatan'];?></center></td>
              <td width="100px" height="50px"><center><?php echo $data['nama_golongan'];?> </center></td>
              <td width="100px" height="50px"><center><?php echo $data['status'];?> </center></td>
              <td width="100px" height="50px"><center><?php echo $data['jumlah_anak'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['gaji_pokok'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['tunjangan'];?> </center></td>   
              <td width="100px" height="50px"><center>RP.<?php echo $data['t_istrisuami'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['t_anak'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['uang_makan'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['uang_lembur'];?> </center></td>     
              <td width="100px" height="50px"><center>RP.<?php echo $data['askes'];?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $pendapatan;?> </center></td>
              <td width="100px" height="50px"><center>RP.<?php echo $data['potongan'];?> </center></td> 
              <td width="100px" height="50px"><center>RP.<?php echo $totalgaji;?> </center></td>                
         </tr>  
        <?php }  ?>
            </tbody> 
            </table>
            <br>
            <input type="button" class="noPrint button" value="Cetak" onclick="window.print()">
                      </div>
                  </div>
              </div>
          </div>
    </div>                                     
