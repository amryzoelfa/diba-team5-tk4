<?php
require_once 'supplier.php';

if (isset($_GET['id_supplier'])) {
    $idSupplier = $_GET['id_supplier'];
    $supplier = new Supplier();
    $dataSupplier = $supplier->getSupplierById($idSupplier);

    if (!$dataSupplier) {
        die("Data Supplier tidak ditemukan.");
    }
} else {
    // die("ID Supplier tidak ditemukan.");
    echo $dataSupplier['IdSupplier'];
}

if (isset($_POST['submit_ubah'])) {
    $idSupplier =$_POST['id_supplier'];
    $namaSupplier = $_POST['nama_supplier'];
    $alamatSupplier = $_POST['alamat_supplier'];
    $telpSupplier = $_POST['telp_supplier'];

    $supplier = new Supplier();
    $result = $supplier->updateSupplier($idSupplier, $namaSupplier, $alamatSupplier, $telpSupplier);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Supplier berhasil diubah!'); window.location='supplierIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal mengubah data supplier.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Supplier</title>
</head>
<body>
    <h1>Ubah Supplier</h1>
    <form method="post" action="supplierUpdate.php">
        <input type="hidden" name="id_supplier" value="<?php echo $dataSupplier['IdSupplier']; ?>">

        <label>Nama Supplier :</label>
        <input type="text" name="nama_supplier" value="<?php echo $dataSupplier['NamaSupplier']; ?>" required><br>

        <label>Alamat Supplier :</label>
        <input type="text" name="alamat_supplier" value="<?php echo $dataSupplier['AlamatSupplier']; ?>"><br>

        <label>Telp Supplier :</label>
        <input type="text" name="telp_supplier" value="<?php echo $dataSupplier['TelpSupplier']; ?>"><br>

        <input type="submit" name="submit_ubah" value="Ubah">
    </form>
</body>
</html>
