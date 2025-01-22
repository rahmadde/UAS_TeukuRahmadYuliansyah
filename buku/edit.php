<?php
    include("../koneksi.php");

    $id = $_GET['id'];

    $ambil = "SELECT * FROM bukus WHERE id_buku='$id'";

    $edit = mysqli_query($koneksi, $ambil);

    $data = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku Perpustakaan</title>
</head>
<body>
    <?php
        include("../navbar.php");
    ?>
    <h1>
        Edit Buku
    </h1>
    <hr>
    <form action="update.php" method="post">
        <table>
            <input type="hidden" name="id" value="<?= $data['id_buku'] ?>">
            <tr>
                <td>
                    Judul Buku
                </td>
                <td>
                    <input type="text" name="judul" id="" value="<?= $data['judul_buku'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Penulis
                </td>
                <td>
                    <input type="text" name="penulis" id="" value="<?= $data['penulis'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kategori
                </td>
                <td>
                    <select name="kategori" id="">
                        <?php
                            include('../koneksi.php');
                            $sql_kategori = "SELECT * FROM kategoris";
                            $qry_kategori = mysqli_query($koneksi,$sql_kategori);
                            foreach($qry_kategori as $data_kategori){
                        ?>
                        <option value="<?=$data_kategori['id_kategori']?>"><?=$data_kategori['nama_kategori']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>