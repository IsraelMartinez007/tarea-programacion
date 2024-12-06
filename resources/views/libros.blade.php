<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Libros</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Editorial</th>
                <th>Titulo</th>
                <th>Numero de Edicion</th>
                <th>Numero de Ejemplar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->id_editorial}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->numedicion}}</td>
                <td>{{$libro->numejemplar}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>