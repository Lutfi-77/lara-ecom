<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify your account</title>
</head>
<body>
    <h1>Hello {{$data['name']}}</h1>
    <p>
        Click <a href="{{url('verifyseller/code/'.$data['verif_code'])}}">here</a> to verify your account
    </p>
</body>
</html>