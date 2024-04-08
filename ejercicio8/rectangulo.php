<!DOCTYPE html>
<html>
<head>
    <title> Rectángulo</title>
</head>
<body>
    <h1>Área y Perímetro del Rectángulo</h1>
    <form method="post">
        <label for="base">Base del rectángulo:</label>
        <input type="numer" name="base">
        <label for="altura">Altura del rectángulo:</label>
        <input type="numer" name="altura">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area_rectangulo = $base * $altura;
        $perimetro_rectangulo = 2 * ($base + $altura);

        echo "<p>Área del rectángulo: $area_rectangulo</p>";
        echo "<p>Perímetro del rectángulo: $perimetro_rectangulo</p>";
    }
    ?>
</body>
</html>