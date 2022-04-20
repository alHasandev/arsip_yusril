<?php

$kode = $_GET['kode_golongan'];
$sql = $koneksi->query("delete from golongan where kode_golongan='$kode'"); 


if (sql) {
	?>
	<script type="text/javascript">
			
	alert ("Data Berhasil Di Hapus")
	window.location.href = "?page=golongan";

	</script>
	<?php

}

?>