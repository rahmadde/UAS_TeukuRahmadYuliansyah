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
        Form Buku
    </h1>
    <hr>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>
                    Judul Buku
                </td>
                <td>
                    <input type="text" name="judul" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Penulis
                </td>
                <td>
                    <input type="text" name="penulis">
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