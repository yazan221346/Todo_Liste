<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "include/db.conn.php";
$user ="SELECT * FROM `users`";
$user =mysqli_query($conn,$user);
$daten ="SELECT * FROM `Todo`";
$daten =    mysqli_query($conn,$daten);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="ToDoListe_Nav">
    <ul class="ToDoListe_ul_name">
        <H1 class="ToDoListe_Name">ToDo</H1>
    </ul>
    <ul class="ToDoListe_ul_input">
        <form action="index.php" method="get">
    <input type="text" class="suche" placeholder="user name"  name="user_name" id="user_name">
    <button class="user_Input_Button" id="suche" name="suche" type="submit">suche</button>
    </form>
    </ul>
    <ul class="dropdown_ul">
        
        <select onfocus="this.size=4;" onblur="this.size=0;" 
        onchange="this.size=1; this.blur();" 
    class="dropdown" name="dropdown" id="dropdown">
    
            <option class="option" value="">-- settings --</option>
            <option class="option" value="add_user" rel="add">add</option>
            <option class="option" value="remove_user" rel="remove">remove</option>
            <option class="option" value="view_user" rel="view">user</option>
        </select>
    </ul>
        </nav>
</nav>


<?php
if (isset($_GET["suche"])){
    $user=$_GET["user_name"];
    $suche="SELECT * FROM `users` WHERE `name` LIKE '%$user%';";
    $suche = mysqli_query($conn,$suche);

    while($row =mysqli_fetch_assoc($suche)){
       
    echo($row["Name"]) ;
    }

}
?>
<script src="app.js"></script>
</body>
</html>