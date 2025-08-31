<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'user') {
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "SELECT orders.*, services.nama_layanan, services.harga_per_kg FROM orders 
          JOIN services ON orders.service_id = services.id
          WHERE orders.user_id = $user_id ORDER BY orders.created_at DESC";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pelanggan - Dipo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Minimal tinggi body adalah 100% tinggi viewport/layar */
    }
    .main-content {
        flex-grow: 1; /* Membuat area konten ini tumbuh mengisi sisa ruang */
    }
    .font-pacifico {
            font-family: 'Pacifico', cursive;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-washing-machine"></i> Dipo Laundry</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="pesan.php">Buat Pesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="../page/contact.html">Kontak Kami</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="../logout.php">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4 main-content">
        <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['nama_lengkap']); ?>!</h2>
        <p>Di sini Anda dapat melihat riwayat dan status pesanan laundry Anda.</p>
        <a href="pesan.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Buat Pesanan Baru</a>
        
        <h3 class="mt-4">Riwayat Pesanan Anda</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Tanggal Pesan</th>
                        <th>Layanan</th>
                        <th>Berat (Kg)</th>
                        <th>Tanggal Pengambilan</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= date('d M Y', strtotime($row['tanggal_masuk'])) ?></td>
                            <td><?= htmlspecialchars($row['nama_layanan']) ?></td>
                            <td><?= $row['berat_kg'] ?></td>
                            <td>
                                <?php 
                                    if (!empty($row['tanggal_pengambilan'])) {
                                        echo date('d M Y', strtotime($row['tanggal_pengambilan']));
                                    } else {
                                        echo '-';
                                    }
                                ?>
                            </td>
                            <td>Rp <?= number_format($row['total_harga'], 0, ',', '.') ?></td>
                            <td>
                                <?php
                                $status = $row['status'];
                                $badge_class = 'bg-secondary';
                                if ($status == 'Proses') $badge_class = 'bg-warning';
                                if ($status == 'Selesai') $badge_class = 'bg-success';
                                if ($status == 'Diambil') $badge_class = 'bg-info';
                                ?>
                                <span class="badge <?= $badge_class ?>"><?= $status ?></span>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="5" class="text-center">Anda belum memiliki riwayat pesanan.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="bg-light text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-0">
                    &copy; <?php echo date("Y"); ?> <span class="font-pacifico">Dipo Laundry</span>. All Rights Reserved.
                </p>
</footer>
</body>
</html>