<?php
require_once 'penjualan.php';

$penjualan = new Penjualan();
$daftarPenjualan = $penjualan->getAllPenjualan();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
</head>
<body>
    <h1>Data Penjualan</h1>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="penjualanCreate.php">Tambah Data Penjualan</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>ID Penjualan</th>
            <th>Jumlah Penjualan</th>
            <th>Harga Beli</th>
            <th>ID Barang</th>
            <th>ID Pengguna</th>
            <th>ID Pelanggan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarPenjualan as $penjualan) { ?>
        <tr>
            <td><?php echo $penjualan['IdPenjualan']; ?></td>
            <td><?php echo $penjualan['JumlahPenjualan']; ?></td>
            <td><?php echo $penjualan['HargaJual']; ?></td>
            <td><?php echo $penjualan['IdBarang']; ?></td>
            <td><?php echo $penjualan['IdPengguna']; ?></td>
            <td><?php echo $penjualan['IdPelanggan']; ?></td>
            <td>
                <a href="penjualanUpdate.php?id_penjualan=<?php echo $penjualan['IdPenjualan']; ?>">Edit</a>
                <a href="penjualanDelete.php?id_penjualan=<?php echo $penjualan['IdPenjualan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
