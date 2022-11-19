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
            </ul>
            </div>
        </div>
    </nav>
@endauth

