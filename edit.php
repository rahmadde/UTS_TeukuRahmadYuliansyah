<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager | Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <form action="proses.php" method="post">
        <div class="card col-6 mt-5 m-auto col-7 row">
            <div class="card-header">
                <h3>Tambah Data Karyawan</h3>
            </div>
            <?php
                include("koneksi.php")
            ?>
            <div class="card-body">
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Nama Karyawan</label>
                    <input type="text" name="nama" id="" class="form-control" required>
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" id="" class="form-control" required>
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Gaji</label>
                    <input type="number" name="gaji" id="" class="form-control" min="1000000">
                </div>
                <div class="mb-2 mt-2">
                   <button type="submit" class="btn btn-primary">Kirim</button>
                   <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>