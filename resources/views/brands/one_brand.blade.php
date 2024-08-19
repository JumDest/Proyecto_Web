<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="welcome">Inicio</a>
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
                            <li><a class="dropdown-item" href="#">Categoría 1</a></li>
                            <li><a class="dropdown-item" href="#">Categoría 2</a></li>
                            <li><a class="dropdown-item" href="#">Categoría 3</a></li>
                        </ul>
                    </li>
                    
                    <!-- Menú desplegable de Marcas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marcas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Marca A</a></li>
                            <li><a class="dropdown-item" href="#">Marca B</a></li>
                            <li><a class="dropdown-item" href="#">Marca C</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('HTML/mensaje.html') }}">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">$100.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">$200.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto3.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">$300.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- producto 4 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto4.jpg" class="card-img-top" alt="Producto 4">
                    <div class="card-body">
                        <h5 class="card-title">Producto 4</h5>
                        <p class="card-text">$300.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- producto 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto5.jpg" class="card-img-top" alt="Producto 5">
                    <div class="card-body">
                        <h5 class="card-title">Producto 5</h5>
                        <p class="card-text">$300.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- producto 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto6.jpg" class="card-img-top" alt="Producto 6">
                    <div class="card-body">
                        <h5 class="card-title">Producto 6</h5>
                        <p class="card-text">$300.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- producto 7 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="producto7.jpg" class="card-img-top" alt="Producto 7">
                    <div class="card-body">
                        <h5 class="card-title">Producto 7</h5>
                        <p class="card-text">$300.00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-Gns3yTYaTG8B7N6FRwDG2vcpWseOxO1XWhq9/Ihv2+9u+Y/j5OfJ2tXKP3qf/ot2" crossorigin="anonymous"></script> -->
</body>
</html>
