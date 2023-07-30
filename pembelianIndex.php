<?php
require_once 'pembelian.php';

$pembelian = new Pembelian();
$daftarPembelian = $pembelian->getAllPembelian();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembelian</title>
</head>
<body>
    <h1>Data Pembelian</h1>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="pembelianCreate.php">Tambah Data Pembelian</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>ID Pembelian</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Beli</th>
            <th>ID Barang</th>
            <th>ID Pengguna</th>
            <th>ID Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarPembelian as $pembelian) { ?>
        <tr>
            <td><?php echo $pembelian['IdPembelian']; ?></td>
            <td><?php echo $pembelian['JumlahPembelian']; ?></td>
            <td><?php echo $pembelian['HargaBeli']; ?></td>
            <td><?php echo $pembelian['IdBarang']; ?></td>
            <td><?php echo $pembelian['IdPengguna']; ?></td>
            <td><?php echo $pembelian['IdSupplier']; ?></td>
            <td>
                <a href="pembelianUpdate.php?id_pembelian=<?php echo $pembelian['IdPembelian']; ?>">Edit</a>
                <a href="pembelianDelete.php?id_pembelian=<?php echo $pembelian['IdPembelian']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
