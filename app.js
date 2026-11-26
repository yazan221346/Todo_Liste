const pick = document.querySelector(".dropdown")
if (pick){
pick.addEventListener("change",() =>{

    if (pick.value === "add_user"){
        console.log("hallo");
    
        window.location.href = "users_commands/add.php";
    }
}) }
if (pick){
pick.addEventListener("change",() =>{

    if (pick.value === "remove_user"){
        console.log("hallo");
    
        window.location.href = "users_commands/remove.php";
    }
}) }
if (pick){
pick.addEventListener("change",() =>{

    if (pick.value === "view_user"){
        console.log("hallo");
    
        window.location.href = "users_commands/user.php";
    }
}) }
 