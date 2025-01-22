<?php
    include("../koneksi.php");

    $id = $_GET['hapus'];

    $hapus = "DELETE FROM bukus WHERE id_buku='$id'";

    $proses = mysqli_query($koneksi, $hapus);

    header("location:index.php");
?>