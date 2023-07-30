<?php
require_once 'koneksi.php';

class Supplier {
    public function getAllSupplier() {
        global $conn;
        $query = "SELECT * FROM supplier";
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getSupplierById($id) {
        global $conn;
        $query = "SELECT * FROM supplier WHERE IdSupplier = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    public function addSupplier($idSupplier, $namaSupplier, $alamatSupplier, $telpSupplier) {
        global $conn;
        $query = "INSERT INTO supplier (IdSupplier, NamaSupplier, AlamatSupplier, TelpSupplier) VALUES ($idSupplier, '$namaSupplier', '$alamatSupplier', '$telpSupplier')";
        return $conn->query($query);
    }

    public function updateSupplier($id, $namaSupplier, $alamatSupplier, $telpSupplier) {
        global $conn;
        $query = "UPDATE supplier SET NamaSupplier = '$namaSupplier', AlamatSupplier = '$alamatSupplier', TelpSupplier = '$telpSupplier' WHERE IdSupplier = $id";
        return $conn->query($query);
    }

    public function deleteSupplier($id) {
        global $conn;
        $query = "DELETE FROM supplier WHERE IdSupplier = $id";
        return $conn->query($query);
    }
}
?>
