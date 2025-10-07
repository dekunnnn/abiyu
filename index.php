<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YuPerpus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #ffffff);
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background: rgba(255,255,255,0.9);
      backdrop-filter: blur(10px);
      border-radius: 50px;
      width: 90%;
      margin: 20px auto;
      padding: 10px 25px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      animation: fadeIn 0.9s ease;
      transition: 0.4s;
    }

    .navbar:hover {
      transform: scale(1.01);
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .navbar-brand {
      color: #0077ff !important;
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 0.5px;
    }

    .nav-link {
      color: #333 !important;
      font-weight: 500;
      position: relative;
      margin: 0 10px;
      transition: 0.3s ease;
    }

    .nav-link:hover {
      color: #0077ff !important;
      transform: scale(1.1);
    }

    .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      left: 0;
      bottom: 0;
      background: #0077ff;
      border-radius: 5px;
      transition: width 0.3s;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .btn-login {
      background: linear-gradient(90deg, #007bff, #00c6ff);
      color: white;
      border: none;
      border-radius: 30px;
      padding: 6px 18px;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(0,123,255,0.3);
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0,123,255,0.4);
    }

    @media (max-width: 992px) {
      .navbar { width: 95%; border-radius: 25px; }
      .nav-link { margin: 6px 0; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">📚 YuPerpus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPerpus">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarPerpus">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#koleksi">Koleksi</a></li>
          <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
          <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
          <li class="nav-item ms-3">
            <a href="login/login.php" class="btn btn-login">
              <i class="fa-solid fa-right-to-bracket"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
