<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>APLIKASI DAFTAR SISWA</h3>
                        <p>Halo {{ Auth::user()->name }},Selamat datang di aplikasi daftar siswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>