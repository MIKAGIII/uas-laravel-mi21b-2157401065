<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/login.css">
</head>

    <style>
        body {
    background: linear-gradient(to right, #4b0082, #9400d3); /* Ubah kode warna sesuai dengan warna pelangi yang Anda inginkan */
            }
    </style>
    
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    @if(Session::has('danger'))
                     <p>{{ Session::get('danger') }}</p>
                    @endif
                        <h2 class="card-title text-center">Login</h2>
                        <form   action ="/postlogin" method ="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <a href="/halamanawal" class="btn btn-primary btn-block">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>