<?php
// Tentukan email yang diperbolehkan untuk login
$allowed_email = "admin@gmail.com";

// Inisialisasi variabel error
$error = '';

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai email dari form
    $email = $_POST['email'];

    // Cek apakah email yang dimasukkan sesuai dengan yang diperbolehkan
    if ($email == $allowed_email) {
        // Email sesuai, redirect ke halaman selamat datang
        header("Location: homePage.html");
        exit;
    } else {
        // Email tidak sesuai, tampilkan pesan error
        $error = "Email tidak valid. Silakan coba lagi.";
    }
}
?>