<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promedios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2 class="nb-4">Promedio de tres números</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="num1" class="form-label">Primer número:</label>
            <input type="number" class="form-control" name="num1" id="num1" required>   
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Segundo número:</label>
            <input type="number" class="form-control" name="num2" id="num2" required>   
        </div>
        <div class="mb-3">
            <label for="num3" class="form-label">Tercer número:</label>
            <input type="number" class="form-control" name="num3" id="num3" required>   
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
        function promedio($a, $b, $c) {
            $promedio = ($a + $b + $c) / 3;
            return $promedio;
        }
        /* Proceso */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            
            $resultado = promedio($num1, $num2, $num3);
            echo "<div class='alert alert-success mt-3'>El promedio es: $resultado</div>";
        }
    ?>