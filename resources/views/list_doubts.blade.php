<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Email</th>
            <th>Modulo</th>
            <th>Asunto</th>
            <th>Duda</th>
        </tr>
        @if(isset($dudas))
            @foreach($dudas as $doubt )
            <tr>
            <td>{{$doubt['email']}}</td>
            <td>{{$doubt['modulo']}}</td>
            <td>{{$doubt['asunto']}}</td>
            <td>{{$doubt['desc']}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</body>
</html>