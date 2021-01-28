<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badwords</title>
  </head>
  <body>
    <h2>ciao <?php echo $nome . ' ' . $cognome; ?></h2>
  </body>
</html>
