<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VILLA ESENCIA TULUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="assets/css/header-all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  </head>

  <style type="text/css">
    .main_pay_done{
      margin-top: 40px;
      background: url(assets/img/banner_pay.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .main_pay_done .card_pay{
      margin: 0px 0px 20px 0px;
      padding: 20px 30px;
      background-color: #ffffff;
      border-radius: 15px;
    }
    .main_pay_done .card_pay .booking_confirmed{
      display: flex;
    }
    .main_pay_done .card_pay .booking_confirmed .done_div{
      width: 50%;
    }
    .main_pay_done .card_pay .booking_confirmed .banner_div{
      text-align: end;
      width: 50%;
    }    
    .main_pay_done .card_pay .booking_confirmed p{
      margin: 10px 0px 0px 0px;
      font-size: 22px;
      font-family: 'Gotham';
    }
    .main_pay_done .card_pay .fondo_oscuro{
      margin: 20px 0px 0px 0px;
      border-radius: 15px;
      padding: 20px;
      background-color: #D9D9D9;
            font-family: 'Gotham';
      color: #666666;
      font-size: 16px;
    }
    .main_pay_done .card_pay .fondo_oscuro .flex_items_check{

      margin: 0px 0px 15px 0px;
      display: flex;
    }
    .main_pay_done .card_pay .fondo_oscuro .flex_items_check .item_chec_text{
      width: 50%;
    }
    .main_pay_done .card_pay .fondo_oscuro .flex_items_check .item_chec_date{
      width: 50%;
      text-align: end;
    }
    .main_pay_done .card_pay .fondo_oscuro .calendar_add ul{
      display: flex;
      align-items: center;
      margin: auto;
      width: fit-content;
      list-style: none;
      padding: 0px;
    }
    .main_pay_done .card_pay .fondo_oscuro .calendar_add ul li{
      width: 84px;
          margin: 0px 10px;
    }
    .main_pay_done .card_pay .fondo_oscuro .calendar_add ul li a{
      border: 1px solid #6C6868;
      padding: 5px 20px;
      border-radius: 50px;
      width: 100%;
      display: block;
      text-align: center;
    }
    .main_pay_done .info_pay{
      border: 3px solid #ffffff;
      padding: 20px 30px;
      border-radius: 15px;
    }
    .main_pay_done .info_pay .ubicacion_detail{
      display: flex;
      align-items: center;
      background-color: #ffffff;
      padding: 16px;
      border-radius: 15px;
      margin: 0px 0px 20px 0px;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis{
      width: 75%;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis .div_ubis{
      display: flex;
      justify-content: space-between !important;
      padding: 0px 10px;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis .div_ubis .top_text{
      padding-top: 20px;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis .div_ubis p{
      font-family: 'Gotham';
      font-size: 14px;
      margin: 0px;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis .div_ubis span{
           font-family: 'Gotham Bold';
      font-size: 16px;
    }
    .main_pay_done .info_pay .ubicacion_detail .name_ubis .div_ubis .end_text{
      width: 50%;
      text-align: end;
    }
    .main_pay_done .info_pay .method_pay{
      display: flex;
      align-items: center;
      margin: 0px 0px 20px 0px;
      background-color: #ffffff;
      border-radius: 15px;
      padding: 20px 20px;
    }
    .main_pay_done .info_pay .method_pay div{
      width: 33%;
    }
    .icon_pay a{
      font-family: 'Gotham';
      font-size: 12px;
      text-decoration: none;
      color: #666666;
      border: 1px solid #6C6868;
      border-radius: 50px;
      padding: 10px 20px;
    }
    .name_pay p{
      font-family: 'Gotham Bold';
      font-size: 16px;
      margin: 0px;
    }
    .cofirm_pay{
      font-family: 'Gotham';
      font-size: 12px;
      background-color: #000000;
      color: #ffffff;
      text-align: center;
      border-radius: 50px;
      padding: 10px;
    }
    .main_pay_done .info_pay .flex_detail a{
      font-family: 'Gotham Bold';
      border-radius: 50px;
      background-color: #ffffff;
      color: #000000;
      font-size: 16px;
      width: 50%;
      display: block;
      text-align: center;
      text-decoration: none;
      padding: 14px 0px;
    }
    .main_pay_done .point_confirm{
      display: flex;
      align-items: center;
      background-color: #ffffff;
      width: 190px;
      padding: 20px;
      border-radius: 15px;
    }
    .main_pay_done .point_confirm span{
      font-family: 'Gotham Bold';
      font-size: 14px;
    }
    .main_pay_done .point_confirm p{
      font-family: 'Gotham';
      font-size: 15px;
      margin: 0px;
    }
    .main_pay_done .text_confirm_p {
      margin: 150px 0px 0px;
    }
    .main_pay_done .text_confirm_p p{
      font-family: 'Gotham';
      font-size: 16px;
      width: 250px;
      color: #ffffff;
    }
    .main_pay_done .lema_confirm{
      margin: 200px 0px 0px;
      display: flex;
      align-items: center;
    }
    .main_pay_done .lema_confirm p{
      font-family: 'FreightDisp Medium';
      color: #FFFFFF;
      font-size: 60px;
      margin: 0px;
    }
  </style>
  <body style="background-color: #ffffff;">

    <?php include 'app/header-all.php'; ?>

    <main class="main_pay_done">
        <section class="">
          <div class="container">
            <div class="row justify-content-between py-5">
               <div class="col-lg-6">
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
               <div class="col-lg-4">
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