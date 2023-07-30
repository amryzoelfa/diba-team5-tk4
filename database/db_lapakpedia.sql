-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 30 Jul 2023 pada 06.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapakpedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(100) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Satuan` varchar(10) NOT NULL,
  `IdPengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`) VALUES
(1, 'Laptop Asus ROG Strix G15 G513QR-HF078T', 'Laptop gaming dengan spesifikasi tinggi', 'Unit', 3),
(2, 'Handphone Samsung Galaxy S21 Ultra 5G', 'Handphone flagship dengan kamera canggih', 'Unit', 5),
(3, 'Sepatu Nike Air Jordan 1 Retro High OG Hyper Royal', 'Sepatu basket dengan desain klasik', 'Pasang', 7),
(4, 'Tas Gucci Marmont Matelasse Mini Bag Black', 'Tas branded dengan bahan kulit asli', 'Unit', 9),
(5, 'Jam Tangan Rolex Submariner Date 41mm Steel and Gold Blue Dial Watch 126613LB-0002', 'Jam tangan mewah dengan material stainless steel dan emas', 'Unit', 3),
(6, 'Buku Harry Potter and The Philosophers Stone by J.K. Rowling', 'Buku fantasi terlaris di dunia', 'Unit', 5),
(7, 'Kemeja Flanel Uniqlo U Oversized Checked Flannel Shirt', 'Kemeja flanel berkualitas dengan motif kotak-kotak', 'Unit', 7),
(8, 'Celana Jeans Levis 501 Original Fit Jeans', 'Celana jeans original dengan model straight cut', 'Unit', 9),
(9, 'Sweater Adidas Originals Trefoil Hoodie Black', 'Sweater hoodie dengan logo Adidas terkenal', 'Unit', 3),
(10, 'Topi Snapback New Era LA Dodgers Black on Black 59FIFTY Fitted Cap', 'Topi snapback dengan logo tim baseball LA Dodgers', 'Unit', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakakses`
--

CREATE TABLE `hakakses` (
  `IdAkses` int(11) NOT NULL,
  `NamaAkses` varchar(20) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'Admin', 'Hak akses untuk mengelola seluruh data'),
