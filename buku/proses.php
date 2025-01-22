<?php
    include("../koneksi.php");

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];

    $simpan = "INSERT INTO bukus (judul_buku, penulis, kategori_id) VALUES ('$judul', '$penulis', '$kategori')";

    $proses = mysqli_query($koneksi, $simpan);

    header("location:index.php");
?>
