<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM member_016 WHERE email='$email' AND password='$password' AND aktive='1'");
    $cek = mysqli_num_rows($query);

    if($cek > 0) {
        $data = mysqli_fetch_assoc($query);
        // Menyimpan Session sesuai instruksi soal
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['nama'] = $data['nama'];

        header("location: index.php");
    } else {
        echo "<script>alert('Login gagal! Periksa email/password.'); window.location='login.php';</script>";
    }
}
?>