var login = document.getElementById("selectLogin");
var signUp = document.getElementById("selectSignUp");
var LoginFields = document.getElementById("LoginFields");
var SignupFields = document.getElementById("SignupFields");

function removeAccountStyling(){
    login.classList.remove("active");
    signUp.classList.remove("active");
    login.classList.remove("underlineHover");
    signUp.classList.remove("underlineHover");
    LoginFields.classList.add("d-none");
    SignupFields.classList.add("d-none");
}

function selectLogin(){
    removeAccountStyling();

    login.classList.add("active");
    signUp.classList.add("underlineHover");
    LoginFields.classList.remove("d-none");
}


function selectSignUp(){
    removeAccountStyling();

    signUp.classList.add("active");
    login.classList.add("underlineHover");
    SignupFields.classList.remove("d-none");

}

login.addEventListener("click", selectLogin);
signUp.addEventListener("click", selectSignUp);
