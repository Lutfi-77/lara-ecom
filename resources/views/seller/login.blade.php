<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/seller/login.css')}}">
    <title>Hello, world!</title>
</head>

<body class="d-flex flex-row align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-4">
                <h3 class="text-center mb-3">
                    Login
                </h3>
                <div class="card">
                    <div class="card-body">
                        @if ( session('error') )
                        <div class="alert alert-warning mb-3" role="alert">
                            {{session('error')}}
                        </div>
                        @endif
                        <form action="{{route('seller.auth')}}" method="post">
                            @csrf
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control mb-3" name="email" placeholder="Email">

                            <label class="form-label">Password</label>
                            <input type="text" class="form-control mb-3" name="password" placeholder="Password">

                            <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>

                            <div>
                                <a href="#" class="text-decoration-none">Lupa password?</a>

                            </div>

                            <div>
                                <a href="{{route('seller.register')}}" class="text-decoration-none">Register</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
