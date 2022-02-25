

function validate() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var username2 = form.username.value;
	var password2 = form.password.value;
	if (username == username2 && password == password2) {
		alert("Login successfully");
		window.location = "index.html"; // Redirecting to other page.
		return false;
	}
	else {
		alert("You have left attempt;");

	}
}