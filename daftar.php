<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { 
            background-image: url('image/bglogin.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

.container {
    width: 450px; /* Sesuaikan dengan lebar yang diinginkan */
    height: 450px;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px;
    border-radius: 10px;
    backdrop-filter: blur(1px); /* Menambahkan efek blur pada container */
}
</style>
</head>

<body>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Daftar</h2>
                <form method='POST' action="condaftar.php">
                    <div class="mb-3">
                        <label for="daftarnama" class="form-label">Username</label>
                        <input type="text" class="form-control" name="nama" id="daftarnama" required>
                    </div>
                    <div class="mb-3">
                        <label for="daftaremail" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="daftaremail" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="daftarpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="daftarpassword" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>