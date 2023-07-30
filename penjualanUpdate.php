<?php
require_once 'penjualan.php';

if (isset($_GET['id_penjualan'])) {
    $idPenjualan = $_GET['id_penjualan'];
    $penjualan = new Penjualan();
    $dataPenjualan = $penjualan->getPenjualanById($idPenjualan);

    if (!$dataPenjualan) {
        die("Data Penjualan tidak ditemukan.");
    }
} else {
    // die("ID Penjualan tidak ditemukan.");
    echo $dataPenjualan['IdPenjualan'];
}

if (isset($_POST['submit_edit'])) {
    $idPenjualan = $_POST['id_penjualan'];
    $JumlahPenjualan = $_POST['jumlah_penjualan'];
    $HargaJual = $_POST['harga_jual'];
    $barang = $_POST['barang'];
    $pengguna = $_POST['pengguna'];
    $pelanggan = $_POST['pelanggan'];

    $penjualan = new Penjualan();
    $result = $penjualan->updatePenjualan($idPenjualan, $JumlahPenjualan, $HargaJual, $barang, $pengguna, $pelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data penjualan berhasil diubah!'); window.location='penjualanIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal mengubah data penjualan.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Penjualan</title>
</head>
<body>
<h1>Edit Data Penjualan</h1>
<form method="post" action="penjualanUpdate.php">
    <input type="hidden" name="id_penjualan" value="<?php echo $dataPenjualan['IdPenjualan']; ?>">
    <label>Jumlah Penjualan :</label>
    <input type="text" name="jumlah_penjualan" value="<?php echo $dataPenjualan['JumlahPenjualan']; ?>" required><br>

    <label>Harga Jual :</label>
    <input type="number" name="harga_jual" value="<?php echo $dataPenjualan['HargaJual']; ?>" required><br>

    <label>Pengguna :</label>
    <select name="pengguna" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM pengguna");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdPengguna'];?>" <?php if ($row['IdPengguna'] == $dataPenjualan['IdPengguna']) echo "selected"; ?>><?php echo $row['NamaPengguna'];?></option>
        <?php } ?>
    </select><br>

    <label>Barang :</label>
    <select name="barang" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM barang");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdBarang'];?>" <?php if ($row['IdBarang'] == $dataPenjualan['IdBarang']) echo "selected"; ?>> <?php echo $row['NamaBarang'];?></option>
        <?php } ?>
    </select><br>

    <label>Pelanggan :</label>
    <select name="pelanggan" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM pelanggan");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdPelanggan'];?>" <?php if ($row['IdPelanggan'] == $dataPenjualan['IdPelanggan']) echo "selected"; ?>><?php echo $row['NamaPelanggan'];?></option>
        <?php } ?>
    </select><br>

    <input type="submit" name="submit_edit" value="Edit">
</form>

</body>
</html>
