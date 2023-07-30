<?php
require_once 'pelanggan.php';

$pelanggan = new Pelanggan();
$daftarPelanggan = $pelanggan->getAllPelanggan();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
</head>
<body>
    <h1>Data Pelanggan</h1>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="pelangganCreate.php">Tambah Data Pelanggan</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Telp Pelanggan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarPelanggan as $pelanggan) { ?>
        <tr>
            <td><?php echo $pelanggan['IdPelanggan']; ?></td>
            <td><?php echo $pelanggan['NamaPelanggan']; ?></td>
            <td><?php echo $pelanggan['AlamatPelanggan']; ?></td>
            <td><?php echo $pelanggan['TelpPelanggan']; ?></td>
            <td>
                <a href="pelangganUpdate.php?id_pelanggan=<?php echo $pelanggan['IdPelanggan']; ?>">Edit</a>
                <a href="pelangganDelete.php?id_pelanggan=<?php echo $pelanggan['IdPelanggan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
