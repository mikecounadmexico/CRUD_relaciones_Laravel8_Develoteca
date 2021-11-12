<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>.
    <link rel="stylesheet" href="{{public_path('css/app.css')}}" type="text/css">
</head>
<body>
    {{-- Lista de libros --}}
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Categoria </th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td> </td>
                    <td>{{ $libro->categoria->Nombre }}</td>
                    <td>{{ $libro->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
