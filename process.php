<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umkm_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Query untuk menyimpan data
$sql = "INSERT INTO inventory (product_name, quantity, price) VALUES ('$product', '$quantity', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>