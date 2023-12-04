<?php

include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Peminjam</title>
  </head>
  <body>
    <div class="container">
        <div class="mt-5 mb-5">
            <h3>Daftar Pinjaman</h3>       
        </div>
        <table class="table table-info table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Asal Fakultas</th>
            <th scope="col">Buku yang dipinjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $showdata = mysqli_query($conn, "SELECT * FROM peminjaman");
                while($r=mysqli_fetch_array($showdata)){
                ?>
                <tr>
                <th scope="row"><?php echo $r['id_pinjam']; ?></th>
                <td><?php echo $r['Nim']; ?></td>
                <td><?php echo $r['nama_lengkap']; ?></td>
                <td><?php echo $r['asal_fakultas']; ?></td>
                <td><?php echo $r['judul_buku']; ?></td>
                <td><?php echo $r['tgl_sewa']; ?></td>
                <td><?php echo $r['tgl_kembali']; ?></td>
                <td><?php echo "<a href='edit.php?id=$r[id_pinjam]'>Edit</a> | 
      <a href='hapus.php?id=$r[id_pinjam]'>Hapus</a>";?></td>
                </tr>
                <?php        
                }
            ?>
            
        </tbody>
        </table>
        <a href="formpinjam.php" class="btn btn-primary fw-bold">Tambah Data</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>