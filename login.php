<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Multi User - YUFILM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-image: url('img/adfil.jpg');
        background-size: cover;
        background-position: center;
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: overlay;
        height: 100vh;
        color: #fff;
        display: flex;
        flex-direction: column;
    }

    h1 {
        text-align: center;
        margin-top: 40px;
        font-weight: 600;
        font-size: 26px;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
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

    .btn-primary {
        background: linear-gradient(45deg, #007bff, #00d4ff);
        border: none;
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #00a3cc);
        transform: scale(1.03);
    }

    .alert {
        text-align: center;
        background-color: rgba(255, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 5px;
        width: 50%;
        margin: 10px auto;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.85);
    }

    a {
        text-decoration: none;
    }

    footer {
        margin-top: auto;
        text-align: center;
        padding: 10px;
        color: #ddd;
        font-size: 14px;
    }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">🎬 YUFILM</a>
            <div class="ms-auto">
                <a href="daftar.php" class="btn btn-outline-light me-2">Daftar</a>
                <a href="login.php" class="btn btn-success">Login</a>
            </div>
        </div>
    </nav>


    <!-- PESAN ERROR -->
    <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>❌ Username dan Password tidak sesuai!</div>";
      }
    }
  ?>

    <!-- FORM LOGIN -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card bg-light text-dark">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold">Login Aplikasi</h4>
                            <p class="text-muted">Masukkan data akun Anda dengan benar</p>
                        </div>

                        <form action="aksi_login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control"
                                    placeholder="Masukkan username..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Masukkan password..." required>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
                            </div>
                        </form>

                        <hr>
                        <p class="text-center mb-0">Belum punya akun?
                            <a href="daftar.php" class="text-primary fw-bold">Daftar disini!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>© 2025 YUFILM - Multi User Login System</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>