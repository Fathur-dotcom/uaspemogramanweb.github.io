<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
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
            <h2 class="mb-4">Tambah Data Skill</h2>
            <form action="save.php" method="post">
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" class="form-control" name="user_id" required>
                </div>
                <div class="form-group">
                    <label for="skill_name">Skill Name:</label>
                    <input type="text" class="form-control" name="skill_name" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <input type="text" class="form-control" name="rating" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
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
