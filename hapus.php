<?php

    include "koneksi.php";

    if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM peminjaman WHERE id_pinjam = '".$_GET['id']."' ");
		echo '<script>window.location="tampil.php"</script>';
	}


?>