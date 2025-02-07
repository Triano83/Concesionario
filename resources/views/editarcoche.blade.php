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
            <a href="{{route('coches.index')}}"><Button>Pagina Principal</Button></a>
        </nav>
    </header>
    <h2>Editar Coche</h2>
    <form action="{{route('coches.update', $coche->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="{{$coche->marca}}">
        <br>
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="{{$coche->modelo}}">
        <br>    
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" value="{{$coche->color}}">
        <br>
        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="matricula" value="{{$coche->matricula}}">
        <br>
        <input type="submit">
    </form>
</body>
</html>