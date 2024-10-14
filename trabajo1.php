<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suma de dos numeros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2 class="nb-4">Suma de dos numeros</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="num1" class="form-label">Numero 1</label>
            <input type="number" class="form-control" name="num1" id="num1" required>   
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Numero 2</label>
            <input type="number" class="form-control" name="num2" id="num2" required>   
        </div>
        <button type="submit" class="btn btn-primary">Sumar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
    function sumar($a,$b){
        $sumar = $a + $b;
        return $sumar;
    }
    /*Proceso*/
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = sumar($num1,$num2);
        echo "<div class='alert alert-success mt-3'>La suma es: $resultado</div>";
    }
?>