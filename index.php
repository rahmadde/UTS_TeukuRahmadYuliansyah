<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="card col-6 mt-5 m-auto col-7 row">
        <div class="card-header">
            <h3 class="float-start">Employee Manager</h3>
            <span class="float-end">
                <a href="tambah_data.php" class="btn btn-success">
                    <font class="">Tambah Data</font>
                </a>
            </span>
        </div>
         <div class="card-body">
            <div class="mb-2 mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Karyawan</th>
                            <th scope="col">Nama Kayawan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Gaji</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include ("koneksi.php");

                        $tampil = "SELECT * FROM karyawan";

                        $proses = mysqli_query($koneksi, $tampil);

                        foreach($proses as $data){
                        
                    ?>

                        <tr>
                            <td><?=$data['id_karyawan']?></td>
                            <td><?=$data['nama_karyawan']?></td>
                            <td><?=$data['jabatan']?></td>
                            <td><?=$data['tanggal_masuk']?></td>
                            <td><?=$data['gaji']?></td>
                            <td>
                            <a href="" class="btn btn-info btn-sm">
                                Edit
                            </a>
                            <a href="" class="btn btn-danger btn-sm">
                                Hapus
                            </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>