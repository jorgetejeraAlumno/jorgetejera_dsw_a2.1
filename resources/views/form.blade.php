<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulario</title>
</head>
<body>
    <form action='{{route('saveForm')}}' method="post">
        @csrf
        <label for="email">
            Email:
            <input type="text" id="email">
        </label><br><br>
        <label for="modulo">
            Modulo:
            <select name="modulo" id="modulo">
                <option value="dsw">DSW</option>
                <option value="dew">DEW</option>
                <option value="dpl">DPL</option>
                <option value="dor">DOR</option>
                <option value="emr">EMR</option>
            </select>
        </label><br><br>
        <label for="asunto">
            Asunto:
            <input type="text" id="asunto">
        </label><br><br>
        <label for="desc">
            Descripcion:
            <input type="text" id="desc">
        </label><br><br>
        <button type="submit">Enviar duda</button>
    </form>
    
</body>
</html>
