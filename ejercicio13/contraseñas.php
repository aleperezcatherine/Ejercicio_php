<!DOCTYPE html>
<html>
<head>
    <title>Contraseñas</title>
</head>
<body>
    <h1>Generador de Contraseñas</h1>
    <form method="post">
        <label for="longitud">Cuál es la logitud que tu deseas:</label>
        <input type="number" name="longitud">
        <input type="submit" value="nueva Contraseña">
    </form>

    <?php
    if ($_POST) {
        $longitud = $_POST["longitud"];

        // definí los caracteres 
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+/ :) ;)';

        
        $contrasena = '';
        for ($i = 0; $i < $longitud; $i++) {
            $indice = random_int(0, strlen($caracteres) - 1);
            $contrasena .= $caracteres[$indice];
        }

        echo "<p>Contraseña generada: <strong>$contrasena</strong></p>";
    }
    ?>
</body>
</html>