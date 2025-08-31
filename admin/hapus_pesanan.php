<?php
require '../config.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

if (isset($_GET['id'])) {
    $order_id = sanitize_input($koneksi, $_GET['id']);
    $query = "DELETE FROM orders WHERE id = '$order_id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus pesanan.";
    }
} else {
    header("Location: index.php");
}
exit;
?>