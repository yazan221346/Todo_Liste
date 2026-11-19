const pick = document.querySelector(".dropdown")

if (pick){
pick.addEventListener("change",() =>{

    if (pick.value === "add_user"){
        console.log("hallo");
    
        window.location.href = "add.php";
    }
}) }