const items = document.querySelectorAll(".item");
const items_container = document.querySelector(".categorie_content");

items.forEach((i) => {
	const titel = i.querySelector(".title");
	console.log(items.length % 4);
	titel.style.fontSize = (35 - 0.5 * titel.innerHTML.length).toString() + "px";
});

if (screen.width <= 1220) {
	let sum = items.length % 2;

	for (let i = 0; i <= sum; i++) {
		items_container.innerHTML += "<div class='item item_invis'></div>";
	}
} else {
	let sum = items.length % 4;

	for (let i = 0; i < sum; i++) {
		console.log("test");
		items_container.innerHTML += "<div class='item item_invis'></div>";
	}
}
