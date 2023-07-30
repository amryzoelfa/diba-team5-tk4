<?php
require_once 'penjualan.php';

if (isset($_POST['submit_tambah'])) {
    $JumlahPenjualan = $_POST['jumlah_penjualan'];
    $HargaJual = $_POST['harga_jual'];
    $pengguna = $_POST['pengguna'];
    $barang = $_POST['barang'];
    $pelanggan = $_POST['pelanggan'];

    $penjualan = new Penjualan();
    $result = $penjualan->addPenjualan($JumlahPenjualan, $HargaJual, $pengguna, $barang, $pelanggan);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Penjualan berhasil ditambahkan!'); window.location='penjualanIndex.php';</script>";
        // exit;
    } else {
        echo "<p>Gagal menambahkan data penjualan.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Penjualan</title>
</head>
<body>
    <h1>Tambah Data Penjualan</h1>
    <form method="post" action="penjualanCreate.php">
        <label>Jumlah Penjualan :</label>
        <input type="text" name="jumlah_penjualan" required><br>

        <label>Harga Jual :</label>
        <input type="number" name="harga_jual" required><br>

        <label>Pengguna :</label>
        <select name="pengguna" required>
        <?php
            $query = mysqli_query($conn, "SELECT * FROM pengguna");
            while ($data = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['IdPengguna'];?>"><?php echo $data['NamaPengguna'];?></option>
            <?php } ?>
        </select><br>

        <label>Barang :</label>
        <select name="barang" required>
        <?php
            $query = mysqli_query($conn, "SELECT * FROM barang");
            while ($data = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['IdBarang'];?>"> <?php echo $data['NamaBarang'];?></option>
            <?php } ?>
        </select><br>

        <label>Pelanggan :</label>
        <select name="pelanggan" required>
        <?php
            $query = mysqli_query($conn, "SELECT * FROM pelanggan");
            while ($data = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['IdPelanggan'];?>"><?php echo $data['NamaPelanggan'];?></option>
            <?php } ?>
        </select><br>

        <input type="submit" name="submit_tambah" value="Tambah">
    </form>
</body>
</html>
