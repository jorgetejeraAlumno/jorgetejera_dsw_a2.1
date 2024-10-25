<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>Listado</title>
</head>
<body>
    <main>
        <table border="1px" class="tabla_duda">
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
                <td>
                    <form action="{{route('delete_db',$doubt['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            ELIMINAR
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            @endif
            <tr>
                <td colspan="4"><a href={{route('show.form')}}><button id="btn_return">Registrar nueva duda</button></a></td>
            </tr>
        </table>

    </main>
    

</body>
</html>