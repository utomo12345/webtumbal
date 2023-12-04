<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $nim = $_POST['tnim'];
    $nama = $_POST['tnama'];
    $jk = $_POST['tjk'];
    $fakultas = $_POST['tfakultas'];
    $judulbuku = $_POST['tjudulbuku'];
    $biayasewa = 5000;
    $tgl_sewa = date('d-m-Y');
    $tgl_kembali =  strtotime($tgl_sewa);
    $tgl_kembali = strtotime("+7 day", $tgl_kembali);
    $tgl_kembali = date('d-m-Y', $tgl_kembali);

    $queryCreated = "INSERT INTO peminjaman(Nim, nama_lengkap, jns_kel, asal_fakultas, judul_buku, biaya_sewa, tgl_sewa, tgl_kembali) VALUES ('$nim', '$nama', '$jk' , '$fakultas', '$judulbuku', '$biayasewa', '$tgl_sewa', '$tgl_kembali')";
    
    $created = mysqli_query($conn, $queryCreated);
    echo '<script>alert("Berhasil menambahkan data!")</script>';
    echo '<script>window.location="tampil.php"</script>';
}




?>