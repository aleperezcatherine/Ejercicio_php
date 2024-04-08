<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>El resultado de tu Conversión de Temperatura es el siguiente</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['temp'], $_POST['opcion'])) {
        $temperatura = $_POST['temp'];
        $opcion = $_POST['opcion'];
        $resultado = 0;

        switch ($opcion) {
            case 'celsiusToFahrenheit':
                $resultado = ($temperatura * 9/5) + 32;
                echo "<p>$temperatura grados Celsius equivale a $resultado grados Fahrenheit.</p>";
                break;
            case 'fahrenheitToCelsius':
                $resultado = ($temperatura - 32) * 5/9;
                echo "<p>$temperatura grados Fahrenheit equivale a $resultado grados Celsius.</p>";
                break;
            case 'celsiusToKelvin':
                $resultado = $temperatura + 273.15;
                echo "<p>$temperatura grados Celsius equivale a $resultado Kelvin.</p>";
                break;
            case 'kelvinToCelsius':
                $resultado = $temperatura - 273.15;
                echo "<p>$temperatura Kelvin equivale a $resultado grados Celsius.</p>";
                break;
            default:
                echo "<p>Opción no válida.</p>";
                break;
        }
    } else {
        echo "<p>No se recibieron todos los datos necesarios.</p>";
    }
    ?>

    <a href="temperaturaExtra.php">Volver al inicio</a>
</body>
</html>
