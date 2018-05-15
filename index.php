<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exos - les boucles</title>
  </head>
  <body>
    <h1>Les boucles</h1>
    <h2>exo 1</h2>
    <?php
    for($var=0;$var<10;$var++){
      echo $var;
      echo "<br>";
    }
     ?>

     <h2>exo 2</h2>
     <?php
     $var1 = 50;
     for ($var2=0; $var2 <= 20; $var2++) {
       echo $var1*$var2;
       echo "<br>";
     }

      ?>

      <h2>exo 3</h2>
      <?php
      $var1 = 69;
      for ($var2=100; $var2 > 10; $var2--) {
        echo $var1*$var2;
        echo "<br>";
      }

       ?>

      <h2>exo 4</h2>
      <?php
      $var = 1;
      do {
        echo $var;
        echo "<br>";
        $var = $var+$var/2;
      } while ($var < 10);
       ?>

      <h2>exo 5</h2>
      <?php
      for ($i=1; $i < 15 ; $i++) {
        echo "On y arrive presque";
        echo "<br>";
      }
       ?>
      <h2>exo 6</h2>
      <?php
      for ($i=20; $i > 0 ; $i--) {
        echo "C'est presque bon";
        echo "<br>";
      }
       ?>
       <h2>exo 7</h2>
       <?php
       for ($i=1; $i < 100 ; $i=$i+15) {
         echo "On tient le bon bout";
         echo "<br>";
       }
        ?>
        <h2>exo 8</h2>
        <?php
        for ($i=200; $i > 0 ; $i=$i-12) {
          echo "Enfin !!!!";
          echo "<br>";
        }
         ?>
  </body>
</html>
