<?php
require_once 'koneksi.php';

class penjualan {
    public function getAllPenjualan() {
        global $conn;
        $query = "SELECT * FROM penjualan";
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getPenjualanById($id) {
        global $conn;
        $query = "SELECT * FROM penjualan WHERE IdPenjualan = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    public function addPenjualan($JumlahPenjualan, $HargaJual, $idBarang, $idPengguna, $idPelanggan) {
        global $conn;
        $query = "INSERT INTO penjualan (JumlahPenjualan, HargaJual, IdBarang, IdPengguna, IdPelanggan) VALUES ('$JumlahPenjualan', '$HargaJual', $idBarang, $idPengguna, $idPelanggan)";
        return $conn->query($query);
    }

    public function updatePenjualan($id, $JumlahPenjualan, $HargaJual, $idBarang, $idPengguna, $idPelanggan) {
        global $conn;
        $query = "UPDATE penjualan SET JumlahPenjualan = '$JumlahPenjualan', HargaJual = '$HargaJual', IdBarang = $idBarang, IdPengguna = $idPengguna, IdPelanggan = $idPelanggan WHERE IdPenjualan = $id";
        return $conn->query($query);
    }

    public function deletePenjualan($id) {
        global $conn;
        $query = "DELETE FROM penjualan WHERE IdPenjualan = $id";
        return $conn->query($query);
    }
}
?>
