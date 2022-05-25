<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>startpagina</title>
    <!-- link css -->
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png"/>    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  </head>

  <?php
    require_once 'includes/header.php';
  ?>
  <body>
    <main>
      <div class="container_startpage">
        <h2>
          Welcome to TRAVELEGY
        </h2>
      </div>

      <div class="container_categorieen">
        <div class="box">
          <div class="box_cat">
            <img class="cat-img" src="Assets/afbeeldingen/strand_vakantie.png" alt="placeholder">
            <h2>aanbevolen</h2>
          </div>
          <div class="box_cat">
            <img class="cat-img" src="Assets/afbeeldingen/strand_vakantie.png" alt="placeholder">
            <h2>Strand Vakantie</h2>
          </div>
          <div class="box_cat">
            <img class="cat-img" src="Assets/afbeeldingen/strand_vakantie.png" alt="placeholder">
            <h2>aanbevolen</h2>
          </div>
        </div>
      </div>

      <div class="container_aanbevolen_reizen">
        <div class="title">
          <h2>aanbevolen reizen</h2>
        </div>
        <div class="aanbevolen_reizen">
          <div class="reis_abv">
            <p class="item_titel">Cairo, Egypt</p>
            <p class="item_subtitel">Boek Nu <img src="Assets/afbeeldingen/arrow_right.png"/></p>
          </div>
          <div class="reis_abv">
            <p class="item_titel">Cairo, Egypt</p>
            <p class="item_subtitel">Boek Nu <img src="Assets/afbeeldingen/arrow_right.png"/></p>
          </div>
          <div class="reis_abv">
            <p class="item_titel">Cairo, Egypt</p>
            <p class="item_subtitel">Boek Nu <img src="Assets/afbeeldingen/arrow_right.png"/></p>
          </div>
          <div class="reis_abv">
            <p class="item_titel">Cairo, Egypt</p>
            <p class="item_subtitel">Boek Nu <img src="Assets/afbeeldingen/arrow_right.png"/></p>
          </div>
        </div>
      </div>
    </main>
    <?php
      require_once 'includes/footer.php';
    ?>
  </body>
</html>
