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
    $result = $pelanggan->updatePelanggan($idPelanggan, $namaPelanggan, $alamatPelanggan, $telpPelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data pelanggan berhasil diubah!'); window.location='pelangganIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal mengubah data pelanggan.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Pelanggan</title>
</head>
<body>
    <h1>Ubah Pelanggan</h1>
    <form method="post" action="pelangganUpdate.php">
        <input type="hidden" name="id_pelanggan" value="<?php echo $dataPelanggan['IdPelanggan']; ?>">

        <label>Nama Pelanggan :</label>
        <input type="text" name="nama_pelanggan" value="<?php echo $dataPelanggan['NamaPelanggan']; ?>" required><br>

        <label>Alamat Pelanggan :</label>
        <input type="text" name="alamat_pelanggan" value="<?php echo $dataPelanggan['AlamatPelanggan']; ?>"><br>

        <label>Telp Pelanggan :</label>
        <input type="text" name="telp_pelanggan" value="<?php echo $dataPelanggan['TelpPelanggan']; ?>"><br>

        <input type="submit" name="submit_ubah" value="Ubah">
    </form>
</body>
</html>
