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

    <title>Productos</title>
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

    <div class="container">
        <a href="{{route('productos.create')}}" class="btn btn-success mt-4">Nuevo</a>


        <div class="mt-2 card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">nombre</th>
                        <th scope="col">referencia</th>
                        <th scope="col">precio</th>
                        <th scope="col">peso</th>
                        <th scope="col">categoria</th>
                        <th scope="col">stock</th>
                        <th scope="col">fecha_creacion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->referencia }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->peso }}</td>
                            <td>{{ $producto->categoria }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->fecha_creacion }}</td>
                            <td width="10px">
                                <a href="{{route('productos.edit',$producto)}}" class="btn btn-primary btn-sm">Editar</a>                                
                            </td>
                            <td width="10px">                                
                                <form action="{{route('productos.destroy',$producto)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</body>

</html>
