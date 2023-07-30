
<?php
    $host = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "db_lapakpedia";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }
?>

