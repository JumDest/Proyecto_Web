<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Productos</title>
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf@2.6.0/dist/jspdf.umd.min.js"></script>
    <script src="{{ asset('js/reporte.js') }}" defer></script>
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
                    <a class="nav-link" href="#">Productos</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @auth
                                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('support_Team')) <!-- Verifica si el usuario tiene el rol de administrador o soporte -->
                                    <a href="{{ route('categories.index') }}" class="dropdown-item">Gestionar</a>
                                @endif
                            @endauth
                        </li>
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('products.byCategory', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Marcas
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @auth
                                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('support_Team')) <!-- Verifica si el usuario tiene el rol de administrador o soporte -->
                                    <a href="{{ route('brands.index') }}" class="dropdown-item">Gestionar</a>
                                @endif
                            @endauth
                        </li>
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
@auth
    @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('support_Team')) <!-- Verifica si el usuario tiene el rol de administrador o soporte -->
        <div class="text-center mt-4">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Gestionar Producto</a>
        </div>
    @endif
@endauth

<div class="container mt-5">
    <h1>Lista de Productos</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $product->image_url ? asset('storage/' . $product->image_url) : 'default-image.jpg' }}" class="card-img-top img-size" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>

                        <p class="card-text"><strong>Calificaciones:</strong>
                            @if($product->rates->count() > 0)
                                @php
                                    $averageScore = $product->rates->average('score'); // Calcular promedio
                                @endphp
                                {{ number_format($averageScore, 1) }} / 5 ({{ $product->rates->count() }} calificaciones)
                            @else
                                Sin calificaciones
                            @endif
                        </p>

                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Ver</a>
                        @auth
                            @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('support_Team'))
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@auth
    @if (Auth::user()->hasRole('admin')) <!-- Verifica si el usuario tiene el rol de administrador -->
        <center>
            <div class="column">
                <h1>Generar archivo PDF y Contar Portátiles HP</h1><br>
                <button class='btn btn-primary' onclick="window.location.href='{{ route('reporte.generate') }}'">PDF Productos</button>
                <button class='btn btn-primary' id="generateReport">Contar Portátiles HP</button>
                <p id="hpCount"></p>
                <canvas id="productChart" width="400" height="200"></canvas>
            </div>
        </center>
    @endif
@endauth


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
