<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "";
$dbname = "skills_db"; // Replace with your actual database name

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
