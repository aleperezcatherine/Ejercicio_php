<!DOCTYPE html>
<html>
<head>
    <title>Sorteo</title>
</head>
<body>
    <h1> Ingresa tu nombre y paticipa en nuestro Sorteo</h1>
    <form method="post">
        <label for="nombre">Ingresa tu nombre: </label>
        <input type="text" name="nombre">
        <input type="submit" value="Ingresa al sorteo sorteo">
    </form>

    <?php
    if ($_POST) {
        $nombre = $_POST["nombre"];

        $ganador = rand(0, 1);

        if ($ganador) {
            echo "<p>Felicidades, $nombre, ¡has ganado!</p>";
        } else {
            echo "<p>Lo siento, $nombre, no has ganado esta vez.</p>";
        }
    }
    ?>
</body>
</html>