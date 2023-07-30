<?php
require_once 'pembelian.php';

if (isset($_GET['id_pembelian'])) {
    $idPembelian = $_GET['id_pembelian'];
    $pembelian = new Pembelian();
    $result = $pembelian->deletePembelian($idPembelian);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Pembelian berhasil dihapus!'); window.location='pembelianIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal menghapus data pembelian.</p>";
    }
}
?>
