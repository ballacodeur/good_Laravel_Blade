<!doctype html>
<html lang="en">

<head>
    <title>Gestion Stock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,200,400,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url ('menuTemp/css/style.css')}}">
    <link rel="stylesheet" href="{{ url ('/bootstrap/css/bootstrap-grid.css') }}">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+00 1234 567</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> -->
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="nav-link dropdown-toggle" href="#" id="logoutd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i></a>
            <div class="dropdown-menu" aria-labelledby="logoutd">
            </div>
            <form action="#" class="searchform order-sm-start order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                </div>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{route('users.index')}}" class="nav-link">Employe</a></li>
                    <!-- <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link">Catégorie</a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrée</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{route('pointages.index')}}">Liste des Pointages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sortie</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{route('paiements.index')}}">Liste des Paiements</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link"></i>Utilisateur</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <script src="{{url('menuTemp/js/jquery.min.js')}}"></script>
    <script src="{{url('menuTemp/js/popper.js')}}"></script>
    <script src="{{url('menuTemp/js/bootstrap.min.js')}}"></script>
    <script src="{{url('menuTemp/js/main.js')}}"></script>
</body>

</html>