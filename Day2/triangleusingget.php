<html>
<form action = 'triangleusingget.php' method ='GET'>
  <label>Side_1:</label>
  <input type= 'text' name= 'Side_1'><br>
  <label>Side_2:</label>
  <input type= 'text' name= 'Side_2'><br>
  <label>Side_3:</label>
  <input type= 'text' name= 'Side_3'><br>
  <input type= 'submit' name= 'Click Here'><br>
</form>
</html>
<?php
$a =$_GET['Side_1'];
$b =$_GET['Side_2'];
$c =$_GET['Side_3'];

switch($a){
  case ($a == $b && $b==$c):
  echo('It is an Equilateral Triangle');
  break;

  case ($a==$b || $b==$c || $a==$c):
	echo "It is an Isosceles Triangle.";
	break;

  case ($a!=$b && $b!=$c):
  echo "It is a Scalene Triangle.";
  break;

 case (($a^2+$b^2)==$c^2 || ($a^2+$c^2)==$b^2 || ($b^2+$c^2)==$a^2):
 echo "<br>It is an Right Angled Triangle.";
 break;

}





 ?>
