// Nav
nav_account_but = document.querySelector("#nav_account");
nav_saved_but = document.querySelector("#nav_saved");
nav_booked_but = document.querySelector("#nav_booked");
nav_reviews_but = document.querySelector("#nav_review");

nav_account_but.addEventListener("click", () => {
	SwitchPage(nav_account);
});

nav_saved_but.addEventListener("click", () => {
	SwitchPage(nav_saved);
});

nav_booked_but.addEventListener("click", () => {
	SwitchPage(nav_booked);
});

nav_reviews_but.addEventListener("click", () => {
	SwitchPage(nav_reviews);
});

nav_account = document.querySelector("#account");
nav_saved = document.querySelector("#saved");
nav_booked = document.querySelector("#booked");
nav_reviews = document.querySelector("#review");

SwitchPage = (page) => {
	if (page == nav_account) {
		nav_account.style.display = "block";
	} else {
		nav_account.style.display = "none";
	}

	if (page == nav_saved) {
		nav_saved.style.display = "block";
	} else {
		nav_saved.style.display = "none";
	}

	if (page == nav_booked) {
		nav_booked.style.display = "block";
	} else {
		nav_booked.style.display = "none";
	}

	if (page == nav_reviews) {
		nav_reviews.style.display = "block";
	} else {
		nav_reviews.style.display = "none";
	}
};

// Account

account_save_button = document.querySelector("#account_save");
account_voornaam = document.querySelector("#first_name");
account_achternaam = document.querySelector("#last_name");
account_email = document.querySelector("#email");
account_status = document.querySelector("#account_status_text");

account_save_button.addEventListener("click", () => {
	if (account_voornaam.value == "") {
		account_status.innerHTML = "First name may not be empty.";
		account_status.style.display = "inline";
		account_status.style.color = "red";

		return;
	} else if (account_achternaam.value == "") {
		account_status.innerHTML = "Last name may not be empty.";
		account_status.style.display = "inline";
		account_status.style.color = "red";

		return;
	} else if (account_email.value == "") {
		account_status.innerHTML = "Email may not be empty.";
		account_status.style.display = "inline";
		account_status.style.color = "red";

		return;
	}

	$.ajax({
		type: "POST",
		url: "PHP/edit_user.php",
		data: {
			voornaam: account_voornaam.value,
			achternaam: account_achternaam.value,
			email: account_email.value,
		},
		cache: false,
		success: (e) => {
			if (e == "login_error") {
				account_status.innerHTML = "Error saving information. Please try again later.";
				account_status.style.display = "inline";
				account_status.style.color = "red";

				return;
			} else {
				account_status.innerHTML = "Account details succesfully saved.";
				account_status.style.display = "inline";
				account_status.style.color = "green";

				return;
			}
		},
		error: function (xhr, status, error) {
			account_status.innerHTML = "Error saving information. Please try again later.";
			account_status.style.display = "inline";
			account_status.style.color = "red";

			return;
		},
	});
});

// Saved & Booking

items = document.querySelectorAll(".reis");

items.forEach((i) => {
	const titel = i.querySelector(".reis_hotel");
	titel.style.fontSize = (35 - 0.4 * titel.innerHTML.length).toString() + "px";
});

// Remove like
const removeLike = (event, sender, id, gebruikerid) => {
	event.stopPropagation();

	$.ajax({
		type: "POST",
		url: "PHP/toggle_like.php",
		data: {
			id: id,
			gebruikerid: gebruikerid,
		},
		cache: false,
		success: (e) => {
			if (e != "juist") {
				console.log(e);

				return;
			} else {
				sender.parentElement.remove();
			}
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			return;
		},
	});
};