(2, 'Pengawas', 'Hak akses untuk mengawasi dan menyetujui barang yang dijual'),
(3, 'Penjual', 'Hak akses untuk menjual barang dan melihat transaksi penjualan'),
(4, 'Pembeli', 'Hak akses untuk membeli barang dan melihat transaksi pembelian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IdPelanggan` int(11) NOT NULL,
  `NamaPelanggan` varchar(50) NOT NULL,
  `AlamatPelanggan` varchar(100) NOT NULL,
  `TelpPelanggan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`IdPelanggan`, `NamaPelanggan`, `AlamatPelanggan`, `TelpPelanggan`) VALUES
(2001, 'Budi Santoso', 'Jl. Kemang Raya Blok A No. 10, Mampang Prapatan', '089876543210'),
(2002, 'Ani Wijaya', 'Jl. Antasari No. 25A, Pasar Minggu', '089765432109'),
(2003, 'Joko Sutomo', 'Jl. Fatmawati Barat No. 5, Cilandak', '089654321098'),
(2004, 'Siti Rahayu', 'Jl. Cipete Raya Selatan No. 15, Cilandak', '089543210987'),
(2005, 'Rudi Hidayat', 'Jl. Radio Dalam Utara No. 7, Kebayoran Baru', '089432109876'),
(2006, 'Susi Kurniawati', 'Jl. Gandaria Selatan No. 12, Kebayoran Baru', '089321098765'),
(2007, 'Eko Prasetyo', 'Jl. Pondok Indah Timur No. 30, Kebayoran Lama', '089210987654'),
(2008, 'Yuni Suryani', 'Jl. Lebak Bulus Barat No. 18, Cilandak', '089109876543'),
(2009, 'Rina Indriani', 'Jl. TB Simatupang Kav. 21, Jagakarsa', '089098765432'),
(2010, 'Dodi Haryanto', 'Jl. Ragunan Raya No. 3A, Pasar Minggu', '089987654321'),
(2011, 'Wati Nurhayati', 'Jl. Kemang Timur Barat No. 56, Mampang Prapatan', '089876543210'),
(2012, 'Agus Setiawan', 'Jl. Mampang Prapatan Utara No. 8, Mampang Prapatan', '089765432109'),
(2013, 'Desi Puspita', 'Jl. Bangka Raya Selatan No. 17, Kemang', '089654321098'),
(2014, 'Adi Nugroho', 'Jl. Panglima Polim Timur No. 42, Kebayoran Baru', '089543210987'),
(2015, 'Rina Sari', 'Jl. Kebayoran Lama Barat No. 23, Kebayoran Lama', '089432109876'),
(2016, 'Fajar Ramadhan', 'Jl. Cilandak KKO Selatan No. 11, Cilandak', '089321098765'),
(2017, 'Maya Putri', 'Jl. Senopati Raya Utara No. 20, Kebayoran Baru', '089210987654'),
(2018, 'Rizki Pratama', 'Jl. Ciputat Raya Selatan No. 4, Cilandak', '089109876543'),
(2019, 'Dian Wahyuni', 'Jl. Pasar Minggu Barat No. 9, Pasar Minggu', '089098765432'),
(2020, 'Indra Kusuma', 'Jl. Kemanggisan Raya Timur No. 15, Palmerah', '089987332210');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `IdPembelian` int(11) NOT NULL,
  `JumlahPembelian` int(11) NOT NULL,
  `HargaBeli` decimal(10,2) NOT NULL,
  `IdPengguna` int(11) NOT NULL,
  `IdBarang` int(11) NOT NULL,
  `IdSupplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`, `IdBarang`, `IdSupplier`) VALUES
(1, 1, '20000000.00', 4, 1, 1003),
(2, 2, '15000000.00', 6, 2, 1002),
(3, 3, '3000000.00', 8, 3, 1005),
(4, 1, '25000000.00', 10, 4, 1007),
(5, 2, '50000000.00', 4, 5, 1009),
(6, 4, '1000000.00', 6, 6, 1002),
(7, 5, '3000000.00', 8, 7, 1001),
(8, 3, '5000000.00', 10, 8, 1010),
(9, 2, '4000000.00', 4, 9, 1001),
(10, 4, '2000000.00', 6, 10, 1016),
(11, 1, '21000000.00', 8, 1, 1020),
(12, 2, '16000000.00', 10, 2, 1011),
(13, 3, '3500000.00', 4, 3, 1015),
(14, 1, '27000000.00', 6, 4, 1003),
(15, 2, '55000000.00', 8, 5, 1004),
(16, 4, '1200000.00', 10, 6, 1013),
(17, 5, '3500000.00', 4, 7, 1012),
(18, 3, '6000000.00', 6, 8, 1011),
(19, 2, '4500000.00', 8, 9, 1019),
(20, 4, '2500000.00', 10, 10, 1004);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(11) NOT NULL,
  `NamaPengguna` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `NamaDepan` varchar(20) NOT NULL,
  `NamaBelakang` varchar(20) NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `IdAkses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(1, 'admin', 'admin123', 'Andi', 'Saputra', '081234567890', 'Jl. Merdeka No.1 Jakarta', 1),
(2, 'pengawas', 'pengawas123', 'Budi', 'Setiawan', '082345678901', 'Jl. Sudirman No.2 Bandung', 2),
(3, 'cici', 'cici123', 'Cici', 'Nugraha', '083456789012', 'Jl. Thamrin No.3 Surabaya', 3),
(4, 'dani', 'dani123', 'Dani', 'Rahman', '084567890123', 'Jl. Malioboro No.4 Yogyakarta', 4),
(5, 'erik', 'erik123', 'Erik', 'Wijaya', '085678901234', 'Jl. Pahlawan No.5 Semarang', 3),
(6, 'fina', 'fina123', 'Fina', 'Putri', '086789012345', 'Jl. Diponegoro No.6 Malang', 4),
(7, 'gina', 'gina123', 'Gina', 'Sari', '087890123456', 'Jl. Ahmad Yani No.7 Medan', 3),
(8, 'hadi', 'hadi123', 'Hadi', 'Pratama', '088901234567', 'Jl. Sudirman No.8 Makassar', 4),
(9, 'irfan', 'irfan123', 'Irfan', 'Rizki', '089012345678', 'Jl. Merdeka No.9 Palembang', 3),
(10, 'joko', 'joko123', 'Joko', 'Widodo', '081012345679', 'Jl.Thamrin No.10 Jakarta', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `IdPenjualan` int(11) NOT NULL,
  `JumlahPenjualan` int(11) NOT NULL,
  `HargaJual` decimal(10,2) NOT NULL,
  `IdPengguna` int(11) NOT NULL,
  `IdBarang` int(11) NOT NULL,
  `IdPelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`, `IdBarang`, `IdPelanggan`) VALUES
(1, 1, '22000000.00', 3, 1, 2001),
(2, 2, '17000000.00', 5, 2, 2011),
(3, 3, '4000000.00', 7, 3, 2002),
(4, 1, '30000000.00', 9, 4, 2012),
(5, 2, '60000000.00', 3, 5, 2003),
(6, 4, '1500000.00', 5, 6, 2013),
(7, 5, '4000000.00', 7, 7, 2005),
(8, 3, '7000000.00', 9, 8, 2015),
(9, 2, '5000000.00', 3, 9, 2007),
(10, 4, '3000000.00', 5, 10, 2017),
(11, 1, '23000000.00', 8, 1, 2019),
(12, 2, '18000000.00', 10, 2, 2009),
(13, 3, '4500000.00', 4, 3, 2001),
(14, 1, '32000000.00', 6, 4, 2003),
(15, 2, '65000000.00', 8, 5, 2018),
(16, 4, '1500000.00', 10, 6, 2006),
(17, 5, '4500000.00', 4, 7, 2017),
(18, 3, '7000000.00', 6, 8, 2020),
(19, 2, '5500000.00', 8, 9, 2020),
(20, 4, '3500000.00', 10, 10, 2008);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `IdSupplier` int(11) NOT NULL,
  `NamaSupplier` varchar(50) NOT NULL,
  `AlamatSupplier` varchar(100) NOT NULL,
  `TelpSupplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`IdSupplier`, `NamaSupplier`, `AlamatSupplier`, `TelpSupplier`) VALUES
(1001, 'Toko Bunda', 'Jl. Ahmad Yani No. 10', '081234567890'),
(1002, 'Toko Barokah', 'Jl. Merdeka No. 25', '081345678901'),
(1003, 'Toko Berkah', 'Jl. Sudirman No. 5', '081456789012'),
(1004, 'Toko Abadi', 'Jl. Gajah Mada No. 15', '081567890123'),
(1005, 'Toko Maju Jaya', 'Jl. Veteran No. 7', '081678901234'),
(1006, 'Toko Sumber Rezeki', 'Jl. Gatot Subroto No. 12', '081789012345'),
(1007, 'Toko Harapan Baru', 'Jl. Diponegoro No. 30', '081890123456'),
(1008, 'Toko Makmur Jaya', 'Jl. Ahmad Dahlan No. 18', '081901234567'),
(1009, 'Toko Sejahtera', 'Jl. Imam Bonjol No. 21', '081012345678'),
(1010, 'Toko Bintang Raya', 'Jl. Pahlawan No. 3', '081123456789'),
(1011, 'Toko Rizki', 'Jl. A. Yani No. 56', '081234567890'),
(1012, 'Toko Damai', 'Jl. Proklamasi No. 8', '081345678901'),
(1013, 'Toko Mutiara', 'Jl. Kartini No. 17', '081456789012'),
(1014, 'Toko Sari Murni', 'Jl. S. Parman No. 42', '081567890123'),
(1015, 'Toko Maju Bersama', 'Jl. R. A. Kartini No. 23', '081678901234'),
(1016, 'Toko Bina Sejahtera', 'Jl. Asia Afrika No. 11', '081789012345'),
(1017, 'Toko Sukses Mandiri', 'Jl. Thamrin No. 20', '081890123456'),
(1018, 'Toko Sentosa Jaya', 'Jl. Cendrawasih No. 4', '081901234567'),
(1019, 'Toko Sehat', 'Jl. Puri Indah No. 9', '081012345678'),
(1020, 'Toko Makmur', 'Jl. Dipatiukur No. 15', '081123456789');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indeks untuk tabel `hakakses`
--
ALTER TABLE `hakakses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IdPelanggan`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`IdPengguna`),
  ADD KEY `IdBarang` (`IdBarang`),
  ADD KEY `FK_Pembelian_Supplier` (`IdSupplier`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD KEY `IdAkses` (`IdAkses`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdPengguna` (`IdPengguna`),
  ADD KEY `IdBarang` (`IdBarang`),
  ADD KEY `FK_Penjualan_Pelanggan` (`IdPelanggan`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`IdSupplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `hakakses`
--
ALTER TABLE `hakakses`
  MODIFY `IdAkses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `IdPembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `IdPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `FK_Pembelian_Supplier` FOREIGN KEY (`IdSupplier`) REFERENCES `supplier` (`IdSupplier`),
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `FK_Penjualan_Pelanggan` FOREIGN KEY (`IdPelanggan`) REFERENCES `pelanggan` (`IdPelanggan`),
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
