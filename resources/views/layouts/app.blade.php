<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Platzi Laravel - @yield('title')</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-xs-12 content">
            @yield('content')
        </div>
        </div>
    </div>
</body>
</html>
