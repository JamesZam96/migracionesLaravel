<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('headquarter.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Registro de cuarteles</h1>

        <label for="">Ingrese el nombre del cuartel</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Ingrese la ubicación del cuartel</label>
        <input type="text" name="location">
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
