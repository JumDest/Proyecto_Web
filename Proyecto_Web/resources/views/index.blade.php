
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>JD Components</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">JD Components</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	
		<!-- Header -->
		<header class="header">
			<div class="container">
				<h1>Bienvenidos a JD Components</h1>
				<p>Encuentra los mejores componentes para tu PC</p>
			</div>
		</header>
	
		<!-- Productos -->
		<section class="products py-5">
			<div class="container">
				<h2 class="text-center mb-4">Productos Destacados</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 1">
							<div class="card-body">
								<h5 class="card-title">Producto 1</h5>
								<p class="card-text">Descripción del producto 1.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 2">
							<div class="card-body">
								<h5 class="card-title">Producto 2</h5>
								<p class="card-text">Descripción del producto 2.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 3">
							<div class="card-body">
								<h5 class="card-title">Producto 3</h5>
								<p class="card-text">Descripción del producto 3.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 1">
							<div class="card-body">
								<h5 class="card-title">Producto 4</h5>
								<p class="card-text">Descripción del producto 1.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 2">
							<div class="card-body">
								<h5 class="card-title">Producto 5</h5>
								<p class="card-text">Descripción del producto 2.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Producto 3">
							<div class="card-body">
								<h5 class="card-title">Producto 6</h5>
								<p class="card-text">Descripción del producto 3.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section>
	
		<!-- Contacto -->
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
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</section>
	
		<!-- Footer -->
		<footer class="text-center py-4">
			<div class="container">
				<p>&copy; 2023 JD Components. Todos los derechos reservados.</p>
			</div>
		</footer>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
		