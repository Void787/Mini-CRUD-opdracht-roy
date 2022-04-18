const username = document.getElementById('username')
const password = document.getElementById('password')
const button = document.getElementById('login-button')
function clicked(){
    console.log("het werkt")
    console.log(username.value)
    console.log(password)
    if(username.value == ""){
        alert("username must be something");
    }
    else if(username.value == "Roy" && password.value == "14325"){
        window.location.href="setting.php";
    }
}

var img1 = "";
const user_img = document.querySelector("#image_input");

user_img.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        img1 = reader.result;
        document.querySelector("#Img1").style.backgroundImage = 'url(${img1})';
    })
    reader.readAsDataURL(this.files[0]);
})