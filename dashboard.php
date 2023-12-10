<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }

        #sidebar h2 {
            border-bottom: 2px solid white;
            padding-bottom: 10px;
            cursor: pointer;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        #sidebar a:hover {
            background-color: #2c3135;
            color: #ffc107; /* Warna kuning, bisa disesuaikan */
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block">
            <div class="position-sticky">
                <h2 class="text-center mb-4">Sistem Sekolah</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataguru.php">
                            Data Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datasiswa.php">
                            Data Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Mata Pelajaran
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
