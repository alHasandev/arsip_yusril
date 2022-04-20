<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from cs_intern where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data CS Berhasil Di Hapus")
		window.location.href = "?page=cs_intern";
	</script>
<?php

}

?>