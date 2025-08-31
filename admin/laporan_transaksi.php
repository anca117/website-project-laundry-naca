<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$query_laporan = "SELECT orders.*, users.nama_lengkap, services.nama_layanan 
                  FROM orders
                  JOIN users ON orders.user_id = users.id
                  JOIN services ON orders.service_id = services.id
                  ORDER BY orders.tanggal_masuk DESC";
$laporan = mysqli_query($koneksi, $query_laporan);

$total_pendapatan = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi - Dipo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i> Admin Panel - Dipo Laundry</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Kelola Pesanan</a></li>
                <li class="nav-item"><a class="nav-link active" href="laporan_transaksi.php">Laporan Transaksi</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="../logout.php">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        <h2>Laporan Rekap Transaksi</h2>
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Layanan</th>
                        <th>Berat (Kg)</th>
                        <th>Status</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($laporan)) : ?>
                    <?php $total_pendapatan += $row['total_harga']; ?>
                    <tr>
                        <td><?= date('d-m-Y', strtotime($row['tanggal_masuk'])); ?></td>
                        <td><?= htmlspecialchars($row['nama_lengkap']); ?></td>
                        <td><?= htmlspecialchars($row['nama_layanan']); ?></td>
                        <td><?= $row['berat_kg']; ?> kg</td>
                        <td><?= $row['status']; ?></td>
                        <td class="text-end">Rp <?= number_format($row['total_harga'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr class="table-primary fw-bold">
                        <td colspan="5" class="text-end">Total Pendapatan</td>
                        <td class="text-end">Rp <?= number_format($total_pendapatan, 0, ',', '.'); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>