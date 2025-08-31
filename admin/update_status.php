<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = sanitize_input($koneksi, $_POST['order_id']);
    $status = sanitize_input($koneksi, $_POST['status']);

    $query = "UPDATE orders SET status = '$status' WHERE id = '$order_id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate status.";
    }
} else {
    header("Location: index.php");
}
exit;
?>