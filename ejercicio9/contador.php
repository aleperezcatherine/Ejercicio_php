<html>
<head>
    <title> Palabras</title>
</head>
<body>
    <h1>Contador de las Palabras</h1>
    <form method="post">
        <label for="texto">¡Hola! Ingresa tu cadena de texto:</label>
        <input type="text" name="texto">
        <input type="submit" value="Contar palabras">
    </form>

    <?php
    if ($_POST) {
        $cadena = $_POST["texto"];
        $palabras = str_word_count($cadena);

        echo "<p>El número de palabras en la cadena es: $palabras</p>";
    }
    ?>
</body>
</html>