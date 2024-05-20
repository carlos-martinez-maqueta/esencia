<?php

include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';

$spaceObj = Folder::getFolderSpace();



?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VILLA ESENCIA TULUM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/header-all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
</head>
<style>
  .section_places .col_hormiga {
    padding: 70px 0px 40px;
  }

  .section_places .col_hormiga img {
    width: 20px;
  }

  .section_places .col_hormiga a {
    text-decoration: none;
    color: #000000;
    font-family: 'Gotham';
  }

  .section_places .col_hormiga a b {
    font-family: 'Gotham Bold';
  }

  .section_places .col_hormiga span {
    font-family: 'Gotham Bold';
    font-size: 20px;
  }

  .section_places .col_hormiga h2 {
    font-family: 'FreightDisp Medium';
    font-style: italic;
    font-size: 50px;
  }

  .section_places .tags_places ul {
    list-style: none;
    padding: 0px;
  }

  .section_places .tags_places ul li a {
    border-radius: 25px;
    font-family: "Montserrat", sans-serif;
    font-size: 20px;
    color: #666666;
    text-decoration: none;
    padding: 13px 20px;
    border: 1px solid #929292;
  }
</style>

<body style="background-color: #ffffff;">

  <?php include 'app/header-all.php'; ?>

  <main>
    <section class="section_places">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col_hormiga ">
            <div class="ali mb-4"><img src="assets/img/hormiga.svg"> <a href="index.php"><b>HOME</b></a></div>

            <span>OUR RECOMMENDED</span>

            <h2 class="mt-2">PLACES TO VISIT</h2>
          </div>

          <div class="col-lg-12 tags_places">
            <ul>
              <li><a href=""><img src="assets/img/tag_places.svg" class="mx-2">Places</a></li>
            </ul>
          </div>
        </div>

        <div class="row">

        </div>

        <div class="row py-5">
          <div class="col-lg-4">
            <?php foreach ($spaceObj as $result) : ?>
              <div class="card_place">
                <a href="detalle-place.php">
                  <img src="dashboard/files/space/<?= $result->main_image; ?>" class="img-fluid w-100 img_place_banner">
                </a>
                <div class="row align-items-center py-3">
                  <div class="col-6 name_place">
                    <p><?= $result->name; ?></p>
                  </div>
                  <div class="col-6 review_star">
                    <img src="assets/img/star.svg">
                  </div>
                </div>
                <div class="ubicacion_personas">
                  <ul class="">
                    <li><img src="assets/img/ul-ubi.svg"><?= $result->location; ?></li>
                    <li><img src="assets/img/ul-user.svg"><?= $result->maximum_people; ?> Guest</li>
                  </ul>
                </div>
                <div class="price_place">
                  <p>$<?= $result->price; ?> <span>/ night</span></p>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="col-lg-8">
            <div class="div_mapa_places">
              <img src="assets/img/map-places.png" class="img-fluid w-100">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <style type="text/css">
    .img_place_banner{
      border-radius: 15px;
    }
    .section_places .card_place .name_place p{
      font-family: 'Gotham';
      font-size: 28px;
      margin: 0px; 
    }

    .section_places .card_place .review_star {
      text-align: right;
    }

    .section_places .card_place .ubicacion_personas ul {
      padding: 0px;
      display: flex;
      list-style: none;
    }

    .section_places .card_place .ubicacion_personas ul li {
      margin-right: 15px;
    }
    .section_places .card_place .ubicacion_personas ul li img{
      width: 30px;
    }

    .section_places .card_place .ubicacion_personas ul li a {
      font-family: 'Gotham';
      text-decoration: none;
      color: #000000;
    }

    .section_places .card_place .ubicacion_personas ul li a img {
      width: 26px;
      margin-right: 8px;
    }

    .section_places .card_place .price_place p {
      font-family: 'Gotham';
      font-size: 36px;
    }

    .section_places .card_place .price_place p span {
      font-size: 20px;
    }

    .section_places .div_mapa_places {}
  </style>
  <?php include 'app/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<!-- RECUPERAR DATOS DE LOCALSTORAGE -->
<script>
  $(document).ready(function() {
    // Recuperar datos de localStorage y llenar los campos del formulario
    if (localStorage.getItem('fecha1')) {
      $('#fecha1').val(localStorage.getItem('fecha1'));
    }
    if (localStorage.getItem('fecha2')) {
      $('#fecha2').val(localStorage.getItem('fecha2'));
    }
    // if (localStorage.getItem('destination')) {
    //   $('#destination').val(localStorage.getItem('destination'));
    // }
    // if (localStorage.getItem('guests')) {
    //   $('#guests').val(localStorage.getItem('guests'));
    // }
  });
</script>