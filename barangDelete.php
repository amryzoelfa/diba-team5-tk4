<?php
require_once 'barang.php';

if (isset($_GET['id_barang'])) {
    $idBarang = $_GET['id_barang'];
    $barang = new Barang();
    $result = $barang->deleteBarang($idBarang);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data barang berhasil dihapus!'); window.location='barangIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal menghapus data barang.</p>";
    }
}
?>
