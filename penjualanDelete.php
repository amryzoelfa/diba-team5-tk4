<?php
require_once 'penjualan.php';

if (isset($_GET['id_penjualan'])) {
    $idPenjualan = $_GET['id_penjualan'];
    $penjualan = new Penjualan();
    $result = $penjualan->deletePenjualan($idPenjualan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data penjualan berhasil dihapus!'); window.location='penjualanIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal menghapus data penjualan.</p>";
    }
}
?>
