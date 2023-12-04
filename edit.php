<?php
    include "koneksi.php";

	$queryEdit = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_pinjam = '".$_GET['id']."' ");
	if(mysqli_num_rows($queryEdit) == 0){
		echo '<script>window.location="tampil.php"</script>';
	}
	$k = mysqli_fetch_object($queryEdit);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Peminjam</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

    <div class="container card mt-5 col-md-8">
                <h5 class="mb-0 mt-3 ms-2 fw-bold">Tambah Data Peminjam</h5><hr>
                <div class="card-body">
                    <form action="" method="post">
                    <div class=" mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nama" name="tnim" value="<?php echo $k->Nim ?>" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="tnama" value="<?php echo $k->nama_lengkap ?>" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <br>
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="L" <?php if($k->jns_kel=='L') echo 'checked'?>> Laki-laki
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="P" <?php if($k->jns_kel=='P') echo 'checked'?>> Perempuan
                        </div>
                        <div class=" mb-3">
                        <label class="form-label">Asal Fakultas</label>
                        <select class="form-select" aria-label="Default select example" name="tfakultas">
                            <option selected value="<?php echo $k->asal_fakultas?>"><?php echo $k->asal_fakultas?></option>
                            <option  value="Ilmu Komputer">Ilmu Komputer</option>
                            <option  value="Kesehatan">Kesehatan</option>
                            <option  value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                        </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Judul Buku</label>
                            <textarea class="form-control" name="tjudulbuku" id="pertanyaan" rows="3" required><?php echo $k->judul_buku ?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger fw-bold">Edit Data Peminjam</button>
                    </form>
                    <?php 
					if(isset($_POST['submit'])){

						$nim = $_POST['tnim'];
                        $nama = $_POST['tnama'];
                        $jk = $_POST['tjk'];
                        $fakultas = $_POST['tfakultas'];
                        $judulbuku = $_POST['tjudulbuku'];

						$update = mysqli_query($conn, "UPDATE peminjaman SET 
												Nim = '".$nim."', nama_lengkap = '".$nama."', jns_kel = '".$jk."', asal_fakultas = '".$fakultas."', judul_buku = '".$judulbuku."'
												WHERE id_pinjam = '".$k->id_pinjam."' ");

						if($update){
							
							echo '<script>window.location="tampil.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
                </div>
    </div>    
    <br><br>
<body>
    
</body>

</html>

