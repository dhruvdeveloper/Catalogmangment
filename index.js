//index.js  
// <!-- https://pepipost.com/tutorials/how-to-send-emails-with-javascript/ Email thing refering from this site. -->
function sendEmail() {
    console.log("Email sending function");
    var details = "Your email id: " + document.getElementById("email").value + " Your password: " + document.getElementById("password").value; 
	Email.send({
	Host: "smtp.gmail.com",
	Username : "forwdmuta@gmail.com",
	Password : "BhaiBhai",
	To : document.getElementById("email").value,
	From : "forwdmuta@gmail.com",
	Subject : "Credential details",
	Body : details,
	}).then(
		message => alert("mail sent successfully")
	);
}

function onchangeEmail() {
	var stringEmail = document.getElementById("email").value;
	if(stringEmail.split("@")[1].indexOf(".") == -1){
		document.getElementById("email-span").innerHTML = "Email should have Top level domain name!";
	}
	else{
		document.getElementById("email-span").innerHTML = "";
	}
}

function onchangeName() {
	var stringName = document.getElementById("name").value;
	if(stringName.length < 3){
		document.getElementById("name-span").innerHTML = "User name should be greater than 3 character";
	}
	else{
		document.getElementById("name-span").innerHTML = "";
	}
}

function onchangePassword() {
	var str = document.getElementById("password").value;
	var error = [];
	if (str.length < 6) {
		error.push("Must be greater than this");
	} 
	if (str.length > 50) {
		error.push("Must be less than this");
	} 
	if (str.search(/\d/) == -1) {
		error.push("no num");
	} 
	if (str.search(/[a-zA-Z]/) == -1) {
		error.push("no letter");
	} 
	if (str.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) != -1) {
		error.push("Bad character");
	}
	var errorString = "";
	for(var i = 0; i < error.length; i++){
		errorString += error[i] + " + ";
	}
	document.getElementById("password-span").innerHTML = errorString;
}

function checkPwd(str) {
	
	return("ok");
}

function onchangeConfirmPassword() {
	var stringPassword = document.getElementById("password").value;
	var stringPasswordConfirm = document.getElementById("confirmPassword").value;
	console.log(stringPassword);
	console.log(stringPasswordConfirm);
	if(stringPassword != stringPasswordConfirm){
		document.getElementById("password-confirm-span").innerHTML = "Password should be matched!";	
	}
	else{
		document.getElementById("password-confirm-span").innerHTML = "";
	}
}

function onchangeRole() {
	var stringRole = document.getElementById("role").value;
	if(stringRole == ""){
		document.getElementById("role-error-span").innerHTML = "Value must be selected";	
	}
	else{
		document.getElementById("role-error-span").innerHTML = "";
	}
}