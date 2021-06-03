<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
    <title>@yield('title-name')</title>
</head>

<body>
    {{-- Start Navbar --}}
    <nav class="navbar navbar-light bg-light d-none d-sm-block d-sm-none d-md-block">
        <div class="container__custom">
            <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30"
                    height="24">
                <h3>Logo</h3>
            </a>

            <ul class="navbar-nav flex-row w-100">
                <li class="nav-item w-100 margin__right">
                    <input type="text" class="form-control" placeholder="Cari Product...">
                </li>
                <li class="nav-item d-flex p-1">
                    @if (Auth::guard('customer')->check())
                        <a href="{{route('user.logout')}}" class="btn btn-danger">Logout</a>
                    @else
                    <a href="{{route('user.login')}}" class="auth__link d-flex align-items-center">
                        <span class="material-icons">
                            account_circle
                        </span>
                        Login
                    </a>   
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-xxl-none">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            <a class="btn btn-success d-flex w-100 justify-content-center" href="{{route('seller.login')}}">
                                <span class="material-icons">
                                    account_circle
                                </span>
                                Login
                            </a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Of Navbar --}}
    @yield('content')

    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>
