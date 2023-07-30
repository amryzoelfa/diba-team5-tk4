<?php
require_once 'barang.php';

// Query SQL untuk menghitung rugi laba dan simpan hasilnya dalam $daftarLabarugi
$query = "SELECT
            barang.IdBarang,
            barang.NamaBarang,
            COALESCE(SUM(penjualan.JumlahPenjualan), 0) AS TotalPenjualan,
            COALESCE(SUM(penjualan.HargaJual * penjualan.JumlahPenjualan), 0) AS TotalPendapatan,
            COALESCE(SUM(pembelian.HargaBeli * pembelian.JumlahPembelian), 0) AS TotalBiayaBeli,
            COALESCE(SUM(penjualan.HargaJual * penjualan.JumlahPenjualan), 0) - COALESCE(SUM(pembelian.HargaBeli * pembelian.JumlahPembelian), 0) AS LabaRugi
          FROM
            barang
          LEFT JOIN
            penjualan ON barang.IdBarang = penjualan.IdBarang
          LEFT JOIN
            pembelian ON barang.IdBarang = pembelian.IdBarang
          GROUP BY
            barang.IdBarang";

$result = $conn->query($query);

// Buat array untuk menyimpan hasil query
$daftarLabarugi = array();

// Ambil hasil query dan masukkan ke dalam array $daftarLabarugi
while ($row = mysqli_fetch_assoc($result)) {
    $daftarLabarugi[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
</head>
<body>
    <h1>DASHBOARD LAPAKPEDIA</h1>
    <ul>
        <li><a href="barangIndex.php">Data Barang</a></li>
        <li><a href="pembelianIndex.php">Data Pembelian</a></li>
        <li><a href="penjualanIndex.php">Data Penjualan</a></li>
        <li><a href="pelangganIndex.php">Data Pelanggan</a></li>
        <li><a href="supplierIndex.php">Data Supplier</a></li>
    </ul>
   
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Laporan Laba Rugi</h3>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Total Penjualan</th>
            <th>Total Pendapatan</th>
            <th>Total Biaya Beli</th>
            <th>Laba Rugi</th>
        </tr>
        <?php foreach ($daftarLabarugi as $labarugi) { ?>
        <tr>
            <td><?php echo $labarugi['NamaBarang'];?></td>
            <td><?php echo $labarugi['TotalPenjualan'];?></td>
            <td><?php echo number_format($labarugi['TotalPendapatan'],0,",",".");?></td>
            <td><?php echo number_format($labarugi['TotalBiayaBeli'],0,",",".");?></td>
            <td><?php echo number_format($labarugi['LabaRugi'],0,",",".");?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
