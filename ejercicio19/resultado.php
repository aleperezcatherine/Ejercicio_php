<!DOCTYPE html>
<html>
<head>
    <title>Palabras Prohibidas</title>
</head>
<body>
    <h2>Resultado: Remplazador de Palabras Prohibidas</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['texto'], $_POST['palabras_prohibidas'])) {
        $texto = $_POST['texto'];
        $palabras_prohibidas = explode(",", $_POST['palabras_prohibidas']);

        // las palabras prohibidas van a ser asteriscos
        foreach ($palabras_prohibidas as $palabra) {
            $texto = str_ireplace(trim($palabra), str_repeat("*", strlen($palabra)), $texto);
        }

        echo "<p>$texto</p>";
    } else {
        echo "<p>No se recibió todo los datos necesarios.</p>";
    }
    ?>

    <a href="palabras_prohibidas.php">Volver al inicio</a>
</body>
</html>
