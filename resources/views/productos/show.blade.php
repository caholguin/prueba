<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>Producto</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('productos.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ventas.index') }}">Ventas</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    @if (session('info'))       
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('info') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card container mt-4">
    <form action="{{route('ventas.store')}}" method="POST" class="row g-3">       
        @csrf


        <h1>{{$producto->nombre}}</h1>

        <p>{{$producto->referencia}}</p>
        <p>Precio: $ {{$producto->precio}}</p>
        <p>Stock: {{$producto->stock}}</p>
        <p>Categoria: {{$producto->categoria}}</p>
        <p>Peso: {{$producto->peso}}</p>


        <div class="col-md-4">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{old('cantidad')}}">
          
            @error('cantidad')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <input type="hidden" name="producto_id" value="{{$producto->id}}">
       
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-secondary" href="{{route('productos.index')}}">Cancelar</a>
        </div>
    </form>
    </div>
</body>
</html>