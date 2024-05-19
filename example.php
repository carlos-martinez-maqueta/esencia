<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flatpickr Example</title>
    <!-- Incluir estilos de Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <h1>Selecciona dos fechas:</h1>
    <!-- Campos de entrada de fechas -->
    <input type="text" id="fecha1" placeholder="Selecciona una fecha">
    <input type="text" id="fecha2" placeholder="Selecciona otra fecha">
    
    <!-- Incluir scripts de Flatpickr y tu código JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#fecha1");
        flatpickr("#fecha2");
    </script>
</body>
</html>
