<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopaedi | Home</title>
    <link rel="icon" href="img/tokopedialogo.png">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
    <div class="container">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height="300" src="img/slider/slidernew1.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="300" src="img/slider/slidernew2.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="300" src="img/slider/slidernew3.webp" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="300" src="img/slider/slidernew4.webp" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif            
        <h1>Halaman Home</h1>
        <div class="product1">
            <img src="img/product/sneakerhitam.jpg" alt="">
            <h4>Sneaker Hitam Sweet Child</h4>
            <h5>RP 164.000,00</h5>
        </div>    
        <div class="product2">
            <img src="img/product/sneakerputih.jfif" alt="">
            <h4>Sneaker Putih Long Child</h4>
            <h5>RP 296.000,00</h5>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>