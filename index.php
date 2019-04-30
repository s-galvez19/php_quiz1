<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication table </title>
</head>
<body>

<h2>Multiplication Table</h2>
 
 <?php
 
 echo "<table border=\"2\">" ;
  

 for ($row=1; $row<=7; $row++){
   echo "<tr>\n";
   for ($col=1; $col<=7; $col++){
     $x=$col * $row;   
     echo "<td>$x</td>\n";
   }
   echo "</tr>";
 }
    echo "</table>";

 ?>
</body>
</html>