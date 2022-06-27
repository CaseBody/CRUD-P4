const hamburger = document.querySelector("#hamburger");
const mobile_nav = document.querySelector("#mobile-nav");
const header = document.querySelector("header");

let mobile_val = 0;
let or_val = header.style.backgroundColor;

hamburger.addEventListener("click", () => {
	if (mobile_val == 0) {
		mobile_val = 1;
		header.style.backgroundColor = "#34495e";
		mobile_nav.style.top = "0px";
	} else {
		mobile_val = 0;
		header.style.backgroundColor = or_val;
		mobile_nav.style.top = "-100vh";
	}
});
