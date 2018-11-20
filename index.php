<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieure à 20 :
    </p>
    <ol>
      <li>multiplier la première variable avec la deuxième</li>
      <li>afficher le résultat</li>
      <li>incrementer la première variable</li>
    </ol>
    <?php
    $count = 0;
    $random = rand(1, 100);
    while ($count <= 20) {
    ?>
    <p><?php echo $count * $random; ?></p>
    <?php $count++; } ?>
  </body>
</html>
