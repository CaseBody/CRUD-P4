const js_form = document.querySelector("#form");
const js_first_name = document.querySelector("#first_name");
const js_last_name = document.querySelector("#last_name");
const js_email = document.querySelector("#email");
const js_tel = document.querySelector("#tel");
const js_message = document.querySelector("#message");

function form_verzonden() {
  alert("Formulier verzonden");
}

js_form.addEventListener("submit", (e) => {
  console.log(" hoi");
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "PHP/add_item.php",
    data: {
      first_name: js_first_name.value,
      last_name: js_last_name.value,
      email: js_email.value,
      tel: js_tel.value,
      message: js_message.value,
    },
    cache: false,
    success: form_verzonden,
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
});
