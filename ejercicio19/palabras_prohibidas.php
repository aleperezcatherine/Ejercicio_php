<!DOCTYPE html>
<html>
<head>
    <title>Palabras Prohibidas</title>
</head>
<body>
    <h2>Remplazador de Palabras Prohibidas</h2>
    <h3>Antes de empezar debes saber que en el texto debes de colocar de una vez en comillas "" la palabra que quieres Reemplazar</h3>
    <form method="post" action="resultado.php">
        <label for="texto">Ingrese un texto:</label><br>
        <textarea name="texto" id="texto" rows="5" cols="55"></textarea><br><br>
        <label for="palabras_prohibidas">Ingrese palabras prohibidas (separadas por comas):</label><br>
        <input type="text" name="palabras_prohibidas" id="palabras_prohibidas"><br><br>
        <input type="submit" name="submit" value="Reemplazar Palabras Prohibidas">
    </form>
</body>
</html>
