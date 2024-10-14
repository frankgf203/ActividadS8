<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-center mt-4 mb-4">
    <h2>Calculadora en PHP</h2>
    <form action="" method="post">
        <label for="texto" class="form-label">Escriba los numeros a tratar</label><br>
        <input type="number" name="num1" id="num1" required><br>
        <input type="number" name="num2" id="num2" required><br>
        <select name="operacion">
            <option value="sumar">Adición</option>
            <option value="restar">Sustracción</option>
            <option value="multiplicar">Multiplicación</option>
            <option value="dividir">División</option>
        </select>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                echo "<h3>Resultado: $num1 + $num2 = $resultado</h3>";
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                echo "<h3>Resultado: $num1 - $num2 = $resultado</h3>";
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                echo "<h3>Resultado: $num1 * $num2 = $resultado</h3>";
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "<h3>Resultado: $num1 / $num2 = $resultado</h3>";
                } else {
                    echo "<h3>No se puede dividir entre cero</h3>";
                }
                break;
            default:
                echo "<h3>Operación no válida</h3>";
                break;
        }
    }
    ?>