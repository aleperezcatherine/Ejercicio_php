<!DOCTYPE html>
<html>
<head>
    <title> Electrónico</title>
</head>
<body>
    <h1>Validador de Correo Electrónico</h1>
    <form method="post">
        <label for="correo">Ingresa tu  dirección de tu correo electrónico:</label>
        <input type="text" name="correo">
        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_POST) {
        $correo = $_POST["correo"];

        // Validar el formato del correo electrónico
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<p>El correo electrónico <strong>$correo</strong> es válido.</p>";
        } else {
            echo "<p>El correo electrónico <strong>$correo</strong> no es válido.</p>";
        }
    }
    ?>
</body>
</html>
 
