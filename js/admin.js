const user_data = document.querySelectorAll(".row_user_data");

user_data.forEach((e) => {
	const checkbox = e.childNodes[11].childNodes[0];

	checkbox.addEventListener("click", (e) => {
		const id = checkbox.parentElement.parentElement.children[0].innerHTML;

		let check = 0;

		if (checkbox.checked) {
			check = 1;
		}
		$.ajax({
			type: "POST",
			url: "PHP/isAdmin.php",
			data: {
				id: id,
				check: check,
			},
			cache: false,
			success: (response) => {
				console.log(response);
			},
			error: function (xhr, status, error) {
				console.error(xhr);
			},
		});
	});

	const wachtwoord = e.childNodes[5].childNodes[0];
	const id = wachtwoord.parentElement.parentElement.children[0].innerHTML;

	wachtwoord.addEventListener("keypress", (event) => {
		if (event.key == "Enter") {
			$.ajax({
				type: "POST",
				url: "PHP/bewerk_ww.php",
				data: {
					id: id,
					wachtwoord: wachtwoord.value,
				},
				cache: false,
				success: (response) => {
					console.log(response);
				},
				error: function (xhr, status, error) {
					console.error(xhr);
				},
			});
			alert("wachtwoord veranderd");
		}
	});
});
