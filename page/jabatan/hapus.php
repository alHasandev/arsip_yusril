<?php

$kode = $_GET['kode_jabatan'];
$sql = $koneksi->query("delete from jabatan where kode_jabatan='$kode'"); 


if (sql) {
	?>
	<script type="text/javascript">
			
	alert ("Data Berhasil Di Hapus")
	window.location.href = "?page=jabatan";

	</script>
	<?php

}

?>