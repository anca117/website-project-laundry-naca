<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'user') {
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$services_query = mysqli_query($koneksi, "SELECT * FROM services");

// Siapkan array untuk menyimpan harga layanan untuk JavaScript
$service_prices = [];
$services_data = [];
while($row = mysqli_fetch_assoc($services_query)){
    $services_data[] = $row;
    $service_prices[$row['id']] = $row['harga_per_kg'];
}

// ... (logika POST tetap sama) ...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_id = sanitize_input($koneksi, $_POST['service_id']);
    $berat = sanitize_input($koneksi, $_POST['berat']);
    $catatan = sanitize_input($koneksi, $_POST['catatan']);
    // ambil tanggal pengambilan yang dikirim form
    $tanggal_pengambilan = sanitize_input($koneksi, $_POST['tanggal_pengambilan']);
    $tanggal_masuk = date('Y-m-d');
    $total_harga = $berat * $service_prices[$service_id]; // Kalkulasi harga

    // tambahkan kolom tanggal_pengambilan di list kolom dan di list values
    $query = "INSERT INTO orders (user_id, service_id, tanggal_masuk, tanggal_pengambilan, berat_kg, total_harga, catatan)
              VALUES ('$user_id', '$service_id', '$tanggal_masuk', '$tanggal_pengambilan', '$berat', '$total_harga', '$catatan')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pesanan berhasil dibuat!'); window.location.href='index.php';</script>";
        exit;
    } else {
        // tampilkan error mysqli agar troubleshooting lebih mudah
        $error = "Gagal membuat pesanan! " . mysqli_error($koneksi);
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Pesanan - Dipo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-washing-machine"></i> Dipo Laundry</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="pesan.php">Buat Pesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="../page/contact.html">Kontak Kami</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="../logout.php" class="btn btn-primary mb-3">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Formulir Pemesanan Laundry</h4>
                    </div>
                    <div class="card-body">
                        <form action="pesan.php" method="POST">
                            <div class="mb-3">
                                <label for="service_id" class="form-label">Jenis Layanan</label>
                                <select name="service_id" id="service_id" class="form-select" required>
                                    <option value="">-- Pilih Layanan --</option>
                                    <?php foreach($services_data as $s): ?>
                                    <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['nama_layanan']) ?> (Rp <?= number_format($s['harga_per_kg'], 0, ',', '.') ?>/kg)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="berat" class="form-label">Berat (Kg)</label>
                                <input type="number" step="0.1" name="berat" id="berat" class="form-control" placeholder="Contoh: 3.5" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pengambilan" class="form-label">Tanggal Pengambilan</label>
                                <input type="date" name="tanggal_pengambilan" class="form-control" id="pickupDate" required>
                            </div>
                            <div class="mb-3">
                                <h4 id="estimasi-harga" class="text-success fw-bold">Estimasi Total: Rp 0</h4>
                            </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label">Catatan (Opsional)</label>
                                <textarea name="catatan" id="catatan" rows="3" class="form-control" placeholder="Contoh: Pakaian putih dipisah"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Buat Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script id="service-prices-data" type="application/json">
        <?= json_encode($service_prices); ?>
    </script>
    
    <script src="../assets/js/script.js"></script>
</body>
</html>