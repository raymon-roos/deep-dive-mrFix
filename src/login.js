function validateForm() {
  let pass = document.forms["login"]["pass"].value;
  let email = document.forms["login"]["email"].value;
	console.log(email.length);
  if (pass == "password" && email.length > 0) {
		window.location = "./index.html";
		return true;
  }
    alert("log in failed");
    return false;
} 