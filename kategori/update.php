<?php
    include("../koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['kategori'];

    $sunting = "UPDATE kategoris SET nama_kategori='$nama' WHERE id_kategori='$id'";

    $proses = mysqli_query($koneksi, $sunting);

    header("location:index.php");
?>