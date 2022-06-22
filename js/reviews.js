const user_data = document.querySelectorAll(".yes_no");

user_data.forEach((e) => {
	const yes = e.children[0];
	const no = e.children[1];

	yes.addEventListener("click", () => {
		const id = e.parentElement.parentElement.children[0].children[0].innerHTML;

		$.ajax({
			type: "POST",
			url: "PHP/approve_review.php",
			data: {
				id: id,
				approved: 1,
			},
			cache: false,
			success: (response) => {
				console.log(response);
				e.parentElement.parentElement.remove();
			},
			error: function (xhr, status, error) {
				console.error(xhr);
			},
		});
	});

	no.addEventListener("click", () => {
		const id = e.parentElement.parentElement.children[0].children[0].innerHTML;

		$.ajax({
			type: "POST",
			url: "PHP/approve_review.php",
			data: {
				id: id,
				approved: 0,
			},
			cache: false,
			success: (response) => {
				console.log(response);
				e.parentElement.parentElement.remove();
			},
			error: function (xhr, status, error) {
				console.error(xhr);
			},
		});
	});
});
