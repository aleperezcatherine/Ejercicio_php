<!DOCTYPE html>
<html>
<head>
    <title>Año</title>
</head>
<body>
    <h1>Miremos si en un año Bisiesto</h1>
    <form method="post">
        <label for="anio">Ingresa un año:</label>
        <input type="number" name="anio">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_POST) {
        $anio = $_POST["anio"];

        //formula
        if (($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0) {
            echo "<p>$anio es un año bisiesto :)</p>";
        } else {
            echo "<p>$anio no es un año bisiesto :)</p>";
        }
    }
    ?>
</body>
</html>