<?php
// Mulai session di awal
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Konfigurasi Database
define('DB_HOST', 'localhost:8111');
define('DB_USER', 'root'); // username default
define('DB_PASS', ''); // password defaultnya kosong
define('DB_NAME', 'db_dipo_laundry');

// Buat Koneksi
$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Cek Koneksi
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Fungsi Keamanan Input
function sanitize_input($koneksi, $data) {
    return mysqli_real_escape_string($koneksi, htmlspecialchars(trim($data)));
}
?>