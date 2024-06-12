<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Usuario</title>
</head>
<body>

    <form action="{{ route('usuario.update', $usuario) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input name="name" type="text" value="{{ old('name', $usuario->name) }}">
            <br>
        </label>
        <br>

        <label>
            Número de Teléfono:
            <br>
            <input name="phone_number" type="text" value="{{ old('phone_number', $usuario->phone_number) }}">
            <br>
        </label>
        <br>

        <label>
            Código:
            <br>
            <input name="code" type="text" value="{{ old('code', $usuario->code) }}">
            <br>
        </label>
        <br>

        <label>
            Dirección:
            <br>
            <input name="address" type="text" value="{{ old('address', $usuario->address) }}">
            <br>
        </label>
        <br>

        <button type="submit">Actualizar Usuario</button>
       
    </form>
   
</body>
</html>