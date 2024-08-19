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
            <div class="col-md-6">
                <!-- Carousel -->
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="\img\product01.png" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="\img\product02.png" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="\img\product03.png" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="col-md-6">
                <!-- Product Details -->
                <h1>Product Name</h1>
                <p class="text-muted">Product Category</p>
                <h2>$99.99</h2>
                <button class="btn btn-primary">Add to Cart</button>  
            </div>
        </div>
        <hr>
        <div class="col-md-6">
            <!-- Product Specifications -->
            <h3>Especificaciones del Producto</h3>
            <ul>
                <li>Especificación 1</li>
                <li>Especificación 2</li>
                <li>Especificación 3</li>
                <li>Especificación 4</li>
            </ul>
        </div>
        
        <hr>
        <!-- Similar Products -->
        <h3>Similar Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="similar1.jpg" class="card-img-top" alt="Similar Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Similar Product 1</h5>
                        <p class="card-text">$49.99</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="similar2.jpg" class="card-img-top" alt="Similar Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Similar Product 2</h5>
                        <p class="card-text">$59.99</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="similar3.jpg" class="card-img-top" alt="Similar Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Similar Product 3</h5>
                        <p class="card-text">$69.99</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="similar4.jpg" class="card-img-top" alt="Similar Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Similar Product 4</h5>
                        <p class="card-text">$79.99</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-Gns3yTYaTG8B7N6FRwDG2vcpWseOxO1XWhq9/Ihv2+9u+Y/j5OfJ2tXKP3qf/ot2" crossorigin="anonymous"></script> -->
</body>
</html>
