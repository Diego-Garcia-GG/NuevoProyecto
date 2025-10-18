<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Potencia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4 text-center">
        <h2 class="mb-4">Cálculo de Potencia</h2>
        <p>
            La base <strong>{{ $base }}</strong> elevada al exponente
            <strong>{{ $exponente }}</strong> es:
        </p>
        <h3 class="text-success">{{ $resultado }}</h3>

        <a href="/" class="btn btn-primary mt-3">Volver al inicio</a>
    </div>
</div>

</body>
</html>
