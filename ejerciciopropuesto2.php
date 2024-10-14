<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius a Fahrenheit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<body class="container mt-5">
    <h2 class="nb-4">Convertir grados Celsius(C°) a Fahrenheit(F°)</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="gradoC" class="form-label">grados:</label>
            <input type="number" class="form-control" name="gradoC" id="gradoC" required>   
        </div>
        <button type="submit" class="btn btn-primary">Convertir</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
function conversion($dato){
    $conversion = ($dato*1.8)+32;
    return $conversion;
}
/* Proceso */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gradoC = $_POST['gradoC'];
    
    $Conv = conversion($gradoC);
    echo "<div class='alert alert-success mt-3'>$gradoC grados Celsius(C°) ha sido convertido en $Conv grados Fahrenheit(F°)</div>";
}
?>