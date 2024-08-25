<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">JD Components</a>
        <!-- Menú y otras partes del navbar aquí -->
    </div>
</nav>

<div class="container mt-5">
    <h1>Carrito de Compras</h1>
    @foreach ($shopCars as $shopCar)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Carrito ID: {{ $shopCar->id }}</h5>
                <p class="card-text"><strong>Total:</strong> ${{ number_format($shopCar->total, 2) }}</p>
                <h6>Detalles:</h6>
                <ul>
                    @foreach ($shopCar->details as $detail)
                        <li>{{ $detail->product->name }} - Cantidad: {{ $detail->quantityShopCar }} - Precio unitario: ${{ number_format($detail->product->price, 2) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
