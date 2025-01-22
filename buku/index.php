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
        Buku
    </h1>
    <a href="form.php">
        <button type="submit">Tambah Data</button>
    </a>
    <hr>
    <table cellpadding="5" cellspacing="0" border="1" width="700px">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
        <?php
            include("../koneksi.php");

            $tampil = "SELECT * FROM bukus INNER JOIN kategoris ON bukus.kategori_id=kategoris.id_kategori";

            $proses = mysqli_query($koneksi, $tampil);

            $nomor = 1;

            foreach($proses as $data){
        ?>
        <tr>
            <th>
                <?= $nomor++ ?>
            </th>
            <td>
                <?= $data['judul_buku'] ?>
            </td>
            <td>
                <?= $data['penulis'] ?>
            </td>
            <td>
                <?= $data['nama_kategori'] ?>
            </td>
            <th>
                <a href="edit.php?id=<?= $data['id_buku'] ?>">
                    <button type="submit">Edit</button>
                </a>
                <a href='hapus.php?hapus=<?= $data['id_buku'] ?>' onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <button type="submit">Hapus</button>
                </a>
            </th>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>