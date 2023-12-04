<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pinjaman perpustakaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

    <div class="container card mt-5 col-md-8">
                <h5 class="mb-0 mt-3 ms-2 fw-bold">Tambah Data Peminjam</h5><hr>
                <div class="card-body">
                    <form action="tambah.php" method="post">
                    <div class=" mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nama" name="tnim" placeholder="Masukkan NIM" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="tnama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <br>
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="L"> Laki-laki
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="P"> Perempuan
                        </div>
                        <div class=" mb-3">
                        <label class="form-label">Asal Fakultas</label>
                        <select class="form-select" aria-label="Default select example" name="tfakultas">
                            <option selected>-= PILIH =-</option>
                            <option  value="Ilmu Komputer">Ilmu Komputer</option>
                            <option  value="Kesehatan">Kesehatan</option>
                            <option  value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                        </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Judul Buku</label>
                            <textarea class="form-control" name="tjudulbuku" id="pertanyaan" rows="3" placeholder="Masukkan Judul Buku" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success fw-bold">Tambah Data Peminjam</button>
                    </form>
                </div>
    </div>    
    <br><br>
<body>
    
</body>

</html>

