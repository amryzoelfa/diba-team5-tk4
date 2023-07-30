<?php
require_once 'koneksi.php';

class Pembelian {
    public function getAllPembelian() {
        global $conn;
        $query = "SELECT * FROM pembelian";
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getPembelianById($id) {
        global $conn;
        $query = "SELECT * FROM pembelian WHERE IdPembelian = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    public function addPembelian($JumlahPembelian, $HargaBeli, $idBarang, $idPengguna, $idSupplier) {
        global $conn;
        $query = "INSERT INTO pembelian (JumlahPembelian, HargaBeli, IdBarang, IdPengguna, IdSupplier) VALUES ('$JumlahPembelian', '$HargaBeli', $idBarang, $idPengguna, $idSupplier)";
        return $conn->query($query);
    }

    public function updatePembelian($id, $JumlahPembelian, $HargaBeli, $idBarang, $idPengguna, $idSupplier) {
        global $conn;
        $query = "UPDATE pembelian SET JumlahPembelian = '$JumlahPembelian', HargaBeli = '$HargaBeli', IdBarang = $idBarang, IdPengguna = $idPengguna, IdSupplier = $idSupplier WHERE IdPembelian = $id";
        return $conn->query($query);
    }

    public function deletePembelian($id) {
        global $conn;
        $query = "DELETE FROM pembelian WHERE IdPembelian = $id";
        return $conn->query($query);
    }
}
?>
