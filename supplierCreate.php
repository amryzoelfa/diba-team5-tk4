<?php
require_once 'supplier.php';

if (isset($_POST['submit_tambah'])) {
    $idSupplier =$_POST['id_supplier'];
    $namaSupplier = $_POST['nama_supplier'];
    $alamatSupplier = $_POST['alamat_supplier'];
    $telpSupplier = $_POST['telp_supplier'];

    $supplier = new Supplier();
    $result = $supplier->addSupplier($idSupplier, $namaSupplier, $alamatSupplier, $telpSupplier);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Supplier berhasil ditambahkan!'); window.location='supplierIndex.php';</script>";
        // exit;
    } else {
        echo "<p>Gagal menambahkan data Supplier.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
</head>
<body>
    <h1>Tambah Supplier</h1>
    <form method="post" action="supplierCreate.php">
        <label>ID Supplier :</label>
        <input type="text" name="id_supplier" required><br>

        <label>Nama Supplier :</label>
        <input type="text" name="nama_supplier" required><br>

        <label>Alamat Supplier :</label>
        <input type="text" name="alamat_supplier"><br>

        <label>Telp Supplier :</label>
        <input type="text" name="telp_supplier"><br>

        <input type="submit" name="submit_tambah" value="Tambah">
    </form>
</body>
</html>
