<?PHP 
include "../include/db.conn.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="remove.php" method="get">
<input type="text" name="user" placeholder="user">
<button type="submit" name="REMOVE">REMOVE</button>
</form>    
<?php
if(isset($_GET["REMOVE"])){
     $user=$_GET["user"];
     $remove="DELETE FROM `users` WHERE name ='$user';";
     mysqli_query($conn,$remove);
     header("Location: /Todo_Liste/index.html");
exit;
}
?>
</body>
</html>