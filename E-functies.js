const username = document.getElementById('username')
const password = document.getElementById('#password')
const button = document.getElementById('#login-button')
function clicked(){
    console.log("het werkt")
    console.log(username.value)
    if(username.value == ""){
        alert("username must be something");
    }
    else if(username.value == "Roy" && password.value == "14325"){
        window.location.href="settings.php";
    }
}
//const buttonF = button.addEventListener("click", () => {
//    console.log("het werkt")
//})
