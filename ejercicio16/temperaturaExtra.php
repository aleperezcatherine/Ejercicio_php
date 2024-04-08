<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura</h2>
    <form method="post" action="resultado.php">
        <label for="temp">Ingrese la temperatura:</label>
        <input type="number" name="temp" id="temp" required><br><br>
        <label for="opcion">Seleccione la conversión:</label>
        <select name="opcion" id="opcion">
            <option value="celsiusToFahrenheit">Celsius a Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit a Celsius</option>
            <option value="celsiusToKelvin">Celsius a Kelvin</option>
            <option value="kelvinToCelsius">Kelvin a Celsius</option>
        </select><br><br>
        <input type="submit" name="submit" value="Convertir">
    </form>
</body>
</html>
