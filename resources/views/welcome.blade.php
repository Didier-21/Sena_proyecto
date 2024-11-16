
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida a la Institución Educativa San José</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .rotating {
            animation: rotation 2s infinite linear;
        }
        @keyframes rotation {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="CDR" class="rotating mx-auto" style="width:100px; height: auto;">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenida a la Institución Educativa San José</h1>
        <p class="mt-4 text-lg text-gray-600">Página en construcción. Disculpa por los inconvenientes.</p>
    </div>
</body>
</html>
