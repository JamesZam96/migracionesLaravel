<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Registro de productos</h1>

        <label for="">Ingrese el nombre del producto</label>
        <input type="text" name="name">

        <label for="">Ingrese el precio del producto</label>
        <input type="text" name="price">


        <button type="submit">Registrar</button>
    </form>
</body>
</html>
