<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Productos</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .header {
            background-image: url('https://assets2.razerzone.com/images/og-image/1200x630_razerstore-london-page_OG.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">JD Components</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                
                <!-- Menú desplegable de Categorías -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('products.byCategory', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                
                <!-- Menú desplegable de Marcas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Marcas
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($brands as $brand)
                            <li><a class="dropdown-item" href="{{ route('products.byBrand', $brand->id) }}">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('HTML/mensaje.html') }}">Contacto</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form> -->
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
