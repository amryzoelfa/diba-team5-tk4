<?php
require_once 'barang.php';

if (isset($_POST['submit_tambah'])) {
    $namaBarang = $_POST['nama_barang'];
    $keterangan = $_POST['keterangan'];
    $satuan = $_POST['satuan'];
    $idPengguna = $_POST['id_pengguna'];

    $barang = new Barang();
    $result = $barang->addBarang($namaBarang, $keterangan, $satuan, $idPengguna);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data barang berhasil ditambahkan!'); window.location='barangIndex.php';</script>";
        // exit;
    } else {
        echo "<p>Gagal menambahkan data barang.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="post" action="barangCreate.php">
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label>Keterangan:</label>
        <input type="text" name="keterangan"><br>

        <label>Satuan:</label>
        <input type="text" name="satuan"><br>

        <label>ID Pengguna:</label>
        <input type="text" name="id_pengguna" required><br>

        <input type="submit" name="submit_tambah" value="Tambah">
    </form>
</body>
</html>
