const items = document.querySelectorAll(".item");
const items_container = document.querySelector(".categorie_content");
const search_bar = document.querySelector("#search_bar");
const search_button = document.querySelector("#search_button");

search_button.addEventListener("click", () => {
	items.forEach((element) => {
		const bot = element.children[3];

		if (search_bar.value == "") {
			element.style.display = "flex";
		} else {
			if (bot.children[0].innerHTML.toLowerCase().includes(search_bar.value.toLowerCase())) {
				element.style.display = "flex";
			} else {
				element.style.display = "none";
				console.log("test");
				console.log(element);
			}
		}
	});
});

search_bar.addEventListener("keypress", (e) => {
	if (e.key === "Enter") {
		e.preventDefault();
		search_button.click();
	}
});

items.forEach((i) => {
	const titel = i.querySelector(".title");
	titel.style.fontSize = (35 - 0.5 * titel.innerHTML.length).toString() + "px";
});

address = window.location.search;
const urlParams = new URLSearchParams(address);
const search = urlParams.get("search");

if (search != null) {
	const search = urlParams.get("search");
	search_bar.value = search;

	items.forEach((element) => {
		const bot = element.children[3];
		console.log(bot);

		if (search_bar.value == "") {
			element.style.display = "flex";
		} else {
			if (bot.children[0].innerHTML.toLowerCase().includes(search_bar.value.toLowerCase())) {
				element.style.display = "flex";
			} else {
				element.style.display = "none";
				console.log("test");
				console.log(element);
			}
		}
	});
}

// Remove like
const toggleLike = (event, sender, id, gebruikerid) => {
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
			if (sender.src == window.location.origin + "/CRUD-P4/" + "Assets/afbeeldingen/heart_save.png") {
				sender.src = "Assets/afbeeldingen/heart_unsave.png";
			} else {
				sender.src = "Assets/afbeeldingen/heart_save.png";
			}
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			return;
		},
	});
};
