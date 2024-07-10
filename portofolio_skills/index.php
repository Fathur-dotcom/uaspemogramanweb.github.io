<!DOCTYPE html>
<?php include 'koneksi.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portofolio Fathur Rahman Ridwan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark emphasis shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#about">Fathur Rahman R</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#riwayat">Riwayat Pendidikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#experience">Pengalaman Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skillsmahasiswa">Keahlian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/foto.jpg" alt="Fathur Rahman Ridwan" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Fathur Rahman Ridwan</h1>
      <p class="lead">Staff Tata Usaha | Daijoubu Desu Datte Kimi Yowai Mo</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <filter id="shadow">
          <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#aaaaaa" />
        </filter>
        <path fill="#ffffff" fill-opacity="1" filter="url(#shadow)" d="M0,32L24,37.3C48,43,96,53,144,80C192,107,240,149,288,176C336,203,384,213,432,192C480,171,528,117,576,112C624,107,672,149,720,170.7C768,192,816,192,864,208C912,224,960,256,1008,256C1056,256,1104,224,1152,224C1200,224,1248,256,1296,250.7C1344,245,1392,203,1416,181.3L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z" />
      </svg>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="about pt-5">
        <div class="row text-center pt-1 mb-3">
          <div class="col">
            <h2>Tentang saya</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, placeat amet omnis molestiae explicabo eveniet perspiciatis veniam natus fuga suscipit.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iure in dolor at sit tenetur iste reprehenderit doloremque dolorum! Eius iusto voluptate non quis omnis.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <filter id="shadow">
          <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#aaaaaa" />
        </filter>
        <path
          fill="#ffffff"
          fill-opacity="1"
          filter="url(#shadow)"
          d="M0,224L48,218.7C96,213,192,203,288,181.3C384,160,480,128,576,128C672,128,768,160,864,192C960,224,1056,256,1152,266.7C1248,277,1344,267,1392,261.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

<!-- Riwayat Pendidikan -->
<section id="riwayat">
  <div class="container pt-5">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>Riwayat Pendidikan</h2>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-md-4">
        <h4>Sekolah Dasar</h4>
        <p>SD Negeri 3 Cikoneng</p>
      </div>
      <div class="col-md-4">
        <h4>Sekolah Menengah Pertama</h4>
        <p>SMP Negeri 2 Ciamis</p>
      </div>
      <div class="col-md-4">
        <h4>Sekolah Menengah Atas</h4>
        <p>SMK Negeri 1 Ciamis</p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <filter id="shadow">
      <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#000" />
    </filter>
    <path fill="#fff" fill-opacity="1" filter="url(#shadow)" d="M0,288L20,250.7C40,213,80,139,120,112C160,85,200,107,240,122.7C280,139,320,149,360,165.3C400,181,440,203,480,186.7C520,171,560,117,600,122.7C640,128,680,192,720,192C760,192,800,128,840,122.7C880,117,920,171,960,170.7C1000,171,1040,117,1080,117.3C1120,117,1160,171,1200,165.3C1240,160,1280,96,1320,64C1360,32,1400,32,1420,32L1440,32L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z" />
  </svg>
</section>
<!-- Akhir Riwayat Pendidikan -->

<!-- Keahlian -->
<section id="skillsmahasiswa" class="">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>Keahlian</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <table class="table table-striped table-bordered custom-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>User ID</th>
              <th>Skill Name</th>
              <th>Rating</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';

            // Fungsi untuk mengatur ulang urutan ID
            function resetAutoIncrement($conn, $table_name) {
                $sql = "ALTER TABLE $table_name AUTO_INCREMENT = 1";
                if ($conn->query($sql) === TRUE) {
                    echo "Auto Increment reset successfully";
                } else {
                    echo "Error resetting Auto Increment: " . $conn->error;
                }
            }

            // Fungsi untuk menghapus data berdasarkan ID
            function deleteData($conn, $id) {
                $sql = "DELETE FROM skills WHERE id = $id";
                if ($conn->query($sql) === TRUE) {
                    echo "Record deleted successfully";
                    resetAutoIncrement($conn, 'skills'); // Panggil fungsi resetAutoIncrement setelah penghapusan
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }

            // Memproses penghapusan data jika ada request
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteData($conn, $id);
            }

            // Menampilkan data dalam tabel setelah penghapusan
            $sql = "SELECT * FROM skills ORDER BY id ASC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr id='row-" . $row['id'] . "'>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['skill_name']) . "</td>";
                    echo "<td>";
                    // Menampilkan rating menggunakan bintang
                    $rating = intval($row['rating']);
                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $rating) {
                            echo "<i class='fas fa-star text-warning'></i>";
                        } else {
                            echo "<i class='far fa-star'></i>";
                        }
                    }
                    echo "</td>";
                    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>
                            <button type='button' class='btn btn-danger btn-sm' onclick='deleteData(" . $row['id'] . ")'>Delete</button>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }

            $conn->close();
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td>#</td>
              <td contenteditable='true' id='new-user_id'></td>
              <td contenteditable='true' id='new-skill_name'></td>
              <td contenteditable='true' id='new-rating'></td>
              <td contenteditable='true' id='new-description'></td>
              <td>
                <button type='button' class='btn btn-success btn-sm' onclick='saveData()'>Tambah Data</button>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <filter id="shadow">
      <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#aaaaaa" />
    </filter>
    <path fill="#ffffff" fill-opacity="1" filter="url(#shadow)" d="M0,256L21.8,240C43.6,224,87,192,131,192C174.5,192,218,224,262,208C305.5,192,349,128,393,90.7C436.4,53,480,43,524,58.7C567.3,75,611,117,655,154.7C698.2,192,742,224,785,224C829.1,224,873,192,916,170.7C960,149,1004,139,1047,128C1090.9,117,1135,107,1178,128C1221.8,149,1265,203,1309,197.3C1352.7,192,1396,128,1418,96L1440,64L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z" />
  </svg>
