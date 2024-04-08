<!DOCTYPE html>
<html>
<head>
    <title> Moneda</title>
</head>
<body>
    <h1>Conversor de Quetzales a Euros</h1>
    <form method="post">
        <label for="cantidad">Ingresa la cantidad que tienes enquetzales:</label>
        <input type="number" name="cantidad">
        <input type="submit" value="Convertir a Euros">
    </form>

    <?php
    if ($_POST) {
        $tasa_cambio = 0.12; 
        $cantidad_gtq = $_POST["cantidad"];
        $cantidad_eur = $cantidad_gtq * $tasa_cambio;

        echo "<p> Q $cantidad_gtq quetzales equivale a <strong>$cantidad_eur euros</p>";
    }
    ?>
</body>
</html>