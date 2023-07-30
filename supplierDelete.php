<?php
require_once 'supplier.php';

if (isset($_GET['id_supplier'])) {
    $idSupplier = $_GET['id_supplier'];
    $supplier = new Supplier();
    $result = $supplier->deleteSupplier($idSupplier);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data supplier berhasil dihapus!'); window.location='supplierIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal menghapus data supplier.</p>";
    }
}
?>
