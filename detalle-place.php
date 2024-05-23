<?php 
include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VILLA ESENCIA TULUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/header-all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/detail-places.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
  </head>
  <style>
  .section_places .col_hormiga{
    padding: 70px 0px 40px;
  }
  .section_places .col_hormiga img{
    width: 20px;
  }
  .section_places .col_hormiga a{
    text-decoration: none;
    color: #000000;
    font-family: 'Gotham';
  }
  .section_places .col_hormiga a b{
    font-family: 'Gotham Bold';
  }
  .section_places .col_hormiga span{
    font-family: 'Gotham Bold';
    font-size: 20px;
  }
  .section_places .col_hormiga h2{
    font-family: 'FreightDisp Medium';
    /* font-style: italic; */
    font-size: 50px;
  }
  .section_places .tags_places ul{
    list-style: none;
    padding: 0px;
  }
  .section_places .tags_places ul li a{
    border-radius: 25px;
    font-family: "Montserrat", sans-serif;
    font-size: 20px;
    color: #666666;
    text-decoration: none;
    padding: 13px 20px;
    border: 1px solid #929292;
  }
  .tabs_hotel ul {
    padding: 0px;
    margin: 15px 0px;
    display: flex;  
  flex-wrap: wrap;
  }
  .tabs_hotel ul li{
    list-style: none;
    border: 1px solid #929292;
    color: #666666;
    width: auto;
    padding: 14px 23px;
    margin: 0px 7px 10px 0px;
    border-radius: 50px;
    font-size: 12px;
    display: flex;
    align-items: center;
  }
  </style>
  <body style="background-color: #ffffff;">

    <?php include 'app/header-all.php'; ?>

    <main>
        <section class="section_places">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col_hormiga ">
                <div class="ali mb-4"><img src="assets/img/hormiga.svg"> <a href="index.php"><b>PLACES</b> / NATURE HOUSE</a></div>

                <h2 class="mt-2">NATURE HOUSE</h2>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-8">
                <div class="">
                  <img src="assets/img/detail.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-4">
                <div class="row aas mb-2">
                  <div class="col-12"><img src="assets/img/detail.png" alt="" class="img-fluid"></div>
                </div>
                <div class="row aas">
                  <div class="col-6"><img src="assets/img/detail.png" alt="" class="img-fluid"></div>
                  <div class="col-6"><img src="assets/img/detail.png" alt="" class="img-fluid"></div>
                </div>
              </div>
            </div>            
            <div class="row mb-5">
              <div class="col-lg-8">

                <div class="location_hotel">
                  <p><img src="assets/img/ul-ubi.svg" class="me-3" alt="">Location: Villa Escencia Tulum</p>
                </div>
                <div class="tabs_hotel">
                  <ul>
                    <li><img src="assets/svglist/wifi.svg" class="me-2" alt="">WiFi</li>
                    <li><img src="assets/svglist/pool.svg" class="me-2" alt="">Pool</li>
                    <li><img src="assets/svglist/garden.svg" class="me-2" alt="">Garden</li>
                    <li><img src="assets/svglist/washing.svg" class="me-2" alt="">Washing</li>
                    <li><img src="assets/svglist/air.svg" class="me-2" alt="">Air-conditioning</li>
                    <li><img src="assets/svglist/views.svg" class="me-2" alt="">Views</li>
                    <li><img src="assets/svglist/kitchen.svg" class="me-2" alt="">Kitchen</li>
                    <li><img src="assets/svglist/parking.svg" class="me-2" alt="">Parking</li>
                    <li><img src="assets/svglist/wifi.svg" class="me-2" alt="">Terrace</li>
                    <li><img src="assets/svglist/wifi.svg" class="me-2" alt="">Cleaning service</li>
                  </ul>
                </div>
                <div class="p_info_text">
                  <p>Villas Esencia Tulum is located in Tulum, Quintana Roo, near Bus Terminal. It offers accommodation with free WiFi, free private parking and access to the indoor pool. The villa offers a terrace, garden views, a seating area, a flat-screen TV, a fully equipped kitchen with a refrigerator and a microwave, and a private bathroom with a shower and free toiletries. A toaster and coffee maker are also provided. There is also a garden ideal for relaxing. Tulum Archaeological Zone is 6.1 km from the accommodation, and Tulum National Park is 5.3 km away. The nearest airport (Tulum International Airport) is 38 km from the accommodation, which offers a paid shuttle service to and from the airport.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div> 
                
                <div class="house_rules">
                  <h4>House's rules</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                  <div class="cuadro_rules">
                      <div class="item_rules">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/checkin.svg" class="me-3" alt="">Check-in</p>
                        </div>
                        <div class="descrip_rules">
                          <p>From 3:00 PM to 11:00 PM</p>
                          <p>You need to let the property know what time you'll be arriving in advance.</p>
                        </div>
                      </div>
                      <div class="item_rules">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/checkout.svg" class="me-3" alt="">Check-out</p>
                        </div>
                        <div class="descrip_rules">
                          <p>From 3:00 PM to 11:00 PM</p>
                        </div>
                      </div>
                      <div class="item_rules">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/cancellation.svg" class="me-3" alt="">Cancellation / Prepayment</p>
                        </div>
                        <div class="descrip_rules">
                          <p>Cancellation and prepayment policies may vary depending on the type of accommodation. 
                            Enter the dates of your stay and check the conditions of the selected room.</p>
                        </div>
                      </div>
                      <div class="item_rules">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/noage.svg" class="me-3" alt="">No age Restriction</p>
                        </div>
                        <div class="descrip_rules">
                          <p>There is no minimum age for check-in</p>
                        </div>
                      </div>
                      <div class="item_rules">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/pets.svg" class="me-3" alt="">Pets</p>
                        </div>
                        <div class="descrip_rules">
                          <p>If pets are allowed.</p>
                        </div>
                      </div>
                      <div class="item_rules border-0">
                        <div class="title_rules">
                          <p><img src="assets/img/rules/smoking.svg" class="me-3" alt="">Smoking</p>
                        </div>
                        <div class="descrip_rules">
                          <p>Smoking is not allowed.</p>
                        </div>
                      </div>                                                                                                              
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <form action="pay" method="get">
                  <div class="card_compras">
                    <div class="d_flex_price">
                      <div class="price_ni">$350 <span>/ night</span></div>
                      <input type="hidden" value="350" name="amout">
                      <div class="star_hotel"><img src="assets/img/pay/star.png"></div>
                    </div>
                    <div class="times_check">
                      <div class="flex_in_out">
                        <div class="check_in_div">
                          <p>CHECK-IN</p>
                          <span>09/05/2024</span>
                          <input type="hidden" value="09-05-2024" name="check-in">
                        </div>
                        <div class="check_out_div">
                          <p>CHECK-OUT</p>
                          <span>10/05/2024</span>
                          <input type="hidden" value="10-05-2024" name="check-out">
                        </div>
                      </div>
                      <div class="flex_guest">
                        <div><p>GUESTS</p></div>
                        <div><span>5 GUESTS</span></div>
                      </div>
                    </div>
                    <div class="button_book_now">
                      <button class="">BOOK NOW</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
 
          </div>
        </section>
    </main>
    <style>
      .card_compras{
        box-shadow: 1px 1px 7px 3px rgba(0, 0, 0, 0.2);
        height: 420px;
        border-radius: 15px;
        background-color: #ffffff;
        padding: 20px;
      }
      .card_compras .d_flex_price{
        display: flex;
        align-items: center;
        margin: 0px 0px 30px 0px;
      }
      .card_compras .d_flex_price .price_ni{
        font-family: 'Gotham';
        font-size: 36px;
        width: 50%;
      }
      .card_compras .d_flex_price .price_ni span{
        font-size: 20px;
      }
      .card_compras .d_flex_price .star_hotel{
        text-align: end;
         width: 50%;
      }
      .card_compras .times_check{
        
       border: 1px solid #000000;
       border-radius: 15px;
      }
      .card_compras .times_check .flex_in_out{
        display: flex;
      }
      .card_compras .times_check .flex_in_out p{
        font-family: 'Gotham Bold';
        font-size: 15px;
      }
      .card_compras .times_check .flex_in_out span{
        font-family: 'Gotham';
        font-size: 15px;
      }
      .card_compras .times_check .flex_in_out .check_in_div{
        padding: 20px 20px;
        width: 50%;
        border-right: 1px solid #000000;
      }
      .card_compras .times_check .flex_in_out .check_out_div{
        padding: 20px 20px;
        width: 50%;
      }
      .card_compras .times_check .flex_guest{
        display: flex;
        align-items: center;
        padding: 30px 20px;
        border-top: 1px solid #000000;
      }
      .card_compras .times_check .flex_guest p{
                font-family: 'Gotham Bold';
        font-size: 15px;
        margin: 0px;
      }
      .card_compras .times_check .flex_guest span{
                font-family: 'Gotham';
        font-size: 15px;
      }
      .card_compras .times_check .flex_guest div{
        width: 50%;
      }
      .button_book_now{
        margin: 30px 0px 0px;
      }
      .button_book_now button{
        border: none;
        width: 100%;
        font-family: 'Gotham Bold';
        padding: 18px;

        text-align: center;
        border-radius: 15px;
        background-color: #000000;        
        font-size: 16px;
        color: #ffffff;
      }
    </style>
 
    <?php include 'app/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>