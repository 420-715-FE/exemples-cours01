<?php
    $noExemple = 22;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php /* Démonstration d'une syntaxe plus courte pour insérer des `echo` PHP à travers le HTML */ ?>
      Exemple <?= $noExemple; ?>
    </title>
    <link rel="stylesheet" href="water.css">
  </head>
  <body>
    <nav><a href="index.php">Retour</a></nav>
    <p>
        Bonjour! Vous consultez présentement l'exemple <?= $noExemple ?>.
    </p>
  </body>
</html>
