<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Primos</a>
        </div>
      </nav>
      <br>

      <div class="container-fluid">
        <form method="POST" action="{{route('cousin.store')}}">
            @csrf
      <div class="form-floating">
        <input type="number" name="numero" class="form-control" id="numero" placeholder="Numero">
        <label for="numero">Ingrese el numero:</label>
       <br>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
    </div>
    </form>
      </div>
      

      
</body>
</html>