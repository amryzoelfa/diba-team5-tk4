<?php
require_once 'barang.php';

$barang = new Barang();
$daftarBarang = $barang->getAllBarang();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="barangCreate.php">Tambah Data Barang</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Satuan</th>
            <th>ID Pengguna</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarBarang as $barang) { ?>
        <tr>
            <td><?php echo $barang['IdBarang']; ?></td>
            <td><?php echo $barang['NamaBarang']; ?></td>
            <td><?php echo $barang['Keterangan']; ?></td>
            <td><?php echo $barang['Satuan']; ?></td>
            <td><?php echo $barang['IdPengguna']; ?></td>
            <td>
                <a href="barangEdit.php?id_barang=<?php echo $barang['IdBarang']; ?>">Edit</a>
                <a href="barangDelete.php?id_barang=<?php echo $barang['IdBarang']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
