<!DOCTYPE html>
<html>
<head>
    <title>Resultado: Tabla de Multiplicar</title>
</head>
<body>
    <h2>Resultado: Tabla de Multiplicar</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        echo "<h3>Tabla de Multiplicar del $numero:</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Error: No se recibió ningún número.</p>";
    }
    ?>

    <a href="multiplicacion.php">Volver al inicio</a>
</body>
</html>
