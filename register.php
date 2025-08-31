<?php
require 'config.php';

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = sanitize_input($koneksi, $_POST['nama_lengkap']);
    $email = sanitize_input($koneksi, $_POST['email']);
    $password = sanitize_input($koneksi, $_POST['password']);
    $confirm_password = sanitize_input($koneksi, $_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $error = "Konfirmasi password tidak cocok!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $query_check = "SELECT id FROM users WHERE email = '$email'";
        $result_check = mysqli_query($koneksi, $query_check);

        if (mysqli_num_rows($result_check) > 0) {
            $error = "Email sudah terdaftar!";
        } else {
            $query = "INSERT INTO users (nama_lengkap, email, password, role) VALUES ('$nama_lengkap', '$email', '$hashed_password', 'user')";
            if (mysqli_query($koneksi, $query)) {
                $success = "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
            } else {
                $error = "Registrasi gagal! Silakan coba lagi.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - Dipo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..assets/css/style.css">
</head>
<body>
    <img src="assets/img/banner-register.jpg" alt="Banner Registrasi" class="img-fluid w-100" style="max-height: 250px; object-fit: cover;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4">Buat Akun Baru</h3>
                        <?php if(!empty($error)): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
                        <?php if(!empty($success)): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>
                        <form action="register.php" method="POST">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Masukkan kembali password Anda" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>
                        <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="..assets/js/script.js"></script> </body>
</html>