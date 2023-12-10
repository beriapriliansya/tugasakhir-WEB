<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<style>
        body {
            background-image: url('image/bghome.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Untuk mengatur ukuran gambar agar mencakup seluruh halaman */
            background-repeat: no-repeat; /* Mencegah pengulangan gambar */
        }

        /* Gaya tambahan yang bisa Anda sesuaikan sesuai kebutuhan */
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Menambahkan lapisan transparan pada konten */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">
            <img src="image/logo.jpg" alt="" width="30" height="30" class="rounded-circle align-top">
           Pendaftaran Siswa Baru
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Panduan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="daftar.php">Daftar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php">Back</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 text-center">
    <h2>Selamat Datang di WEB Penerimaan Siswa Baru 2023</h2>
    <p>Kami siap untuk membantu kamu! Kami harap kamu siap menerima kami! Mari kita mulai melangkah bersama dengan berkolaborasi untuk menemukan hal-hal baru di dunia pendidikan. Mari kita nikmati perjalanan ini bersama-sama!</p>
    <p>Tidak ada yang dapat membangkitkan semangatmu selain berteman dengan teman-teman baru yang dapat menginspirasi dan mengarahkan kamu menuju kesuksesan. Selamat menjalani tahun akademik yang luar biasa!
    </p>
    <a href="login.php">
    <button type="button" class="btn btn-dark text-white" >Login</button></a>
    <a href="daftar.php">
    <button type="button" class="btn btn-dark text-white" >Daftar</button></a>
    <!-- Konten halaman home lainnya dapat ditambahkan di sini -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
