<?php
    include("../koneksi.php");

    $kategori = $_POST['kategori'];

    $simpan = "INSERT INTO kategoris (nama_kategori) VALUES ('$kategori')";

    $proses = mysqli_query($koneksi, $simpan);

    header("location:index.php")
?>