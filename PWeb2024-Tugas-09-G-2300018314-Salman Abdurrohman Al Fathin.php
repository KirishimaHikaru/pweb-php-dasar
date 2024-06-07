<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP DASAR</title>
   <style>
      *{
         font-family: 'Anonymous Pro', monospace;
      }
      body{
         display: flex;
         height: 100vh;
         justify-content: center;
         align-items: center;
      }
      aside{
         border: gray 1px solid;
         border-radius: 10px;
         padding: 50px;
         margin: 10px;
         line-height:1.5rem;
      }
   </style>
</head>
<body>
   <aside>
      <center>
         <h4>Contoh Operasi Aritmatika: <br> Perhitungan Gaji</h4>
      </center>
      <?php
         $gaji = 1000000;
         $pajak = 0.1;
         $thr = 300000;
         $thp = $gaji - ($gaji * $pajak);
         
         echo "Gaji sebelum pajak          = Rp.$gaji";
         echo "<br> Besaran potongan pajak = Rp.". ($gaji * $pajak);
         echo "<br> Gaji Setelah pajak     = Rp.$thp";
         echo "<br> Besaran tunjangan lain = Rp.$thr";
         echo "<br> <i>Take home pay</i>   = Rp.". ($thp += $thr);
         ?>
   </aside>
   
   <aside>
      <center>
         <h4>Contoh Operasi Perbandingan: <br> Perbandingan Nilai</h4>
      </center>
      <?php
         $a = 5;
         $b = 4;
         $c = 5;
         $t = 1; //(merepresentasikan boolean true)
         $f = 0; //(merepresentasikan boolean false)

      echo "<ul>";
         echo "<li>$a == $b: ". (int)($a == $b) . "</li>";
         echo "<li>$a != $b: ". (int)($a != $b) . "</li>";
         echo "<li>$a <= $b: ". (int)($a <= $b) . "</li>";
         echo "<li>$a >= $c: ". (int)($a >= $c) . "</li>";
         echo "<li>$a < $b : ". (int)($a < $b) . "</li>";
         echo "<li>$a > $b : ". (int)($a > $b) . "</li>";
         echo "<li>($a == $c) && ($a == $b) : ". (int)(($a == $c) && ($a == $b)) . "</li>";
         echo "<li>($t != $f) && ($a != $b) : ". (int)(($t != $f) && ($a != $b)) . "</li>";
         echo "<li>($b >= $a) || ($a < $b)  : ". (int)(($b >= $a) || ($a < $b))  . "</li>";
         echo "<li>($a > $b)  || ($b <= $a) : ". (int)(($a > $b)  || ($b <= $a)) . "</li>";
         echo "<li>($t != $f) || ($a == $b) : ". (int)(($t != $f) || ($a == $b)) . "</li>";

      echo "</ul>";
      ?> 
   </aside>
</body>
</html>

   