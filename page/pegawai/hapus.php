<?php

$nip = $_GET['nip'];
$sql = $koneksi->query("delete from pegawai where nip='$nip'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data pegawai Berhasil Di Hapus")
		window.location.href = "?page=pegawai";
	</script>
<?php

}

?>