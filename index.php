<?php

function formaterNombre($nombre) {
    return str_pad($nombre, 2, '0', STR_PAD_LEFT);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemples du cours 01</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <h1>Exemples</h1>
    <ul>
        <?php
            for ($i = 1; $i <= 22; $i++) {
                $numero = formaterNombre($i);
                echo "<li><a href=\"exemple$numero.php\">Exemple $numero</a></li>";
            }
        ?>
    </ul>
</body>
</html>
