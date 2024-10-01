<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD Components</title>
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

    <header class="header">
        <div class="container">
            <h1>Bienvenidos JD Components</h1>
            <p>Encuentra los mejores componentes para tu PC</p>
        </div>
    </header>

    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Productos Destacados</h2>
            <div class="row">
                @foreach($featuredProducts as $product)
                <div class="col-md-4">
                    <div class="card">
                        @if($product->image_url)
                            <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{ $product->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ $product->price }}</p>
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
    </section>

    <section class="contact py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button class ="btn btn-success" id="myButton">Enviar</button>
            </form>
        </div>
    </section>

    <footer class="text-center py-4">
        <div class="container">
            <p>&copy; 2024 JD Components. Todos los derechos reservados ©.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/mensaje.js') }}" defer></script>
    <script src="estilos.css"></script>
</body>
</html>
