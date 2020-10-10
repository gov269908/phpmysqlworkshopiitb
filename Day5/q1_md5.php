<html>
<body>

<form action = "q1_md5.php" method = "POST">
Enter username : <input type= "text" name = "username"><br>
Enter password : <input type = "password" name = "password"><br>
<input type = "submit" value = "Submit" name = "s"><br>
</form>
</body>
</html>

<?php

require ("connect.php");

if (isset($_POST['s']))
{
 $user = $_POST['username'];
 $pass = md5($_POST['password']);

 $write = "INSERT INTO login VALUES('$user','$pass')";
 if($conn->query($write)===TRUE)
 {
    echo "Stored Successfully!";
 }
 else
 {
    echo $write.$conn->error;
 }

}

$conn->close();

?>
