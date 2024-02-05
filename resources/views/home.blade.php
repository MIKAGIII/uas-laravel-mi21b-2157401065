<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .display-4 {
            color: #333;
            margin-bottom: 20px;
        }
        .lead {
            color: #666;
        }
        .mt-4 {
            margin-top: 20px;
        }
        .btn-logout {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            transition: all 0.3s;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 18px;
            text-transform: uppercase;
            outline: none;
            cursor: pointer;
        }
        .btn-logout:hover {
            background-color: #c82333;
            border-color: #c82333;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .btn-logout:focus {
            outline: none;
        }
        body {
    background: linear-gradient(to right, #4b0082, #9400d3); /* Ubah kode warna sesuai dengan warna pelangi yang Anda inginkan */
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Selamat Datang {{ auth()->user()->name }}</h1>
        <p class="lead">{{ auth()->user()->email }}</p>
        <a href="/halamanawal" class="btn btn-logout">Logout</a>
    </div>
</body>
</html>
