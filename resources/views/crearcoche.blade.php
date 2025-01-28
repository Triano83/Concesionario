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
            <a href="{{route('coches.index')}}"><button>Principal</button></a>
        </nav>
    </header>
    <form action="{{route('coches.store')}}" method="post">
        @csrf
        <label for="marca">Marca</label><br>
        <input type="text" name="marca"><br>
        <label for="modelo">Modelo</label><br>
        <input type="text" name="modelo"><br>
        <label for="color">Color</label><br>
        <input type="text" name="color"><br>
        <label for="matricula">Matricula</label><br>
        <input type="text" name="matricula"><br>
        <input type="submit" value="Crear"><br>
    </form>
    <span></span>

    
</body>
</html>