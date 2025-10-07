<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard User - Perpustakaan Digital</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a2e0fc371a.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f0f2f5;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background: linear-gradient(45deg, #198754, #00c896);
    }

    .navbar-brand {
      font-weight: 700;
      color: white !important;
      letter-spacing: 1px;
    }

    .nav-link {
      color: white !important;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #ffe15d !important;
      transform: scale(1.05);
    }

    .user-img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid white;
    }

    .dropdown-menu {
      border: none;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    footer {
      text-align: center;
      color: #777;
      font-size: 14px;
      padding: 15px;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <?php 
    session_start();
    if ($_SESSION['level'] == "") {
      header("location:index.php?pesan=gagal");
    }
  ?>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-book me-2"></i>Perpustakaan Digital</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Koleksi Buku</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Peminjaman</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Riwayat</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
        </ul>

        <div class="dropdown">
          <button class="btn btn-transparent dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            <img src="https://i.pravatar.cc/50" alt="User" class="user-img me-2">
            <span class="text-white fw-semibold"><?php echo $_SESSION['username']; ?></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user me-2"></i>Profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-bookmark me-2"></i>Buku Disimpan</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-clock-rotate-left me-2"></i>Riwayat Peminjaman</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Keluar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- KONTEN UTAMA -->
  <div class="container mt-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Selamat Datang di Perpustakaan Digital 📚</h2>
      <p class="text-muted">Hai <strong><?php echo $_SESSION['username']; ?></strong>! Jelajahi koleksi buku dan nikmati kemudahan membaca online.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa-solid fa-book-open-reader fa-2x text-success mb-3"></i>
          <h5>Koleksi Buku</h5>
          <p class="text-muted">Temukan berbagai buku menarik untuk dibaca kapan saja.</p>
          <a href="#" class="btn btn-success">Lihat Buku</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa-solid fa-hand-holding fa-2x text-primary mb-3"></i>
          <h5>Peminjaman Buku</h5>
          <p class="text-muted">Pinjam buku favorit Anda dengan mudah dan cepat.</p>
          <a href="#" class="btn btn-primary">Pinjam Sekarang</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center p-4">
          <i class="fa-solid fa-clock-rotate-left fa-2x text-warning mb-3"></i>
          <h5>Riwayat</h5>
          <p class="text-muted">Lihat kembali daftar buku yang telah Anda baca atau pinjam.</p>
          <a href="#" class="btn btn-warning text-white">Lihat Riwayat</a>
        </div>
      </div>
    </div>
  </div>

  <footer>© 2025 Perpustakaan Digital - Sistem Informasi Buku Online</footer>
</body>
</html>
