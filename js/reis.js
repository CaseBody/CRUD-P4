const desc_button = document.querySelector("#beschrijving_button");
const res_button = document.querySelector("#recensies_button");

const desc = document.querySelector("#beschrijving");
const res = document.querySelector("#recensies");

desc_button.addEventListener("click", () => {
	desc_button.classList.add("selected");
	res_button.classList.remove("selected");

	desc.style.display = "flex";
	res.style.display = "none";
});

res_button.addEventListener("click", () => {
	desc_button.classList.remove("selected");
	res_button.classList.add("selected");

	desc.style.display = "none";
	res.style.display = "flex";
});
