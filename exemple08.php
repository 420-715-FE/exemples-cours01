<?php
  // Déclarons maintenant une variable.
  // Une variable associe une valeur à un nom.
  $noExemple = 8;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Exemple <?php echo $noExemple; /* affiche la valeur de la variable */ ?>
    </title>
    <link rel="stylesheet" href="water.css">
  </head>
  <body>
    <nav><a href="index.php">Retour</a></nav>
    <h1>Exemple <?php echo $noExemple; /* affiche la valeur de la variable */ ?></h1>
    <p>Le numéro de l'exemple indiqué ci-dessus provient d'une variable.</p>
  </body>
</html>
