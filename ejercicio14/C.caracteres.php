<!DOCTYPE html>
<html>
<head>
    <title>Contador Caracteres</title>
</head>
<body>
    <h1>Contador de Caracteres</h1>
    <form method="post">
        <label for="texto">Ingresa un texto:</label>
        <input type="text" name="texto">
        <input type="submit" value="Contar palabras">
    </form>

    <?php
    if ($_POST) {
        $texto = $_POST["texto"];
        $texto_sin_espacios = str_replace(' ', '', $texto);
        $cantidad_caracteres = strlen($texto_sin_espacios);

        echo "<p>La cantidad de caracteres (sin espacios) en el texto es: <strong>$cantidad_caracteres</strong></p>";
    }
    ?>
</body>
</html>