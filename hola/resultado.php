<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Conversión</title>
</head>
<body>
    <h2>Resultado de la Conversión</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = $_POST['temperatura'];
        $unidad_origen = $_POST['unidad_origen'];
        $unidad_destino = $_POST['unidad_destino'];

        // Función para convertir Celsius a Fahrenheit
        function celsiusToFahrenheit($temp) {
            return ($temp * 9/5) + 32;
        }

        // Función para convertir Fahrenheit a Celsius
        function fahrenheitToCelsius($temp) {
            return ($temp - 32) * 5/9;
        }

        // Función para redondear el resultado a 2 decimales
        function roundToTwoDecimals($number) {
            return round($number, 2);
        }

        if ($unidad_origen == "celsius" && $unidad_destino == "fahrenheit") {
            $resultado = celsiusToFahrenheit($temperatura);
            echo "<p>$temperatura Celsius equivale a " . roundToTwoDecimals($resultado) . " Fahrenheit.</p>";
        } elseif ($unidad_origen == "fahrenheit" && $unidad_destino == "celsius") {
            $resultado = fahrenheitToCelsius($temperatura);
            echo "<p>$temperatura Fahrenheit equivale a " . roundToTwoDecimals($resultado) . " Celsius.</p>";
        } else {
            echo "<p>Por favor, seleccione diferentes unidades para la conversión.</p>";
        }
    } else {
        echo "<p>No se recibieron datos del formulario.</p>";
    }
    ?>
</body>
</html>