</section>
<!-- Akhir Keahlian -->

<!-- Font Awesome untuk bintang -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
  .custom-table {
    background-color: #212121;
    color: #ffc501;
  }

  .custom-table th,
  .custom-table td {
    border: 1px solid #212121;
    padding: 8px;
    vertical-align: middle;
  }

  .custom-table thead th {
    background-color: #ffc501;
    color: #212122  ;
  }

  .custom-table tbody tr:hover {
    background-color: #212212;
  }

  .custom-table .btn {
    padding: 6px 10px;
    font-size: 12px;
  }

  .custom-table .btn-primary {
    background-color: #ffc501;
    border-color: #212121;
    color: #212121;
  }

  .custom-table .btn-danger {
    background-color: #d9534f;
    border-color: #d43f3a;
    color: #fff;
  }

  .custom-table .btn-success {
    background-color: #5cb85c;
    border-color: #4cae4c;
    color: #fff;
  }
</style>



<script>
function editData(id) {
  const row = document.getElementById('row-' + id);
  const user_id = row.children[1].innerText;
  const skill_name = row.children[2].innerText;
  const rating = row.children[3].innerText;
  const description = row.children[4].innerText;

  const data = {
    id: id,
    user_id: user_id,
    skill_name: skill_name,
    rating: rating,
    description: description
  };

  fetch('update.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then(response => response.text())
  .then(data => {
    if (data === 'Success') {
      alert('Data berhasil diperbarui');
    } else {
      alert('Data gagal untuk diperbarui');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}

function deleteData(id) {
  fetch('delete.php?id=' + id, {
    method: 'GET'
  })
  .then(response => response.text())
  .then(data => {
    if (data === 'Success') {
      location.reload();
    } else {
      alert('Gagal menghapus data');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}

function saveData() {
  window.location.href = 'tambahdata.php';
}
</script>


<!-- Pengalaman Kerja -->
<section id="experience" class="py-5">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>Pengalaman Kerja</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="img/pengalaman/kerjabakti.jpg" class="card-img" alt="Experience 1">
          <div class="card-img-overlay">
            <h5 class="card-title shadow-text">Kerja Bakti</h5>
            <p class="card-text shadow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="img/pengalaman/kerjakelompok.jpg" class="card-img" alt="Experience 2">
          <div class="card-img-overlay">
            <h5 class="card-title shadow-text">Kerja Kelompok</h5>
            <p class="card-text shadow-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="img/pengalaman/kerjarodi.jpg" class="card-img" alt="Experience 3">
          <div class="card-img-overlay">
            <h5 class="card-title shadow-text">Kerja Rodi</h5>
            <p class="card-text shadow-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <filter id="shadow">
      <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#aaaaaa" />
    </filter>
    <path fill="#ffffff" fill-opacity="1" filter="url(#shadow)" d="M0,320L21.8,304C43.6,288,87,256,131,250.7C174.5,245,218,267,262,261.3C305.5,256,349,224,393,186.7C436.4,149,480,107,524,112C567.3,117,611,171,655,202.7C698.2,235,742,245,785,250.7C829.1,256,873,256,916,213.3C960,171,1004,85,1047,85.3C1090.9,85,1135,171,1178,176C1221.8,181,1265,107,1309,69.3C1352.7,32,1396,32,1418,32L1440,32L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z" />
  </svg>
</section>
<!-- Akhir Pengalaman Kerja -->

    <!-- Project -->
    <section id="projects">
      <div class="con" style>
        <div class="row text-center pt-1 mb-3">
          <div class="col">
            <h2>Portofolio</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/3.jpg" class="card-img-top" alt="Project3" />
              <div class="card-body">
                <p class="card-text">Membuat Konten Instagram Untuk Juara FLS2N</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/2.jpg" class="card-img-top" alt="Project2" />
              <div class="card-body">
                <p class="card-text">Membuat Konten Instagram Untuk Juara FLS2N</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/1.jpg" class="card-img-top" alt="Project1" />
              <div class="card-body">
                <p class="card-text">Membuat Konten Instagram Untuk Juara FLS2N</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/4.jpg" class="card-img-top" alt="Project4" />
              <div class="card-body">
                <p class="card-text">Membuat Konten Instagram Untuk Hari Kartini 2024</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/5.jpg" class="card-img-top" alt="Project5" />
              <div class="card-body">
                <p class="card-text">Membuat Konten Instagram Untuk Penerimaan Peserta Didik Baru (PPDB) 2024</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <filter id="shadow">
          <feDropShadow dx="2" dy="2" stdDeviation="4" flood-color="#aaaaaa" />
        </filter>
        <path
          fill="#ffffff"
          fill-opacity="1"
          filter="url(#shadow)"
          d="M0,288L24,277.3C48,267,96,245,144,224C192,203,240,181,288,181.3C336,181,384,203,432,197.3C480,192,528,160,576,149.3C624,139,672,149,720,181.3C768,213,816,267,864,250.7C912,235,960,149,1008,133.3C1056,117,1104,171,1152,176C1200,181,1248,139,1296,133.3C1344,128,1392,160,1416,176L1440,192L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Kontak Saya</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email">
                  <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
              </div>
            </div>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-warning text-center pb-5">
        <p>Created by <a href="https://www.instagram.com/fathur._.r" class="text-black fw-bold ">Fathur Rahman Ridwan</a></p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
