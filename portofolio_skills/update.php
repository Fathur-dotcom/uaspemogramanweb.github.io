<?php
include 'koneksi.php';

// Ambil data yang dikirimkan dari form edit
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$skill_name = $_POST['skill_name'];
$rating = $_POST['rating'];
$description = $_POST['description'];

// Update data di tabel skills
$sql = "UPDATE skills SET user_id='$user_id', skill_name='$skill_name', rating='$rating', description='$description' WHERE id=$id";

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
