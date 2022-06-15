items = document.querySelectorAll(".reis");

account_save_button = document.querySelector("#account_save");
account_voornaam = document.querySelector("#first_name");
account_achternaam = document.querySelector("#last_name");
account_save_button = document.querySelector("#email");

items.forEach((i) => {
	const titel = i.querySelector(".reis_hotel");
	titel.style.fontSize = (35 - 0.4 * titel.innerHTML.length).toString() + "px";
});
