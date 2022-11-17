<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopaedi | Login</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/tokopedialogo.png">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <img src="img/tokopedialogo.png" alt="" class="imgbrand">
            <a class="navbar-brand" href="{{ url('home') }}">Tokopaedi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ url('login') }}">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>    
    <form action="/actionlogin" method="post">
        @csrf
        <div class="container mt-4">
            <h1>Login</h1>
            <p>Please fill in this form to sign in account.</p>
            <hr>
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="alert alert-danger">{{ session('error') }}</p>
            @endif
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            <hr>
            <button type="submit" class="loginbtn">Login</button>
            <div class="container register">
                <p>Don't have an account? <a href="{{ url('register') }}">Register</a></p>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>