<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Actualizar Producto</a>
        </div>  
      </nav><br>
      <div class="container-fluid">
        <form method="POST" action="{{route('product.update', $product->id)}}">
            @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre producto:">
        <label for="nameproduct">Ingrese el nombre:</label>
      </div><br>
      <div class="form-floating">
        <input type="number" name="price" class="form-control" id="price" placeholder="Precio producto:">
        <label for="priceproduct">Ingrese el precio:</label><br>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
    </div>
    </form>
      </div>
      
</body>
</html>