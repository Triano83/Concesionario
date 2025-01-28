<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cochesIndex.css')}}">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Concesionario</h1>
        <nav>
            <a href="{{route('coches.create')}}"><button>Crear coche</button></a>
        </nav>
    </header>

    <form action="{{route('coches.index')}}" method="get">
        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca"><br><br>
        <label for="modelo">Modelo:</label><br>
        <input type="text" id="modelo" name="modelo"><br><br>
        <label for="color">Color:</label><br>
        <input type="text" id="color" name="color"><br><br>
        <label for="matricula">Matricula:</label><br>
        <input type="text" id="matricula" name="matricula"><br><br>
        <input type="submit" value="Buscar">
    </form>
    <ul>
        @foreach($coches as $coche)
        <h2>{{$coche->marca}}</h2>
        <li>{{$coche->modelo}}</li>
        <li>{{$coche->color}}</l>
        <li>{{$coche->matricula}}</li>
        <li>
            <form action="/coches/{{$coche->id}}" method="post" class="none">
                @csrf
                @method('DELETE')
                <Button>Borrar Coche</Button>

            </form>
        </li>

        <li><a href="{{route('coches.edit', $coche->id)}}"><button>Editar Coche</button></a></li>

        @endforeach
    </ul>



</body>

</html>