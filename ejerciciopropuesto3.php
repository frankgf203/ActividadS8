<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El numero mayor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2 class="nb-4">Detectar el numero mayor</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="numero1" class="form-label">Numero 1:</label>
            <input type="number" class="form-control" name="numero1" id="numero1" required>   
        </div>
        <div class="mb-3">
            <label for="numero2" class="form-label">Numero 2:</label>
            <input type="number" class="form-control" name="numero2" id="numero2" required>   
        </div>
        <div class="mb-3">
            <label for="numero3" class="form-label">Numero 3:</label>
            <input type="number" class="form-control" name="numero3" id="numero3" required>   
        </div>
        <button type="submit" class="btn btn-primary">Formular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
function Detectar($dato1, $dato2, $dato3){
    $Detectar = max($dato1, $dato2, $dato3);
    return $Detectar;
}
/* Proceso */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    
    $Resp = Detectar($numero1,$numero2,$numero3);
    echo "<div class='alert alert-success mt-3'>El numero mayor es $Resp.</div>";
}
?>