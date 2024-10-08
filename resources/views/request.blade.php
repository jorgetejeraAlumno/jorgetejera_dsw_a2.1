<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>Request</title>
</head>
<body>
    <header><h1>Duda registrada con exito</h1></header>
    <main>
        <a href={{route('show.form')}}><button id="btn_return">Registrar nueva duda</button></a>
    </main>
</body>
</html>