
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>JD Components</title>
		<link rel="stylesheet" href="/css/styles.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js desde CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> <!-- jsPDF desde CDN -->
        <script src="{{ asset('js/reporte.js') }}" defer></script> <!-- Vincula el archivo JS -->
        <style>
			.header {
				background-image: url('https://assets2.razerzone.com/images/og-image/1200x630_razerstore-london-page_OG.jpg');
				background-size: cover;
				background-position: center;
				color: white;
				text-align: center;
				padding: 100px 0;
			}
			.products .card {
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
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
							<a class="nav-link" href="{{ asset('HTML/mensaje.html') }}">Contacto</a>
						</li>
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
					<div class="col-md-4">
						<div class="card">
							<img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2017/09/Acer_Nitro_5_04.jpg" class="card-img-top" alt="Asus Nitro 5">
							<div class="card-body">
								<h5 class="card-title">Asus Nitro 5</h5>
								<p class="card-text">El Acer Nitro 5 es una laptop gaming de 15.6 pulgadas con procesadores Intel o AMD y gráficas NVIDIA, ideal para gamers que buscan potencia a buen precio. Además, ofrece un sistema de refrigeración eficiente y un teclado retroiluminado para una experiencia de juego cómoda y fluida. Su diseño lo hacen para juegos y para tareas diarias.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://img.global.news.samsung.com/uk/wp-content/uploads/2020/06/Odyssey-G9_2.jpg" class="card-img-top" alt="Odyssey G9">
							<div class="card-body">
								<h5 class="card-title">Odyssey G9</h5>
								<p class="card-text">El Samsung Odyssey G9 es un monitor gaming curvo ultrapanorámico de 49 pulgadas, con una resolución de 5120x1440, tasa de refresco de 240Hz y un tiempo de respuesta de 1ms. Su curvatura 1000R y tecnología QLED ofrecen una inmersión total y colores vibrantes. Es ideal para gamers que buscan una experiencia visual envolvente y fluida.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2019/10/Razer-Viper-Ultimate-1-e1571390770326.jpg" class="card-img-top" alt="Razer Viper Ultimate">
							<div class="card-body">
								<h5 class="card-title">Razer Viper Ultimate</h5>
								<p class="card-text">El Razer Viper Ultimate es un mouse inalámbrico para gaming, ultraligero y ambidiestro, con un sensor óptico de 20,000 DPI, tecnología inalámbrica Razer HyperSpeed, y switches ópticos rápidos. Ofrece hasta 70 horas de batería y viene con una base de carga RGB. Es ideal para gamers que buscan velocidad y precisión sin cables.</p>
								<a href="#" class="btn btn-primary">Comprar</a>
							</div>
						</div>
					</div>
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
        <section>
            <h2>Generar reporte de portátiles por marca</h2>

            <!-- Botón para generar el reporte en PDF -->
            <button id="boton-portatiles" class="btn btn-primary">Generar PDF</button>

            <!-- Canvas para el gráfico -->
            <canvas id="graficoPortatiles" width="400" height="200"></canvas>
        </section>

		<footer class="text-center py-4">
			<div class="container">
				<p>&copy; 2024 JD Components. Todos los derechos reservados ©.</p>
			</div>
		</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="{{ asset('js/mensaje.js') }}" defer></script>
	</body>
</html>

