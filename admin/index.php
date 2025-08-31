<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$query_orders = "SELECT orders.*, users.nama_lengkap, services.nama_layanan 
                 FROM orders
                 JOIN users ON orders.user_id = users.id
                 JOIN services ON orders.service_id = services.id
                 ORDER BY orders.created_at DESC";
$orders = mysqli_query($koneksi, $query_orders);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Dipo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i> Admin Panel - Dipo Laundry</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Kelola Pesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="laporan_transaksi.php">Laporan Transaksi</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="../logout.php">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['nama_lengkap']); ?>!</h2>
        <h3 class="mt-4">Kelola Semua Pesanan</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>Layanan</th>
                        <th>Berat</th>
                        <th>Total</th>
                        <th>Tgl Masuk</th>
                        <th>Tgl Pengambilan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($order = mysqli_fetch_assoc($orders)) : ?>
                    <tr>
                        <td><?= $order['id']; ?></td>
                        <td><?= htmlspecialchars($order['nama_lengkap']); ?></td>
                        <td><?= htmlspecialchars($order['nama_layanan']); ?></td>
                        <td><?= $order['berat_kg']; ?> kg</td>
                        <td>Rp <?= number_format($order['total_harga'], 0, ',', '.'); ?></td>
                        <td><?= date('d-m-Y', strtotime($order['tanggal_masuk'])); ?></td>
                        <td><?= date('d-m-Y', strtotime($order['tanggal_pengambilan'])); ?></td>
                        <td>
                           <form action="update_status.php" method="POST" class="d-flex">
                                <input type="hidden" name="order_id" value="<?= $order['id']; ?>">
                                <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                    <option value="Proses" <?= $order['status'] == 'Proses' ? 'selected' : ''; ?>>Proses</option>
                                    <option value="Selesai" <?= $order['status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                                    <option value="Diambil" <?= $order['status'] == 'Diambil' ? 'selected' : ''; ?>>Diambil</option>
                                </select>
                           </form>
                        </td>
                        <td>
                            <a href="hapus_pesanan.php?id=<?= $order['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus pesanan ini secara permanen?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>