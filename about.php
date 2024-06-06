<?php

include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';

$aboutFolderObj = Folder::getFolderAbout();
$equipmentFolderObj = Folder::getFolderEquipment();


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VILLA ESENCIA TULUM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="assets/css/header-all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
  <link rel="stylesheet" type="text/css" href="assets/css/events.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
</head>
<style>
  .section_about .col_hormiga {
    padding: 70px 0px 40px;
    font-size: 12px;
  }

  .section_about .col_hormiga img {
    width: 20px;
  }

  .section_about .col_hormiga a {
    font-size: 12px;
    text-decoration: none;
    color: #000000;
    font-family: 'Gotham';
  }

  .section_about .col_hormiga a b {
    font-family: 'Gotham Bold';
  }

  .section_about .col_hormiga span {
    font-family: 'Gotham Bold';
    font-size: 20px;
  }

  .section_about .col_hormiga h2 {
    font-family: 'FreightDisp Medium';

    font-size: 64px;
  }

  .section_about h5 {
    font-family: 'FreightDisp Medium';
    font-size: 36px;
    position: relative;
    width: fit-content;
  }

  .section_about .p_lineas:after {
    display: block;
    position: absolute;
    content: "";
    height: .125rem;
    bottom: -.3125rem;
    top: auto;
    left: 0;
    right: 100%;
    background: #000000;
    transition: right .25s ease-in-out;
  }

  .section_about .p_lineas:hover:after {
    right: 0;
  }

  .section_about .sec_about span {
    font-family: 'Gotham';
    font-size: 16px;
  }

  .section_about .sec_meet p {
    font-family: 'FreightDisp Medium';
    font-size: 36px;

  }

  .section_about .sec_meet span {
    font-family: 'Gotham';
    font-size: 16px;
  }
  .section_about .bann_about img{
    border-radius: 15px;
  }
</style>

<body style="background-color: #ffffff;">

  <?php include 'app/header-all.php'; ?>

  <main>
    <section class="section_about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col_hormiga ">
            <div class="ali"><img src="assets/img/hormiga.svg"> <a href="index"><b>HOME</b></a> / ABOUT</div>
          </div>
        </div>

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 sec_about">
            <h5 class="p_lineas"><?= $aboutFolderObj->title ?></h5>

            <span><?= $aboutFolderObj->description ?></span>
          </div>
          <div class="col-lg-6 bann_about">
            <img src="dashboard/files/about/<?= $aboutFolderObj->banner ?>" class="w-100 my-lg-0 my-4">
          </div>
        </div>

        <!-- <div class="row mb-5">
          <div class="col-lg-12 sec_meet">
            <h5 class="p_lineas">¡MEET OUR TEAM!</h5>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</span>
          </div>
          <?php //foreach ($equipmentFolderObj as $result) : ?>
            <div class="col-lg-3 mt-5">
              <div class="car_team">
                <img src="assets/img/Avatar.png" class="img-fluid mb-3">
                <p><?//= $result->name ?></p>
                <p><?//= $result->charge ?></p>
              </div>
            </div>
          <?php // endforeach; ?>
        </div> -->
      </div>
    </section>
  </main>
  <style type="text/css">
    .car_team {
      background-color: #F2F2F2;
      text-align: center;
      padding: 40px;
      border-radius: 25px;
      text-align: center;
      box-shadow: 0px 6px 4px -1px #00000066;
    }

    .car_team p {
      font-family: 'Gotham';
      color: #2C2C2C;
      font-size: 14px;
      margin: 0px;
    }
  </style>
  <?php include 'app/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>