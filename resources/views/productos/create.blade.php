<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>Crear producto</title>
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

    <div class="container mt-4">
        <h4>Nuevo producto</h4>

        <div class="card container mt-4">

            <form action="{{route('productos.store')}}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}">

                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input type="text" class="form-control" name="referencia" id="referencia" value="{{old('referencia')}}">

                    @error('referencia')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="precio" class="form-label">precio</label>
                    <input type="number" class="form-control" name="precio" id="precio" value="{{old('precio')}}">

                    @error('precio')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" value="{{old('categoria')}}">

                    @error('categoria')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
              {{--   <div class="col-md-4">
                    <label for="fecha_creacion" class="form-label">fecha_creación</label>
                    <input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion">

                    @error('fecha_creacion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div> --}}
                <div class="col-md-2">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control" name="peso" id="peso" value="{{old('peso')}}">

                    @error('peso')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" value="{{old('stock')}}">

                    @error('stock')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-secondary" href="{{route('productos.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
