submit_toevoegen = document.querySelector("#submit");
voornaam = document.querySelector("#voornaam");
achternaam = document.querySelector("#achternaam");
email = document.querySelector("#email");
wachtwoord = document.querySelector("#wachtwoord");
error_code = document.querySelector("#error_code");

error_code.style.display = "none";
error_code.style.color = "red";

submit_toevoegen.addEventListener("click", (e) => {
	e.preventDefault();

	$.ajax({
		type: "POST",
		url: "PHP/check_email.php",
		data: {
			email: email.value,
		},
		cache: false,
		success: (e) => {
			if (e != "juist") {
				error_code.style.display = "";
				error_code.innerHTML = "Email already exists or is invalid.";

				return;
			}
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			return;
		},
	});

	console.log(voornaam.value.length);

	if (voornaam.value.length < 1) {
		error_code.style.display = "";
		error_code.innerHTML = "Please fill in your Firstname.";

		return;
	}

	if (achternaam.value.length < 1) {
		error_code.style.display = "";
		error_code.innerHTML = "Please fill in your Lastname.";

		return;
	}

	if (wachtwoord.value.length < 5) {
		error_code.style.display = "";
		error_code.innerHTML = "Password needs to be atleast 5 charachters.";

		return;
	}

	$.ajax({
		type: "POST",
		url: "PHP/user_toevoegen.php",
		data: {
			voornaam: voornaam.value,
			achternaam: achternaam.value,
			email: email.value,
			wachtwoord: wachtwoord.value,
		},
		cache: false,
		success: (e) => {
			window.location.replace("login.php");
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});

	return;
});
