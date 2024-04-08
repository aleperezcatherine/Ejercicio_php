<!DOCTYPE html>
<html>
<head>
    <title>IMC</title>
</head>
<body>
    <h1>Calcula tu indice Corporal (IMC)</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso">
        <br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura">
        <br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_POST) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        echo "<p>Tu Índice de Masa Corporal (IMC) es el siguiente: <strong>$imc</strong></p>";
    }
    ?>
</body>
</html>