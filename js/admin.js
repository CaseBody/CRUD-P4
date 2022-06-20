const user_data = document.querySelector("#row_user_data");
const checkbox = document.querySelector("#isAdmin_box");

checkbox.addEventListener("click", (e) => {

  $.ajax({
    type: "POST",
    url: "",
    data: {
      check: checkbox.value,
    },
    cache: false,
    success: (response) => {
      //console.log(response);
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });

  user_data.style.display.remove();
  console.log("check");
});