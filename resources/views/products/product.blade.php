<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name ?? 'Producto' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    
<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">JD Components</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Productos</a>
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

                @auth
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="user-avatar">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a></li>
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
    @if($product)
    <div class="row">
        <div class="col-md-6">
            <!-- Product Image -->
            @if($product->image_url)
                <img src="{{ asset('storage/' . $product->image_url) }}" class="img-fluid" alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="{{ $product->name }}">
            @endif
        </div>
        
        <div class="col-md-6">
            <!-- Product Details -->
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->category->name ?? 'Categoría no disponible' }}</p>
            <h2>${{ $product->price }}</h2>
            <button id="buyButton" class="btn btn-primary">Comprar</button>  
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <!-- Product Specifications -->
            <h3>Especificaciones del Producto</h3>
            <ul>
                @foreach(explode("\n", $product->specs) as $spec)
                    <li>{{ $spec }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
    <hr>
    <!-- Productos Similares -->
    <h3>Productos Similares</h3>
    <div class="row">
        @foreach($similarProducts as $similarProduct)
        <div class="col-md-3">
            <div class="card">
                @if($similarProduct->image_url)
                    <img src="{{ asset('storage/' . $similarProduct->image_url) }}" class="card-img-top" alt="{{ $similarProduct->name }}">
                @else
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{ $similarProduct->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $similarProduct->name }}</h5>
                    <p class="card-text">${{ $similarProduct->price }}</p>
                    <a href="{{ route('products.show', $similarProduct->id) }}" class="btn btn-primary">Ver Producto</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Producto no encontrado.</p>
    @endif
</div>

<!-- JavaScript para manejar el botón de compra -->
<script>
    document.getElementById('buyButton').addEventListener('click', function() {
        alert('Pedido realizado con éxito');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
