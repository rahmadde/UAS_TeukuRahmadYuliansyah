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
        Form Kategori
    </h1>
    <hr>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>
                    Nama kategori
                </td>
                <td>
                    <input type="text" name="kategori" id="">
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