<!DOCTYPE html>
<html>
<head>
    <title>Temperatura</title>
</head>
<body>
    <h2>Convertidor de Temperaturas</h2>
    <form method="post" action="resultado.php">
        <label for="temperatura">Temperatura:</label>
        <input type="text" name="temperatura" id="temperatura" required>
        <select name="unidad_origen">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <label for="unidad_destino">a</label>
        <select name="unidad_destino">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="submit" name="submit" value="Convertir">
    </form>
</body>
</html>
