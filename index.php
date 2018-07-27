<?php
  $gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice5/2</title>
  </head>
  <body>
    <?php
    if ($gender != 'Homme') {
      echo 'C\'est une développeuse !!!';
    } else {
      echo 'C\'est un développeur !!!';
    }
    ?>
  </body>
</html>
