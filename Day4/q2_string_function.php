<html>
<body>
<form action = "q3_string_function.php" method = "POST">
Enter a random string: <input type = "text" name = "string" ><br>
<input type = "submit" name = "s" value = "Submit">
</form>
</body>
</html>

<?php

if (isset($_POST['s']))
{

 echo "Entered string : ";
 $strg = $_POST['string'];
 echo $strg."<br>";

 echo "Number of characters in the string : ";
 $length = strlen($strg);
 echo $length."<br>";

 $res=explode(" ",$strg);
 print_r($res);
 echo "<br>";

 echo "All alphabet to upper case: ".strtoupper($strg)."<br>";
 echo "All alphabet to Lower case: ".strtolower($strg)."<br>";

 echo "Reverse of the string : ".strrev($strg)."<br>";

}

?>
