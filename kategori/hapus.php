<?php
    include("../koneksi.php");

    $id = $_GET['hapus'];

    $hapus = "DELETE FROM kategoris WHERE id_kategori='$id'";

    $proses = mysqli_query($koneksi, $hapus);

    header("location:index.php");
?>