<?php
require_once 'supplier.php';

$supplier = new Supplier();
$daftarSupplier = $supplier->getAllSupplier();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
</head>
<body>
    <h1>Data Supplier</h1>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="supplierCreate.php">Tambah Data Supplier</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>ID Supplier</th>
            <th>Nama Supplier</th>
            <th>Alamat Supplier</th>
            <th>Telp Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarSupplier as $supplier) { ?>
        <tr>
            <td><?php echo $supplier['IdSupplier']; ?></td>
            <td><?php echo $supplier['NamaSupplier']; ?></td>
            <td><?php echo $supplier['AlamatSupplier']; ?></td>
            <td><?php echo $supplier['TelpSupplier']; ?></td>
            <td>
                <a href="supplierUpdate.php?id_supplier=<?php echo $supplier['IdSupplier']; ?>">Edit</a>
                <a href="supplierDelete.php?id_supplier=<?php echo $supplier['IdSupplier']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
