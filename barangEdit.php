<?php
require_once 'barang.php';

if (isset($_GET['id_barang'])) {
    $idBarang = $_GET['id_barang'];
    $barang = new Barang();
    $dataBarang = $barang->getBarangById($idBarang);

    if (!$dataBarang) {
        die("Data barang tidak ditemukan.");
    }
} else {
    // die("ID barang tidak ditemukan.");
    echo $dataBarang['IdBarang'];
}

if (isset($_POST['submit_ubah'])) {
    $idBarang = $_POST['id_barang'];
    $namaBarang = $_POST['nama_barang'];
    $keterangan = $_POST['keterangan'];
    $satuan = $_POST['satuan'];
    $idPengguna = $_POST['id_pengguna'];

    $barang = new Barang();
    $result = $barang->updateBarang($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna);

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
    <form method="post" action="barangEdit.php">
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
