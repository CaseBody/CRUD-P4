const items = document.querySelectorAll(".item");
const items_container = document.querySelector(".categorie_content");
const search_bar = document.querySelector("#search_bar");
const search_button = document.querySelector("#search_button");

search_button.addEventListener("click", () => {
	items.forEach((element) => {
		const bot = element.children[2];

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
		const bot = element.children[2];

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
