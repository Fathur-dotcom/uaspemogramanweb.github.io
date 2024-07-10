<?php
include 'koneksi.php';

// Ambil data yang dikirimkan dari form tambah data
$user_id = $_POST['user_id'];
$skill_name = $_POST['skill_name'];
$rating = $_POST['rating'];
$description = $_POST['description'];

// Simpan data ke dalam tabel skills
$sql = "INSERT INTO skills (user_id, skill_name, rating, description) VALUES ('$user_id', '$skill_name', '$rating', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect ke halaman utama (index.php)
header('Location: index.php');
exit;
?>
