<?php
  $noExemple = 18;

  $a = 8;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Exemple <?php echo $noExemple; ?>
    </title>
    <link rel="stylesheet" href="water.css">
  </head>
  <body>
    <nav><a href="index.php">Retour</a></nav>
    <h1>Exemple <?php echo $noExemple; ?></h1>
    <?php
      // On peut aussi faire des calculs directement dans le code
      echo "<p>$a / 2 = " . $a / 2 . '</p>';
    ?>
  </body>
</html>
