<html>
<head>
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-4" style="position: relative; left: 900px" ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">contact</a>
            @guest()
                <a class="nav-link active" aria-current="page" href="{{ route('register') }}">register</a>
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">login</a>
            @endguest

            @auth()
                <a class="nav-link active" aria-current="page" href="{{route('logout')}}">logout</a>

            @endauth
        </div>
        </div>
    </div>
</nav>



@yield('content')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
