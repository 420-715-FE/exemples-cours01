<?php
    // Indique qu'on veut utiliser les noms de mois en français
    setlocale(LC_TIME, 'fr_FR.UTF-8');

    $noExemple = 22;

    // Permet d'obtenir la date du jour écrite au long
    $date = strftime("%d %B %Y");
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
        Bonjour! Nous sommes le <?= $date; ?>.
    </p>
  </body>
</html>
