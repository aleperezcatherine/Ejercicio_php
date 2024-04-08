<!DOCTYPE html>
<html>
<head>
    <title>Resultado de determinar el mayor</title>
</head>
<body>
    <h2>Resultado de determinar el mayor</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        function encontrarMayor($a, $b, $c) {
            if ($a >= $b && $a >= $c) {
                return $a;
            } elseif ($b >= $a && $b >= $c) {
                return $b;
            } else {
                return $c;
            }
        }

        $mayor = encontrarMayor($num1, $num2, $num3);
        echo "<p>El mayor de los tres números es: $mayor</p>";
    }
    ?>

    <a href="NumeroMayor.php">Volver al formulario</a>
</body>
</html>
