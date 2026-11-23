<?php
include "../include/db.conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="get">
<input type="text" name="user" placeholder="user">
<button type="submit" name="ADD">ADD</button>
</form>
<?php
if (isset($_GET["ADD"])){
    $user=$_GET["user"];
    $add = " INSERT INTO `users`(`Name`) VALUES ('$user');";
    mysqli_query($conn,$add); 
    header("Location: /Todo_Liste/index.html");
exit;
};
?>

</body>
</html>
