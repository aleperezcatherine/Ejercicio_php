<?php
    $numeros_pares = [];
    $numeros_impares = [];

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            $numeros_pares[] = $i;
        } else {
            $numeros_impares[] = $i;
        }
    }

    echo "<h2>Números Pares:</h2>";
    echo "<ul>";
    foreach ($numeros_pares as $par) {
        echo "<li>$par</li>";
    }
    echo "</ul>";

    echo "<h2>Números Impares:</h2>";
    echo "<ul>";
    foreach ($numeros_impares as $impar) {
        echo "<li>$impar</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
