@guest
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
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown">Kategori</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Topi</a></li>
                        <li><a href="#" class="dropdown-item">Baju</a></li>
                        <li><a href="#" class="dropdown-item">Celana</a></li>
                        <li><a href="#" class="dropdown-item">Kaos Kaki</a></li>
                        <li><a href="#" class="dropdown-item">Sepatu</a></li>
                        <li><a href="#" class="dropdown-item">Tas</a></li>
                        <li><a href="#" class="dropdown-item">Kacamata</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>        
@endguest
@auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <img src="img/tokopedialogo.png" alt="" class="imgbrand">
            <a class="navbar-brand" href="{{ url('loggedhome') }}">Tokopaedi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('loggedhome') }}">Home</a>
                </li>
                <li class="nav-item">
                <form action="/actionlogout" method="post">
                    @csrf
                    <button class="btn btn-success">Logout</button>
                </form>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown">Kategori</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Topi</a></li>
                        <li><a href="#" class="dropdown-item">Baju</a></li>
                        <li><a href="#" class="dropdown-item">Celana</a></li>
                        <li><a href="#" class="dropdown-item">Kaos Kaki</a></li>
                        <li><a href="#" class="dropdown-item">Sepatu</a></li>
                        <li><a href="#" class="dropdown-item">Tas</a></li>
                        <li><a href="#" class="dropdown-item">Kacamata</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@endauth

