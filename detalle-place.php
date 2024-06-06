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
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <style>

  </style>
  <body style="background-color: #ffffff;">

    <?php include 'app/header-all.php'; ?>

    <main>
        <section class="section_places">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col_hormiga ">
                <div class="ali mb-4"><img src="assets/img/hormiga.svg"> <a href="places"><b>PLACES</b> </a>/ <a >CASA SOLARA</a></div>

                <h2 class="mt-2">CASA SOLARA</h2>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-lg-8 col-12">
                <div class="">
                  <img src="assets/img-solistiq/detail_1.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="row aas mb-2">
                  <div class="col-12"><img src="assets/img-solistiq/detail_2.png" alt="" class="img-fluid"></div>
                </div>
                <div class="row aas">
                  <div class="col-6"><img src="assets/img-solistiq/detail_3.png" alt="" class="img-fluid"></div>
                  <div class="col-6"><img src="assets/img-solistiq/detail_4.png" alt="" class="img-fluid"></div>
                </div>
              </div>
            </div>            
            <div class="row mb-5">
              <div class="col-lg-8">

                <div class="location_hotel">
                  <p><img src="assets/img/ul-ubi.svg" class="me-3" alt="">Location: Solistiq Tulum</p>
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
                 
                  <div class="card_compras">
                    <div class="d_flex_price">
                      <div class="price_ni">$600 <span>/ night</span></div>
                      <input type="hidden" value="350" name="amout">
                      <div class="star_hotel"><img src="assets/img/pay/star.png"></div>
                    </div>
                    <div class="times_check">
                      <div class="flex_in_out">
                        <div class="check_in_div">
                          <p>Book via host partner Jungle Lux</p>
                          <!-- <span>09/05/2024</span>
                          <input type="hidden" value="09-05-2024" name="check-in"> -->
                        </div>
                        <!-- <div class="check_out_div">
                          <p>CHECK-OUT</p>
                          <span>10/05/2024</span>
                          <input type="hidden" value="10-05-2024" name="check-out">
                        </div> -->
                      </div>
                      <div class="flex_guest">
                        <div><p>GUESTS</p></div>
                        <div><span>12</span></div>
                      </div>
                    </div>
                    <div class="button_book_now">
                      <a target="_blank" href="https://jungleluxe.holidayfuture.com/listings/278625">BOOK NOW</a>
                       
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