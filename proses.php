<?php
    include("koneksi.php");

    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $tanggal    = $_POST['tanggal'];
    $gaji       = $_POST['gaji'];

    $simpan = "INSERT INTO karyawan(nama_karyawan, jabatan, tanggal_masuk, gaji) VALUES ('$nama','$jabatan','$tanggal','$gaji')";

    mysqli_query($koneksi, $simpan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="card col-6 mt-5 m-auto col-7 row">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card_body mt-2 mb-2">
                <table class="table">
                    <tr>
                        <th scope="row">Nama Karywan</th>
                        <td>: <?=$nama?></td>
                    </tr>
                    <tr>
                        <th scope="row">Jabatan</th>
                        <td>: <?=$jabatan?></td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal Masuk</th>
                        <td>: <?=$tanggal?></td>
                    </tr>
                    <tr>
                        <th scope="row">Gaji</th>
                        <td>: Rp. <?=$gaji?></td>
                    </tr>
                </table>
                <a href="index.php" class="btn btn-info">Halaman Utama</a>
            </div>
        </div>
</body>
</html>