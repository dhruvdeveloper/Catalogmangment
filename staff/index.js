//index.js  
// <!-- https://pepipost.com/tutorials/how-to-send-emails-with-javascript/ Email thing refering from this site. -->
function sendEmail() {
    console.log("Email sending function");
	var details = " Message: " + document.getElementById("comment").value; 
	Email.send({
	Host: "smtp.gmail.com",
	Username : "forwdmuta@gmail.com",
	Password : "BhaiBhai",
	To : document.getElementById("email").value,
	From : "forwdmuta@gmail.com",
	Subject : "Feedback from student about course!",
	Body : details,
	}).then(
		message => alert("mail sent successfully")
	);
}
