<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/navbar-top-fixed.css') }}">
        <title>Hello, world!</title>
    </head>
    <body>
        <!-- bagian dashboard -->
        <!-- bagian navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#"><img src="{{asset('asset/img/icons8-book-shelf-64.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">OURBOOKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (session()->has('user'))
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Beli Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pinjam Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Daftar</a>
                        </li>
                    @endif
                    
                </ul>
                @if (session()->has('user'))
                    <a class="btn btn-outline-success my-2 my-sm-0" href="logout" role="button">Logout</a>
                @else
                    <a class="btn btn-info my-2 my-sm-0" href="#" role="button">Register</a>
                    <a class="btn btn-outline-success my-2 my-sm-0" href="login" role="button">Login</a>
                @endif
                
            </div>
        </nav>
    </div>
        <!-- akhir bagian navbar -->
        <main role="main" class="container">
            @yield('content')
        </main>
    
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Pemrograman Aplikasi Web C - OURBOOKS</div></div>
        </footer>

        <!--Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>