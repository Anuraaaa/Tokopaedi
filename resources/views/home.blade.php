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
    @include('partials.navbar')
    <div class="container">
        @include('partials.slider')
        @include('partials.notify')
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