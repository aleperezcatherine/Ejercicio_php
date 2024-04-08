<!DOCTYPE html>
<html>
<head>
    <title>Comprobemos tu edad!!</title>
</head>
<body>
    <h1>Verifiquemos tu edad </h1>
    <form method="post">
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" name="edad">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_POST) {
        $edad = $_POST["edad"];
        if ($edad >= 18) {
            echo "<p>¡ Ya eres un adulto independiente :( !</p>";
        } else {
            echo "<p>Todavía no eres un adulto independiente :) </p>";
        }
    }
    ?>
</body>
</html>