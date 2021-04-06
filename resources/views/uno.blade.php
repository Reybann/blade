<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esta es la réplica del archivo 1 o el archivo 1 en sí y el paso '2' en este caso</title>
</head>
<body align="center">
    <br><br><br><br><br><br><br><br>
    @include('articulo.dos')
    @include('final')

    <p>
    -------------- (esto es del 'uno')
    </p>

    @yield('content')
    @yield('content2')
    @yield('content3')
    
</body>
</html>