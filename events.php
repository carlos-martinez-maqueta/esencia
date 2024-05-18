<?php

include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';

$servicesFolderObj = Folder::getFolderService();



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

<body style="background-color: #ffffff;">

  <?php include 'app/header-all.php'; ?>

  <main>
    <section class="section_events">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 col_hormiga ">
            <div class="ali"><img src="assets/img/hormiga.svg"> <a href="index.php"><b>HOME</b></a> / <a href=""><b>SERVICES</b></a> / EVENTS</div>
          </div>

          <div class="col-lg-12">
            <div class="row">
              <div class="col-5">
                <div><img src="dashboard/files/service/<?= $servicesFolderObj->banner; ?>" class="img-fluid"></div>
              </div>
              <div class="col-7">
                <div class="service">
                  <div class="efect_text">
                    <div class="linea"></div>
                    <p>EVENTS</p>
                  </div>
                  <div class="info_service">
                    <p><?= $servicesFolderObj->title; ?></p>

                    <span>
                      <?= $servicesFolderObj->description; ?>
                    </span>

                    <form>
                      <div class="row">
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Name*</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Last Name*</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Mail*</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Phone*</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Number of Attendees*</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Type of events*</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">Country*</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="" placeholder="">
                            <label for="">City* </label>
                          </div>
                        </div>
                      </div>

                      <div class="mt-5">
                        <button class="btn">SEND MESSAGE</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'app/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>