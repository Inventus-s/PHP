<!-- <?php
   echo"i love pizza <br>";
   echo"feeling good";
?> -->

<!-- Variable -->

<!-- <?php
  $name = "Mukund Kumar <br>";
  echo $name;
  echo "My name is $name";
?> -->




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <!-- Table of 5 -->

<?php
   $a = 5;
   // $b = 1;
   $c = 6;
   
  echo "<table >";
  for($b=1;$b <= 10; $b++){
   echo "<tr><td>$a</td><td>x</td><td>$b</td><td>=</td><td>".$a*$b."</td></tr>";
  };
  
  echo"</table>";
?>

<!-- Table of 6 -->

   <h1>Table of 6</h1>
   <table>
      <?php
        for ($b=1; $b <= 10 ; $b++) { 
      ?>
      <tr>
         <td><?php echo $c; ?></td>
         <td>x</td>
         <td><?php echo $b; ?></td>
         <td>=</td>
         <td><?php echo $c * $b; ?></td>
      </tr>
      <?php
        }
      ?>
   </table>
</body>
</html>