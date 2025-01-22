<?php
    include("../koneksi.php");

    $id = $_GET['id'];

    $ambil = "SELECT * FROM kategoris WHERE id_kategori='$id'";

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
        Edit Kategori
    </h1>
    <hr>
    <form action="update.php" method="post">
        <table>
            <tr>
                <input type="hidden" name="id" value="<?= $data['id_kategori'] ?>">
                <td>
                    Nama kategori
                </td>
                <td>
                    <input type="text" name="kategori" id="" value="<?= $data['nama_kategori'] ?>">
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