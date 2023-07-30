<?php
require_once 'pelanggan.php';

if (isset($_GET['id_pelanggan'])) {
    $idPelanggan = $_GET['id_pelanggan'];
    $pelanggan = new Pelanggan();
    $result = $pelanggan->deletePelanggan($idPelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data pelanggan berhasil dihapus!'); window.location='pelangganIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal menghapus data pelanggan.</p>";
    }
}
?>
