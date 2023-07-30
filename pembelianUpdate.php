<?php
require_once 'pembelian.php';

if (isset($_GET['id_pembelian'])) {
    $idPembelian = $_GET['id_pembelian'];
    $pembelian = new Pembelian();
    $dataPembelian = $pembelian->getPembelianById($idPembelian);

    if (!$dataPembelian) {
        die("Data Pembelian tidak ditemukan.");
    }
} else {
    // die("ID Pembelian tidak ditemukan.");
    echo $dataPembelian['IdPembelian'];
}

if (isset($_POST['submit_edit'])) {
    $idPembelian = $_POST['id_pembelian'];
    $JumlahPembelian = $_POST['jumlah_pembelian'];
    $HargaBeli = $_POST['harga_beli'];
    $barang = $_POST['barang'];
    $pengguna = $_POST['pengguna'];
    $supplier = $_POST['supplier'];

    $pembelian = new Pembelian();
    $result = $pembelian->updatePembelian($idPembelian, $JumlahPembelian, $HargaBeli, $barang, $pengguna, $supplier);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Pembelian berhasil diubah!'); window.location='pembelianIndex.php';</script>";
        exit;
    } else {
        echo "<p>Gagal mengubah data Pembelian.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Pembelian</title>
</head>
<body>
<h1>Edit Data Pembelian</h1>
<form method="post" action="pembelianUpdate.php">
    <input type="hidden" name="id_pembelian" value="<?php echo $dataPembelian['IdPembelian']; ?>">
    <label>Jumlah Pembelian :</label>
    <input type="text" name="jumlah_pembelian" value="<?php echo $dataPembelian['JumlahPembelian']; ?>" required><br>

    <label>Harga Beli :</label>
    <input type="number" name="harga_beli" value="<?php echo $dataPembelian['HargaBeli']; ?>" required><br>

    <label>Pengguna :</label>
    <select name="pengguna" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM pengguna");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdPengguna'];?>" <?php if ($row['IdPengguna'] == $dataPembelian['IdPengguna']) echo "selected"; ?>><?php echo $row['NamaPengguna'];?></option>
        <?php } ?>
    </select><br>

    <label>Barang :</label>
    <select name="barang" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM barang");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdBarang'];?>" <?php if ($row['IdBarang'] == $dataPembelian['IdBarang']) echo "selected"; ?>> <?php echo $row['NamaBarang'];?></option>
        <?php } ?>
    </select><br>

    <label>Supplier :</label>
    <select name="supplier" required>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM supplier");
        while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?php echo $row['IdSupplier'];?>" <?php if ($row['IdSupplier'] == $dataPembelian['IdSupplier']) echo "selected"; ?>><?php echo $row['NamaSupplier'];?></option>
        <?php } ?>
    </select><br>

    <input type="submit" name="submit_edit" value="Edit">
</form>

</body>
</html>
