const a_delete = document.querySelector("#a_delete");

a_delete.addEventListener("click", (e) => {
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "PHP/delete_item.php",
    data: {
      a: a_delete.value,
    },
    cache: false,
    success: (response) => {
      alert(response);
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
});
