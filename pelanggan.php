<?php
require_once 'koneksi.php';

class Pelanggan {
    public function getAllPelanggan() {
        global $conn;
        $query = "SELECT * FROM pelanggan";
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getPelangganById($id) {
        global $conn;
        $query = "SELECT * FROM pelanggan WHERE IdPelanggan = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    public function addPelanggan($idPelanggan, $namaPelanggan, $alamatPelanggan, $telpPelanggan) {
        global $conn;
        $query = "INSERT INTO pelanggan (IdPelanggan, NamaPelanggan, AlamatPelanggan, TelpPelanggan) VALUES ($idPelanggan, '$namaPelanggan', '$alamatPelanggan', '$telpPelanggan')";
        return $conn->query($query);
    }

    public function updatePelanggan($id, $namaPelanggan, $alamatPelanggan, $telpPelanggan) {
        global $conn;
        $query = "UPDATE pelanggan SET NamaPelanggan = '$namaPelanggan', AlamatPelanggan = '$alamatPelanggan', TelpPelanggan = '$telpPelanggan' WHERE IdPelanggan = $id";
        return $conn->query($query);
    }

    public function deletePelanggan($id) {
        global $conn;
        $query = "DELETE FROM pelanggan WHERE IdPelanggan = $id";
        return $conn->query($query);
    }
}
?>
