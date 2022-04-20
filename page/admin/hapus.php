<?php

$nama_user = $_GET['nama_user'];
$sql = $koneksi->query("delete from user where nama_user='$nama_user'"); 


if (sql) {
	?>
	<script type="text/javascript">
			
	alert ("Data Berhasil Di Hapus")
	window.location.href = "?page=user";

	</script>
	<?php

}

?>