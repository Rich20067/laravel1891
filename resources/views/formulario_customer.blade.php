<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Formulario Cliente</a>
        </div>
      </nav>
      <br>

      <div class="container-fluid">
        <form method="POST" action="{{route('customer.store')}}">
            @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre:">
        <label for="name">Ingrese el nombre:</label>
      </div><br>
      <div class="form-floating">
        <input type="text" name="address" class="form-control" id="address" placeholder="Direccion:">
        <label for="address">Ingrese la direccion:</label><br>
    </div>
    <div class="form-floating">
        <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="Fecha nacimiento:">
        <label for="birth_date">Ingrese la fecha de nacimiento:</label><br>
    </div>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
    
    </form>
      </div>
</body>
</html>