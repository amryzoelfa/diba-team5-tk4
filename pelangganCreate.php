<?php
require_once 'pelanggan.php';

if (isset($_POST['submit_tambah'])) {
    $idPelanggan =$_POST['id_pelanggan'];
    $namaPelanggan = $_POST['nama_pelanggan'];
    $alamatPelanggan = $_POST['alamat_pelanggan'];
    $telpPelanggan = $_POST['telp_pelanggan'];

    $pelanggan = new Pelanggan();
    $result = $pelanggan->addPelanggan($idPelanggan, $namaPelanggan, $alamatPelanggan, $telpPelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Pelanggan berhasil ditambahkan!'); window.location='pelangganIndex.php';</script>";
        // exit;
    } else {
        echo "<p>Gagal menambahkan data Pelanggan.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form method="post" action="pelangganCreate.php">
        <label>ID Pelanggan :</label>
        <input type="text" name="id_pelanggan" required><br>

        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required><br>

        <label>Alamat Pelanggan:</label>
        <input type="text" name="alamat_pelanggan"><br>

        <label>Telp Pelanggan :</label>
        <input type="text" name="telp_pelanggan"><br>

        <input type="submit" name="submit_tambah" value="Tambah">
    </form>
</body>
</html>
