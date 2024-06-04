<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP DASAR</title>
</head>
<body>
   <?php
      $gaji = 1000000;
      $pajak = 0.1;
      $thp = $gaji - ($gaji * $pajak);

      echo "Gaji sebelum pajak = Rp. $gaji <br>";
      echo "Gaji yang dibawa pulang = Rp. $thp";
   ?>

   <?php
      $a = 5;
      $b = 4;

      echo "$a == $b: ". ($a == $b);
      echo "<br>$a != $b: ". ($a != $b);
      echo "<br>$a > $b: ". ($a > $b);
      echo "<br>$a < $b: ". ($a < $b);
      echo "<br>($a == $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
      echo "<br>($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
   ?> 
</body>
</html>

   