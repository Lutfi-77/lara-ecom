<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>

    <style>
        html, body{
            width: 100%;
            height: 100%;
        }

        .otp{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-light bg-light d-none d-sm-block d-sm-none d-md-block">
        <div class="container__custom">
            <div class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30"
                    height="24">
                <h3>Logo</h3>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="otp">{{$otp->otp}}</h3>
    </div>

</body>
</html>