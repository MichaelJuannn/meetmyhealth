<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/bc2f8f9140.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-gradient">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="navbar-brand">
                        <img src="http://pngimg.com/uploads/dragon/dragon_PNG84454.png" alt="" width="30" height="24">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/check')}}" class="nav-link">Check</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/complete')}}" class="nav-link">Input</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" style="background-color: #000000">
                        <li><a href="{{url('about')}}" class="dropdown-item" style="color: red">About Us</a></li>
                        <li><a href="{{url('dashboard')}}" class="dropdown-item" style="color: red">Dashboard</a></li>
                        <li><a href="{{url('/appointment/'.auth()->user()->id)}}" class="dropdown-item"
                                style="color: red">Appointment</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <form action="{{url('/logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn nav-link text-danger"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i>Logout</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="bg-dark py-4 text-white mt-auto">
        <div class="container">
            Copyright &copy; Project 2022
        </div>
    </footer>
</body>

</html>