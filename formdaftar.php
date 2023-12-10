<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>
<style>
        body {
            background-image: url('#');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; /* Warna teks untuk kontras dengan latar belakang */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang formulir */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        h2 {
            background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang judul */
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
<div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Pendaftaran Siswa Baru</h2>

    <form action="proses_pendaftaran.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
