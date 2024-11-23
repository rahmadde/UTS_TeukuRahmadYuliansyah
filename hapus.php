<?php
    include("koneksi.php");

    $id = $_GET['id'];

    mysql_query("DELETE from karyawan WHERE id='$id'");

    header("location:index.php");
?>