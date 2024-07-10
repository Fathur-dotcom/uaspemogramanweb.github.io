<?php
include 'koneksi.php';

$id = $_GET['id'];

// Menghapus entri dari database
$sql = "DELETE FROM skills WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Mengatur ulang auto increment
$sql = "SET @num := 0;";
$conn->query($sql);

$sql = "UPDATE skills SET id = @num := (@num+1);";
$conn->query($sql);

$sql = "ALTER TABLE skills AUTO_INCREMENT = 1;";
$conn->query($sql);

if ($stmt->affected_rows > 0) {
    echo "Success";
} else {
    echo "Error";
}
?>
