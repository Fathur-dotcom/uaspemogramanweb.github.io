<?php
include 'koneksi.php';

$id = $_GET['id']; // Ambil ID dari parameter URL

// Lakukan query untuk mengambil data skill berdasarkan ID
$sql = "SELECT * FROM skills WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Ambil nilai-nilai yang ingin di-edit
    $user_id = $row['user_id'];
    $skill_name = $row['skill_name'];
    $rating = $row['rating'];
    $description = $row['description'];
} else {
    echo "Data tidak ditemukan";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS untuk memusatkan form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <h2 class="mb-4">Edit Data Skill</h2>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" class="form-control" name="user_id" value="<?php echo $user_id; ?>" required>
                </div>
                <div class="form-group">
                    <label for="skill_name">Skill Name:</label>
                    <input type="text" class="form-control" name="skill_name" value="<?php echo $skill_name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <input type="text" class="form-control" name="rating" value="<?php echo $rating; ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <a href="index.php" class="btn btn-secondary mt-3">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Bootstrap JS dan jQuery (opsional, tergantung kebutuhan Anda) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
