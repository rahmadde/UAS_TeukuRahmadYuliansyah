<?php
    include("../koneksi.php");

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];

    $sunting = "UPDATE bukus SET judul_buku='$judul', penulis='$penulis', kategori_id='$kategori' WHERE id_buku='$id'";

    $proses = mysqli_query($koneksi, $sunting);

    header("location:index.php");
?>