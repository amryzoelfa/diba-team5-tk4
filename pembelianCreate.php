<?php
require_once 'pembelian.php';

if (isset($_POST['submit_tambah'])) {
    $JumlahPembelian = $_POST['jumlah_pembelian'];
    $HargaBeli = $_POST['harga_beli'];
    $pengguna = $_POST['pengguna'];
    $barang = $_POST['barang'];
    $supplier = $_POST['supplier'];

    $pembelian = new Pembelian();
    $result = $pembelian->addPembelian($JumlahPembelian, $HargaBeli, $pengguna, $barang, $supplier);

    if ($result) {
        echo "<script type='text/javascript'>alert('Data Pembelian berhasil ditambahkan!'); window.location='pembelianIndex.php';</script>";
        // exit;
    } else {
        echo "<p>Gagal menambahkan data Pembelian.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pembelian</title>
</head>
<body>
    <h1>Tambah Data Pembelian</h1>
    <form method="post" action="pembelianCreate.php">
        <label>Jumlah Pembelian :</label>
        <input type="text" name="jumlah_pembelian" required><br>

        <label>Harga Beli :</label>
        <input type="number" name="harga_beli" required><br>

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

        <label>Supplier :</label>
        <select name="supplier" required>
        <?php
            $query = mysqli_query($conn, "SELECT * FROM supplier");
            while ($data = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['IdSupplier'];?>"><?php echo $data['NamaSupplier'];?></option>
            <?php } ?>
        </select><br>

        <input type="submit" name="submit_tambah" value="Tambah">
    </form>
</body>
</html>
