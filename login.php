<?php
session_start();
$pesan = "";
if (isset($_POST['tombol'])) {
  #1. koneksi database
  include_once("koneksi.php");

  #2. mengambil value dari input
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);

  #3. tulisklajn query pengecekan apakaha data login tersedia di database?
  $sql_cek = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

  #4. menjalankan query diatas
  $qry_cek = mysqli_query($koneksi, $sql_cek);

  #5. pengecekan lanjutan
  $cek = mysqli_num_rows($qry_cek); 

  #6. buatkan IF jika login berhasil atau gagal
  if ($cek > 0) {
    //login berhasil
    #(OPTIONAL ) mengambil data lainnya dari tabel users berdasarkan data login
    $ambil = mysqli_fetch_array($qry_cek);
    $nama_login = $ambil['nama'];
    $id_login = $ambil['id'];

    #Pembuatan Session
    $_SESSION['sid'] = $id_login;
    $_SESSION['semail'] = $email;
    $_SESSION['snama'] = $nama_login;

    #Pembuatan Cookie
    if ($_POST['cek'] == "yes") {
      setcookie("cid", $id_login, time() + (60 * 60 * 24 * 90), "/");
      setcookie("cemail", $email, time() + (60 * 60 * 24 * 90), "/");
      setcookie("cnama", $nama_login, time() + (60 * 60 * 24 * 90), "/");
    }

    header("location:index.php");
  } else {
    //login gagal
    $pesan = '<div class="alert alert-danger" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i> Login Gagal, Coba lagi!!!
              </div>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td><label for="username">Email:</label></td>
                    <td><input type="text" id="" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="pass" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="tombol" class="btn btn-primary">Log In</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>