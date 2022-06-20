const desc_button = document.querySelector("#beschrijving_button");
const res_button = document.querySelector("#recensies_button");
const res_add_button = document.querySelector("#add_review_button");

const desc = document.querySelector("#beschrijving");
const res = document.querySelector("#recensies");
const res_add = document.querySelector("#add_review");

desc_button.addEventListener("click", () => {
	desc_button.classList.add("selected");
	res_add_button.classList.remove("selected");
	res_button.classList.remove("selected");

	desc.style.display = "flex";
	res.style.display = "none";
	res_add.style.display = "none";
});

res_button.addEventListener("click", () => {
	desc_button.classList.remove("selected");
	res_add_button.classList.remove("selected");
	res_button.classList.add("selected");

	desc.style.display = "none";
	res.style.display = "flex";
	res_add.style.display = "none";
});

res_add_button.addEventListener("click", () => {
	desc_button.classList.remove("selected");
	res_add_button.classList.add("selected");
	res_button.classList.remove("selected");

	desc.style.display = "none";
	res.style.display = "none";
	res_add.style.display = "flex";
});
// Remove like
const toggleBooking = (sender, id, gebruikerid) => {
	$.ajax({
		type: "POST",
		url: "PHP/toggle_booking.php",
		data: {
			id: id,
			gebruikerid: gebruikerid,
		},
		cache: false,
		success: (e) => {
			if (sender.innerHTML == "Book Now") {
				sender.innerHTML = "Unbook";
			} else {
				sender.innerHTML = "Book Now";
			}
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			return;
		},
	});
};

// Review
const star1 = document.querySelector("#star_1");
const star2 = document.querySelector("#star_2");
const star3 = document.querySelector("#star_3");
const star4 = document.querySelector("#star_4");
const star5 = document.querySelector("#star_5");

const review_desc = document.querySelector("#review_desc");
const review_submit = document.querySelector("#review_submit");

const stars = [star1, star2, star3, star4, star5];
star_value = 1;

const starClicked = (index) => {
	star_value = index;
	for (i = 0; i < index; i++) {
		stars[i].style.color = "#fdcc0d";
	}

	for (i = index; i < stars.length; i++) {
		stars[i].style.color = "black";
	}

	console.log(star_value);
};

starClicked(1);

star1.addEventListener("click", () => {
	starClicked(1);
});
star2.addEventListener("click", () => {
	starClicked(2);
});
star3.addEventListener("click", () => {
	starClicked(3);
});
star4.addEventListener("click", () => {
	starClicked(4);
});
star5.addEventListener("click", () => {
	starClicked(5);
});

const addReview = (id, gebruikerid) => {
	if (review_desc.value == "") {
		return;
	}

	$.ajax({
		type: "POST",
		url: "PHP/add_review.php",
		data: {
			id: id,
			gebruikerid: gebruikerid,
			beschrijving: review_desc.value,
			sterren: star_value,
		},
		cache: false,
		success: (e) => {
			console.log(e);
			location.reload();
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			return;
		},
	});
};
