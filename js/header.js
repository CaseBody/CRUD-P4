const hamburger = document.querySelector("#hamburger");
const mobile_nav = document.querySelector("#mobile-nav");
const header = document.querySelector("header");

let mobile_val = 0;

hamburger.addEventListener("click", () => {
	if (mobile_val == 0) {
		mobile_val = 1;
		header.style.backgroundColor = "#34495e";
		mobile_nav.style.top = "0px";
	} else {
		mobile_val = 0;
		header.style.backgroundColor = "#00000047";
		mobile_nav.style.top = "-100vh";
	}
});
