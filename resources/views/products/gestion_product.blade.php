<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Productos</title>
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">JD Components</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brands.index') }}">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categorías</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown d-flex align-items-center">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="user-avatar">
                                <span class="me-2">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                        </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Gestionar Productos</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="name" name="name" required>

                <label for="description" class="form-label">Descripción del Producto</label>
                <input type="text" class="form-control" id="description" name="description" required>

                <label for="price" class="form-label">Precio del Producto</label>
                <input type="number" class="form-control" id="price" name="price" required>

                <label for="stock" class="form-label">Stock del Producto</label>
                <input type="number" class="form-control" id="stock" name="stock" required>

                <label for="specs" class="form-label">Especificaciones del Producto</label>
                <input type="text" class="form-control" id="specs" name="specs" required>

                <label for="brand_id" class="form-label">Marca del Producto</label>
                <select class="form-select" id="brand_id" name="brand_id" required>
                    <option value="">Selecciona una marca</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>

                <label for="category_id" class="form-label mt-3">Categoría del Producto</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen del Producto</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
