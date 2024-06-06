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
    <link rel="stylesheet" type="text/css" href="assets/css/pay-done.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>

  <style type="text/css">
    .main_pay_done{
      margin-top: 40px;
      background: url(assets/img/banner_pay.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

  </style>
  <body style="background-color: #ffffff;">

    <?php include 'app/header-all.php'; ?>

    <main class="main_pay_done">
        <section class="">
          <div class="container">
            <div class="row justify-content-between py-5">
               <div class="col-lg-6 o ">
                 <div class="point_confirm">
                   <div class="mx-2">
                     <img src="assets/img/pay/ubicacion_punto.svg">
                   </div>
                   <div>
                     <span>Villa Escencia</span>
                     <p>México</p>
                   </div>
                 </div>

                 <div class="text_confirm_p">
                   <p>We are premier hotel booking service that caters to the discerning traveler in search of luxury and sophistication.</p>
                 </div>

                 <div class="lema_confirm">
                   <div> 
                     <img src="assets/img/pay/slogan.svg" class="me-4">
                   </div>
                   <div>
                     <p>Book Perfect Stay <br> For Your Vacation</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4  ">
                 <div class="card_pay">
                   <div class="booking_confirmed">
                    <div class="done_div">
                      <img src="assets/img/pay/done.svg">
                      <p>Booking <br> is confirmed!</p>
                    </div>
                    <div class="banner_div">
                      <img src="assets/img/pay/banner.png">
                    </div>
                   </div>

                   <div class="fondo_oscuro">
                     <div class="flex_items_check">
                       <div class="item_chec_text">Check In</div>
                       <div class="item_chec_date">07-05-2024</div>
                     </div>
                     <div class="flex_items_check">
                       <div class="item_chec_text">Check Out</div>
                       <div class="item_chec_date">09-05-2024</div>
                     </div>
                     <div class="flex_items_check">
                       <div class="item_chec_text">Guests</div>
                       <div class="item_chec_date">5 people</div>
                     </div>  
                     <div class="calendar_add">
                        <p>Add to Calendar</p>

                        <ul>
                          <li><a href=""><img src="assets/img/pay/apple.svg"></a></li>
                          <li><a href=""><img src="assets/img/pay/google.svg"></a></li>
                          <li><a href=""><img src="assets/img/pay/link.svg"></a></li>
                        </ul>
                     </div>                                        
                   </div>
                 </div>
                 <div class="info_pay">
                    <div class="ubicacion_detail">
                      <div class="img_ubis">
                        <img src="assets/img/pay/ubi.png">
                      </div>
                      <div class="name_ubis">
                        <div class="div_ubis mb-3">
                          <div class=""><p>Your Stay:</p></div>
                          <div class="end_text"><span>Villa <br> Escencia</span></div>
                        </div>
                        <div class="div_ubis">
                          <div class="top_text"><p>Get Directions:</p></div>
                          <div class="end_text"><p>La Veleta, <br> Tulum</p></div>
                        </div>
                      </div>
                    </div>
                    <div class="method_pay">
                      <div class="icon_pay">
                        <a href=""><img src="assets/img/pay/payapple.svg">Pay</a>
                      </div>
                      <div class="name_pay">
                        <p>Apple Pay</p>
                      </div>
                      <div class="cofirm_pay">
                        Confirmed
                      </div>
                    </div>
                    <div class="flex_detail">
                       <a href="" class="booking_detail">Booking details</a>
                       
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