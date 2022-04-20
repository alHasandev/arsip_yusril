<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from ao_kredit where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data AO KREDIT Berhasil Di Hapus")
		window.location.href = "?page=ao_kredit";
	</script>
<?php

}

?>