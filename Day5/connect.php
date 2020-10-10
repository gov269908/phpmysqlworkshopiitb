<?php

$conn = new mysqli("localhost","root","","data1") or die("connection failed");

echo "connecting...<br>";

if ($conn->connect_error)
{
 die("connection failed : " . $conn->connect_error);
}
else
{
 echo "connected! <br>";
}


?>
