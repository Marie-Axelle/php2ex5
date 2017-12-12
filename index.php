<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <?php
    $maVariable = 'femme';

  if ($maVariable != 'homme') {
      echo 'C\'est une développeuse !!!';
    }
  elseif ($maVariable == 'homme') {
    echo 'C\'est un développeur !!!';
  }
     ?>
  </body>
</html>
