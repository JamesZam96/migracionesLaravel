<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Registro de compañias</h1>

        <label for="">Ingrese la actividad principal de la compañia</label>
        <input type="text" name="principalActivity">
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
