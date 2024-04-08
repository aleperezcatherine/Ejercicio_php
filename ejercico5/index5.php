<!DOCTYPE html>
<html>
<head>
    <title>Cadena de Texto</title>
</head>
<body>
    <h1>Cadena de Texto</h1>
    <form method="post">
        <label for="texto">Ingresa la cadena de texto que tu deseas:</label>
        <input type="text" name="texto">
        <input type="submit" value="Mostrar resultados"> 
    </form>

    <?php
    if ($_POST) {
        $cadena = $_POST["texto"];
        $mayusculas = strtoupper($cadena);
        $minusculas = strtolower($cadena);
        $longitud = strlen($cadena);
        
        echo "<p>Cadena en mayúsculas: $mayusculas</p>";
        echo "<p>Cadena en minúsculas: $minusculas</p>";
        echo "<p>Cantidad de caracteres: $longitud</p>";
    }
    ?>
</body>
</html>