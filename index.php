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
    if ($gender == 'Homme') {
      echo 'C\'est un développeur !!!';
    } elseif ($gender == 'Femme') {
      echo 'C\'est une développeuse !!!';
    } else {
      echo 'Qu\'est ce que c\'est ?';
    }
    ?>
  </body>
</html>
