
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "player1" && password === "pass") {
        alert("You have successfully logged in.");
        location.assign("Player_menu.html")
    } 
    else if(username === "coach1" && password === "pass1"){
        alert("You have successfully logged in.");
        location.assign("Coach_menu.html")
    }
    else {
        loginErrorMsg.style.opacity = 1;
    }
})