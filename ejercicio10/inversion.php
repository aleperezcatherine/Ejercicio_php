<!DOCTYPE html>
<html>
<head>
    <title> Inverso</title>
</head>
<body>
    <h1>Cadena en un Orden Inverso</h1>
    <form method="post">
        <label for="cadena">Ingresa una cadena de texto: </label>
        <input type="text" name="cadena">
        <input type="submit" value="Mostrar inverso">
    </form>

    <?php
    if ($_POST) {
        $cadena = $_POST["cadena"];
        $cadena_inversa = strrev($cadena);

        echo "<p>Cadena en orden inverso: <strong>$cadena_inversa</strong></p>";
    }
    ?>
</body>
</html>