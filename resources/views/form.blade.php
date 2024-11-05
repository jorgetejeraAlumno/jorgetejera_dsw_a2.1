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
        @if(isset($doubt1))
        <form action='{{route('editForm',$doubt1['id'])}}' method="post">
            @method('PUT')
        @else
        <form action='{{route('saveForm')}}' method="post">
            @method('POST')
        @endif
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
                @if(!isset($doubt1))
                    
                <option value="" >Elige...</option>
                @else
                <option></option>
                @endif
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
            <input type="text" name="asunto" >
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
        <label for="color">
            Color:
            <input type="text" name='color'>
            @if($errors->any())
            <span style="color: red;">{{ $errors->first('color')}}</span>
            @endif
        </label><br>
        <button type='submit'>Enviar duda</button>
    </form>
    <a href={{route('list')}}><button id="btn_list">Ver Listado</button></a>
    
    </main>

    
</body>
</html>

