<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>formulario</title>
</head>
<body>
    <header>
        <h1>Formulario de dudas</h1>
    </header>
    <main>
        <form action='{{route('saveForm')}}' method="post">
        @csrf
        <label for="email">
             Email:
            <input type="text" name="email">
            @if($errors->any())
            <span style="color: red;">{{ $errors->first('email')}}</span>
        @endif
        </label><br><br>
        
        <label for="modulo">
            Modulo:
            <select name="modulo" id="modulo">
                <option value="" >Elige...</option>
                <option value="dsw">DSW</option>
                <option value="dew">DEW</option>
                <option value="dpl">DPL</option>
                <option value="dor">DOR</option>
                <option value="emr">EMR</option>
            </select>
            @if($errors->any())
                <span style="color: red;">{{ $errors->first('modulo')}}</span>
            @endif
        </label><br><br>

        <label for="asunto">
            Asunto:
            <input type="text" name="asunto">
            @if($errors->any())
                @foreach ($errors->get('asunto') as $error)
                    <span style="color: red">{{$error}}</span>
                @endforeach
            @endif
        </label><br><br>
        <label for="desc">
            Descripcion:
            <input type="text" name="desc">
            @if($errors->any())
            <span style="color: red;">{{ $errors->first('desc')}}</span>
                
            @endif
        </label><br><br>
        <button type="submit">Enviar duda</button>
    </form>
    
    </main>

    
</body>
</html>
