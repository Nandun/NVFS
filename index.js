#index.js
function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "tempemailtest321@gmail.com",
	Password : "!Test123456",
	To : 'tempemailtest321@gmail.com',
	From : "tempemailtest321@gmail.com",
	Subject : "This is a test",
	Body : "This is a test",
	}).then(
		message => alert("mail sent successfully")
	);
}
