<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin | YuPerpus</title>

  <!-- Bootstrap & Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a2e0fc371a.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(45deg, #0d6efd, #6610f2);
    }

    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
    }

    .btn-outline-light:hover {
      background-color: #fff;
      color: #0d6efd !important;
    }

    h2, h3 {
      font-weight: 700;
      color: #0d6efd;
    }

    /* Table Styling */
    table {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    th {
      background-color: #0d6efd !important;
      color: white !important;
      text-align: center;
    }

    td {
      text-align: center;
      vertical-align: middle;
    }

    /* Cetak Button */
    .btn-cetak {
      display: block;
      margin: 25px auto;
      font-weight: 600;
    }

    footer {
      text-align: center;
      color: #777;
      font-size: 14px;
      margin-top: 50px;
      padding: 20px 0;
      border-top: 1px solid #ddd;
      background-color: #fff;
    }
  </style>
</head>

<body>
  <?php 
    session_start();
    if($_SESSION['level']==""){
      header("location:index.php?pesan=gagal");
    }
  ?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php">📚 YuPerpus Admin</a>
      <div class="d-flex">
        <a href="dashboard.php" class="btn btn-sm btn-outline-light me-2">Dashboard</a>
        <a href="index.php" class="btn btn-sm btn-danger">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="container mt-5">
    <div class="card shadow-sm mb-5">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>📖 Daftar Buku</h3>
          <a href="?action=add" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Buku</a>
        </div>

        <!-- Tombol Cetak -->
        <button onclick="window.print()" class="btn btn-primary btn-cetak">
          <i class="fa-solid fa-print"></i> Cetak Laporan Buku
        </button>

        <!-- Tabel Buku -->
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td><td>Laskar Pelangi</td><td>Andrea Hirata</td><td>Bentang Pustaka</td><td>2005</td><td>15</td>
                <td>
                  <a href="?action=edit&id=1" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  <a href="?action=delete&id=1" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <tr>
                <td>2</td><td>Negeri 5 Menara</td><td>Ahmad Fuadi</td><td>Gramedia</td><td>2009</td><td>12</td>
                <td>
                  <a href="?action=edit&id=2" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  <a href="?action=delete&id=2" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <tr>
                <td>3</td><td>Bumi</td><td>Tere Liye</td><td>Gramedia</td><td>2014</td><td>20</td>
                <td>
                  <a href="?action=edit&id=3" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  <a href="?action=delete&id=3" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <tr>
                <td>4</td><td>Filosofi Kopi</td><td>Dewi Lestari</td><td>Bentang</td><td>2006</td><td>10</td>
                <td>
                  <a href="?action=edit&id=4" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  <a href="?action=delete&id=4" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <tr>
                <td>5</td><td>Dilan 1990</td><td>Pidi Baiq</td><td>Pastel Books</td><td>2014</td><td>8</td>
                <td>
                  <a href="?action=edit&id=5" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  <a href="?action=delete&id=5" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2025 <strong>YuPerpus</strong> — Data Buku Perpustakaan
  </footer>
</body>
</html>
