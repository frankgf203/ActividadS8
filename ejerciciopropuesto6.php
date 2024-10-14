<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-center mt-5">
    <h2>Mel - Tienda de abarrotes</h2>
    <br>
    <form action="" method="post">
        <label for="producto1">Arroz:</label>
        <input type="number" name="producto1" step="0.01" placeholder="0.00" required><br><br>

        <label for="producto2">Azucar:</label>
        <input type="number" name="producto2" step="0.01" placeholder="0.00" required><br><br>

        <label for="producto3">Avena:</label>
        <input type="number" name="producto3" step="0.01" placeholder="0.00" required><br><br>

        <input type="submit" name="calcular" value="Calcular Total">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $producto1 = $_POST['producto1'];
        $producto2 = $_POST['producto2'];
        $producto3 = $_POST['producto3'];

        $total = $producto1 + $producto2 + $producto3;

        if ($total > 100) {
            $descuento = $total * 0.10;  
            $totalConDescuento = $total - $descuento;
            echo "<h3>Total sin descuento: $total soles</h3>";
            echo "<h3>Descuento aplicado: 10% ($descuento soles)</h3>";
            echo "<h3>Total con descuento: $totalConDescuento soles</h3>";
        } else {
            echo "<h3>Total de la compra: $total soles. (No se aplica descuento)</h3>";
        }
    }
    ?>
