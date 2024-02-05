<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    body {
        background: linear-gradient(to right, #4b0082, #9400d3);
    }

    /* Mengubah warna tombol Login */
    .btn-login {
        background-color: #28a745; /* Warna hijau */
        border-color: #28a745; /* Warna border hijau */
    }

    /* Mengubah warna tombol Daftar */
    .btn-daftar {
        background-color: #6c757d; /* Warna biru */
        border-color: #6c757d; /* Warna border biru */
    }

    /* Style tambahan untuk hover dan focus */
    .btn-login:hover, .btn-login:focus,
    .btn-daftar:hover, .btn-daftar:focus {
        background-color: #218838; /* Warna hijau lebih gelap saat hover/focus */
        border-color: #1e7e34; /* Warna border hijau lebih gelap saat hover/focus */
    }
</style>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Selamat Datang</h2>
                        <!-- Tombol Login -->
                        <a href="/login" class="btn btn-login btn-block">Login</a>
                        <!-- Tombol Daftar -->
                        <a href="/daftar" class="btn btn-daftar btn-block">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
