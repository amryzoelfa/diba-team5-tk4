<?php
require_once 'pelanggan.php';

if (isset($_GET['id_pelanggan'])) {
    $idPelanggan = $_GET['id_pelanggan'];
    $pelanggan = new Pelanggan();
    $dataPelanggan = $pelanggan->getPelangganById($idPelanggan);

    if (!$dataPelanggan) {
        die("Data Pelanggan tidak ditemukan.");
    }
} else {
    // die("ID Pelanggan tidak ditemukan.");
    echo $dataPelanggan['IdPelanggan'];
}

if (isset($_POST['submit_ubah'])) {
    $idPelanggan =$_POST['id_pelanggan'];
    $namaPelanggan = $_POST['nama_pelanggan'];
    $alamatPelanggan = $_POST['alamat_pelanggan'];
    $telpPelanggan = $_POST['telp_pelanggan'];

    $pelanggan = new Pelanggan();
    $result = $pelanggan->addPelanggan($idPelanggan, $namaPelanggan, $alamatPelanggan, $telpPelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data barang berhasil diubah!'); window.location='barangIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal mengubah data barang.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Barang</title>
</head>
<body>
    <h1>Ubah Barang</h1>
    <form method="post" action="edit_barang.php">
        <input type="hidden" name="id_barang" value="<?php echo $dataBarang['IdBarang']; ?>">

        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?php echo $dataBarang['NamaBarang']; ?>" required><br>

        <label>Keterangan:</label>
        <input type="text" name="keterangan" value="<?php echo $dataBarang['Keterangan']; ?>"><br>

        <label>Satuan:</label>
        <input type="text" name="satuan" value="<?php echo $dataBarang['Satuan']; ?>"><br>

        <label>ID Pengguna:</label>
        <input type="text" name="id_pengguna" value="<?php echo $dataBarang['IdPengguna']; ?>" required><br>

        <input type="submit" name="submit_ubah" value="Ubah">
    </form>
</body>
</html>
