items = document.querySelectorAll(".reis");

items.forEach((i) => {
	const titel = i.querySelector(".reis_hotel");
	titel.style.fontSize = (35 - 0.4 * titel.innerHTML.length).toString() + "px";
});
