//index.js  
// <!-- https://pepipost.com/tutorials/how-to-send-emails-with-javascript/ Email thing refering from this site. -->
function sendEmail() {
	window.open('mailto:thakkardhruv97@gmail.com');
    console.log("Email sending function");
    console.log(document.getElementById("email").value);
	var details = " Message: " + document.getElementById("comment").value; 
	Email.send({
	Host: "smtp.gmail.com",
	Username : "temputawdm@gmail.com",
	Password : "BhaiBhai",
	To : "thakkardhruv97@gmail.com",//document.getElementById("email").value
	From : "temputawdm@gmail.com",
	Subject : "Feedback from student about course!",
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

function onchangeText(){
	var stringEmail = document.getElementById("comment").value;
	if(stringEmail.length > 200){
		document.getElementById("comment-span").innerHTML = "Length less than 200!";
	}
	else{
		document.getElementById("comment-span").innerHTML = "";
	}
}