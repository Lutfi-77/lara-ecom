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
                    Register
                </h3>
                <div class="card">
                    <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                                {{$error}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endforeach
                        @endif

                        @if (session('verifikasi'))
                            <div class="alert alert-success mb-3" role="alert">
                                {{session('verifikasi')}}
                            </div>
                        @endif
                        <form action="{{route('user.storeRegister')}}" method="post">
                            @csrf
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control mb-3" name="name" placeholder="Name">

                            <label class="form-label">Address</label>
                            <input type="text" class="form-control mb-3" name="address" placeholder="Address">

                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control mb-3" name="phone" placeholder="phone">

                            <label class="form-label">email</label>
                            <input type="email" class="form-control mb-3" name="email" placeholder="Email">

                            <label class="form-label">Password</label>
                            <input type="password" class="form-control mb-3" name="password" placeholder="Password">

                            <button class="btn btn-success w-100">Register</button>
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
