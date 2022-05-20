<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contactpagina</title>
  <!-- link css -->
  <link rel="stylesheet" href="CSS/styles.css"/>
  <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/.png" />
    <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/"crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

  <?php
    require_once "includes/header.php";
  ?>

<body>
  <main>
    <div class="container_contact">
      <div class="all_contact">
        <div class="contact_img">
            <div class="title">
              <h2>Contact Us</h2>
            </div>
            <p>
              If you have questions or just want to get in touch, use the contact form. 
              We look forward to hearing from you!
            </p>
        </div>
        <form action="">
          <div class="form_label_input">
            <div class="form_name">
              <div class="fname">
                <label class="label_name" for="name">First Name:</label>
                <input class="input_name" type="text" >
              </div>
              <div class="fname">
                <label class="label_name" for="name">Last Name:</label>
                <input class="input_name" type="text">
              </div>
            </div>
            <div class="form_other">
              <label class="label" for="name">E-mail:</label>
              <input class="input" type="text">
            </div>
            <div class="form_other">
              <label class="label" for="name">Tel:</label>
              <input class="input" type="text">
            </div>
            <div class="form_description">
              <label class="label" for="name">Send A Message:</label>
              <textarea class="form_des" name=""></textarea>
            </div>
            <div class="submit_button">
              <input class="submit" type="submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>