<?php
include "include/db.conn.php"
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
<input type="text" name="todo_name" placeholder="todo name">
<input type="text" name="user" placeholder="user">
<input type="text" name="info" placeholder="info">
<input type="datetime-local" name="date">
<button type="submit" name="ADD">ADD</button>
</form>
<?php
if (isset($_GET["ADD"])){
    $todo=$_GET["todo_name"];
    $user=$_GET["user"];
    $info=$_GET["info"];
    $date=$_GET["date"];

    $add = "INSERT INTO `users`( `Name`, `Task_name`, `task_info`, `Date`) VALUES ('$user','$todo','$info','$date');";
    mysqli_query($conn,$add);
    header("Location: index.html");
};
?>

</body>
</html>
