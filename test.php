<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$data = date('y/m/d');
$ora = date('H:i:s');
$t = date('s');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badwords</title>
  </head>
  <body>
    <h2>ciao <?php echo $nome . ' ' . $cognome; ?></h2>
    <h3><?php echo $data. ' '. $ora;?></h3>
    <h1>
      <?php
      echo $t;
      if ($t > 40){
        echo 'boom';
      } else if ($t > 20){
        echo 'bim';
      }else{
        echo 'bam';
      }
      ?>
    </h1>
    <h2>
      <?php
        switch ($t){
          case $t > 20 :
            echo 'bim';
            break;
          case $t > 40 :
            echo 'boom';
            break;
          default :
            echo 'bam';

        }
       ?>
    </h2>
    <p>
      <?php
        $x = 0;
        $y = 0;
        while ($x<=5){
          echo 'il numero dtampato e:'. $x . '<br>';
          $x++;
        };
        do {
          echo $y . '<br>';
          $y++;
        } while ($y <= 10);
        for ($i=0; $i <= 10; $i++) {
          echo $i * 10 . '<br>';
        }
       ?>
    </p>

    <ul>
      <?php
        $list = array('lorem','lorem1','lorem2','lorem3','lorem4','lorem5');
        foreach ($list as $value) {
          // echo '<li>' . $value . '</li>'
          echo '<li>'.$value.'</li>';
        };
       ?>
    </ul>
  </body>
</html>
