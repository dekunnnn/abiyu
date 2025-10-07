<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun - YUFILM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: rgba(0, 0, 0, 0.6) url('img/adfil.jpg') center/cover no-repeat;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.85);
    }

    .navbar-brand {
      font-weight: 700;
      color: #00d4ff !important;
      letter-spacing: 1px;
    }

    .btn-outline-primary,
    .btn-outline-success {
      border-radius: 20px;
      font-weight: 500;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .card-body {
      border-radius: 15px;
      padding: 2rem;
    }

    h5 {
      font-weight: 700;
      margin-bottom: 1rem;
      color: #0d6efd;
    }

    label {
      color: #333;
      font-weight: 500;
    }

    .form-control {
      border-radius: 10px;
      box-shadow: none;
    }

    .btn-primary {
      background: linear-gradient(45deg, #007bff, #00d4ff);
      border: none;
      transition: 0.3s ease;
      border-radius: 30px;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #0056b3, #00a3cc);
      transform: scale(1.03);
    }

    .text-link {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
    }

    .text-link:hover {
      text-decoration: underline;
    }

    footer {
      margin-top: auto;
      text-align: center;
      color: #ddd;
      font-size: 14px;
      padding: 10px;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">🎬 YUFILM</a>
      <div class="ms-auto">
        <a href="login.php" class="btn btn-outline-light me-2">Login</a>
        <a href="daftar.php" class="btn btn-success">Daftar</a>
      </div>
    </div>
  </nav>

  <!-- FORM DAFTAR -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <div class="text-center mb-4">
              <h5>Daftar Akun Baru</h5>
              <p class="text-muted mb-0">Isi data Anda dengan benar untuk membuat akun.</p>
            </div>

            <form action="aksi_daftar.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username..." required>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email aktif..." required>
              </div>

              <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="namalengkap" class="form-control" placeholder="Masukkan nama lengkap..." required>
              </div>

              <div class="mb-4">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat..." required>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
              </div>
            </form>

            <hr>
            <p class="text-center mb-0">Sudah punya akun? <a href="login.php" class="text-link">Login disini</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>© 2025 YUFILM - Registrasi Akun Pengguna</footer>
</body>
</html>
