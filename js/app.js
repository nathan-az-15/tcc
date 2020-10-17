var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");
 
var div = document.querySelector("#divmod");

btnSignin.addEventListener("click", function()){
	div.className = "sign-in-js";
};

btnSignup.addEventListener("click", function()){
	div.className = "sign-up-js";
};