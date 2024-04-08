<!DOCTYPE html>
<html>
<head>
    <title> Cuadrado</title>
</head>
<body>
    <h1>Área y Perímetro del Cuadrado</h1>
    <form method="post">
        <label for="lado">Ingresa el lado de tu cuadrado:</label>
        <input type="number" name="lado">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $lado = $_POST["lado"];
        $area_cuadrado = pow($lado, 2);
        $perimetro_cuadrado = 4 * $lado;

        echo "<p>Área del cuadrado: $area_cuadrado</p>";
        echo "<p>Perímetro del cuadrado: $perimetro_cuadrado</p>";
    }
    ?>
</body>
</html>