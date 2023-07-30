<?php
require_once 'koneksi.php';

class Barang {
    public function getAllBarang() {
        global $conn;
        $query = "SELECT * FROM barang";
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getBarangById($id) {
        global $conn;
        $query = "SELECT * FROM barang WHERE IdBarang = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    public function addBarang($nama, $keterangan, $satuan, $idPengguna) {
        global $conn;
        $query = "INSERT INTO barang (NamaBarang, Keterangan, Satuan, IdPengguna) VALUES ('$nama', '$keterangan', '$satuan', $idPengguna)";
        return $conn->query($query);
    }

    public function updateBarang($id, $nama, $keterangan, $satuan, $idPengguna) {
        global $conn;
        $query = "UPDATE barang SET NamaBarang = '$nama', Keterangan = '$keterangan', Satuan = '$satuan', IdPengguna = $idPengguna WHERE IdBarang = $id";
        return $conn->query($query);
    }

    public function deleteBarang($id) {
        global $conn;
        $query = "DELETE FROM barang WHERE IdBarang = $id";
        return $conn->query($query);
    }
}
?>
