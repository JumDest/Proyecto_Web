<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name ?? 'Producto' }}</title>
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpeg">
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

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($product)
    <div class="row">
        <div class="col-md-6">
            @if($product->image_url)
                <img src="{{ asset('storage/' . $product->image_url) }}" class="img-fluid" alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="{{ $product->name }}">
            @endif
        </div>

        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->category->name ?? 'Categoría no disponible' }}</p>
            <h2>${{ $product->price }}</h2>
            <button id="buyButton" class="btn btn-primary">Comprar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h3>Especificaciones del Producto</h3>
            <ul>
                @foreach(explode("\n", $product->specs) as $spec)
                    <li>{{ $spec }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <h3>Calificaciones</h3>

            @auth
            <div class="mb-3">
                <form action="{{ route('rates.store') }}" method="POST">
                    @csrf

                    <label for="score">Calificación:</label>
                    <div class="rating">
                        <input type="radio" name="score" value="5" id="star5" />
                        <label for="star5" class="star">&#9733;</label>
                        <input type="radio" name="score" value="4" id="star4" />
                        <label for="star4" class="star">&#9733;</label>
                        <input type="radio" name="score" value="3" id="star3" />
                        <label for="star3" class="star">&#9733;</label>
                        <input type="radio" name="score" value="2" id="star2" />
                        <label for="star2" class="star">&#9733;</label>
                        <input type="radio" name="score" value="1" id="star1" />
                        <label for="star1" class="star">&#9733;</label>
                    </div>

                    <label for="comment">Comentario:</label>
                    <textarea name="comment" class="form-control" rows="3"></textarea>

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                    <button type="submit" class="btn btn-primary mt-3">Enviar Calificación</button>
                </form>
            </div>
            @endauth

            @if($rates->count())
                <ul class="list-group">
                    @foreach($rates as $rate)
                        <li class="list-group-item">
                            <strong>Calificación: {{ $rate->score }}</strong>
                            <p>{{ $rate->comment }}</p>
                            <small class="text-muted">Por: {{ $rate->user->name ?? 'Usuario Anónimo' }}</small>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No hay calificaciones para este producto.</p>
            @endif
        </div>
    </div>

    <hr>
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
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
