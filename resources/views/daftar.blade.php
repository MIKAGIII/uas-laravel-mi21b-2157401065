<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 20px;
            border: 1px solid #ced4da;
            transition: box-shadow 0.3s ease-in-out;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #80bdff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-kembali {
            background-color: #6c757d;
            border: none;
            border-radius: 20px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-kembali:hover {
            background-color: #343a40;
        }

        body {
    background: linear-gradient(to right, #4b0082, #9400d3); /* Ubah kode warna sesuai dengan warna pelangi yang Anda inginkan */
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Pendaftaran</h2>
                        @if(Session::has('danger'))
                            <p>{{ Session::get('danger') }}</p>
                        @endif
                        <form action="/simpan" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">simpan</button>
                            <a href="/halamanawal" class="btn btn-kembali btn-block">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
