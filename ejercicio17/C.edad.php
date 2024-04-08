<!DOCTYPE html>
<html>
<head>
    <title> Edad</title>
</head>
<body>
    <h1>Es hora de verificar cuanto años tienes</h1>
    <form method="post">
        <label for="fecha_nacimiento">Ingresa tu fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento">
        <input type="submit" value="Calcular Edad">
    </form>

    <?php
    if ($_POST) {
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $fecha_actual = date("Y-m-d");

        $diferencia = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual));

        $anios = $diferencia->y;
        $meses = $diferencia->m;
        $dias = $diferencia->d;

        echo "<p>Tu tienes: <strong>$anios años</strong>.</p>";
    }
    ?>
</body>
</html>