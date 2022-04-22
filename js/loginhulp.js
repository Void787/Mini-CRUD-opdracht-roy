const username1 = document.querySelector('#form-username');
const password1 = document.querySelector('#form-password');
const username2 = document.querySelector('#form-username2');
const password2 = document.querySelector('#form-password2');
const formbutton1 = document.querySelector("#login-button1");
const formbutton2 = document.querySelector("#login-button2");

formbutton1.addEventListener("click", (e) => {
    if(username1.value == "" || password1.value == ""){
        e.preventDefault();
        alert("both username or password cannot be emty");
    }
})

formbutton2.addEventListener("click", (e) => {
    if(username2.value == "" || password2.value == ""){
        e.preventDefault();
        alert("both username or password cannot be emty");
    }
})


