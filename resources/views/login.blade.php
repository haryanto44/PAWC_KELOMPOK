<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/vendor/css/login_style.css')}}">
    <title>Login</title>
</head>
<body>
    <!-- bagian form -->
    <form class="form-signin" action="login" method="POST">
        @csrf <!--ini bagian untuk memproteksi laravel app dari serangan CSRF-->
        <div class="text-center mb-4">
            <img class="mb-4" src="{{asset('asset/img/icons8-book-shelf-64.png')}}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">OURBOOKS</h1>
            <p>Masuk untuk melanjutkan. <br>Belum punya akun? <a href="https://caniuse.com/#feat=css-placeholder-shown">Daftar disini</a></p>
        </div>
        <form class="login100-form validate-form p-b-33 p-t-5">
            <div class="form-label-group" data-validate = "Enter username">
                <input id="inputUsername" type="text" name="username" placeholder="User name" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
            </div>
            <div class="form-label-group" data-validate="Enter password">
                <input id="inputPass" type="password" name="pass" placeholder="Password" class="form-control" placeholder="Password" required>
                <label for="inputPass">Password</label>
            </div>
            <button class="btn btn-lg btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
        
    </form>
    <!-- akhir bagian form  -->

    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>