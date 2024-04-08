<!DOCTYPE html>
<html>
<head>
    <title> Círculo</title>
</head>
<body>
    <h1>Área y Perímetro del Círculo</h1>
    <form method="post">
        <label for="radio">Radio del círculo:</label>
        <input type="number" name="radio">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $radio = $_POST["radio"];
        $area = 3.141516 * pow($radio, 2);
        $perimetro = 2 * 3.141516 * $radio;

        echo "<p>Área del círculo: $area </p>";
        echo "<p>Perímetro del círculo: $perimetro</p>";
    }
    ?>
</body>
</html>