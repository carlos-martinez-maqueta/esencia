<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VILLA ESENCIA TULUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/gotham-serif-bold?styles=140064" rel="stylesheet">
                                
  </head>
  <style>

  </style>
  <body>
    <section class="section_banner">
        <div class="cont_banner">
            <div class="fondo_banner">
                <div class="menu_banner">
                    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <img src="assets/img/menu.svg" alt="">
                    </a>
                    <div class="nav_iz offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENÚ</h5>
                            <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img src="assets/img/close.svg" alt="">
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul>
                                <li><a href="">HOME</a></li>
                                <li><a href="">BOOK NOW</a></li>
                                <li><a href="about">ABOUT US</a></li>
                                <li><a href="events">SERVICES</a></li>
                            </ul>
                        </div>
                        <div class="offcanvas-bottom">
                            <ul>
                                <li><a href="login">LOGIN</a></li>
                                <li><a href="register">REGISTER</a></li>
                            </ul>
                            <div class="d-flex lenguaje">
                                <div class="w-50"><a href="">EN <img src="assets/img/en.svg" alt="" class="mx-3"></a></div>
                                <div class="w-50"><a href="">ES <img src="assets/img/es.svg" alt="" class="mx-3"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_boook_banner ">
                    <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">BOOK NOW <img src="assets/img/btn-book-now.svg" alt=""></a>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <!-- <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body px-5">
                           <h3>WELCOME TO ESENCIA</h3>

                           <p>Enjoy your stay at <br> Esencia Tulum</p>

                           <form class="mt-5" method="POST" action="places.php">
                              <div class="dates_input">
                                <div class="d-flex mb-3">
                                    <label for="">CHECK IN*</label>
                                    <input type="date" class="form-control" id="" placeholder="">
                                </div>
                              </div> 
                              <div class="dates_input">
                                <div class="d-flex mb-3">
                                    <label for="">CHECK OUT*</label>
                                    <input type="date" class="form-control" id="" placeholder="">
                                </div>
                              </div>                                                          
                            <div class="mb-3 mt-4">
                              <label for="" class="form-label">DESTINATION <img src="assets/img/destination.svg"></label>
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Place</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">GUESTS <img src="assets/img/guest.svg"></label>
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Select Guest</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>   
                            <div>
                                <button class="btn btn_plan_your" href="places.php">PLAN YOUR TRIP</button>
                            </div>                         
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/banner.png" class="img_banner" alt="">
        </div>
    </section>
    <section class="section_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <img src="assets/img/about.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="card_about">
                        <h3 class="mb-4">ABOUT OUR HOTEL</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                        <a href="" class="read_more">READ MORE <img src="assets/img/izquierda.svg" class="ms-3"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_point">
        <div class="">
            <img src="assets/img/point.png" class="d-lg-block d-none w-100">
            <img src="assets/img/banner_boletin_responsive.png" class="d-lg-none d-block w-100">
        </div>
    </section>
    <section class="section_boletin">
        <div class="container-fluid">
           <div class="row ">
                <div class="col-lg-6 banner_boletin p-0">
                    <img src="assets/img/banner_boletin.png" class="d-lg-block d-none ">
                </div>
                <div class="col-lg-6  fondo_boletin_form">
                    <div class="px-lg-5 px-3">
                        <h3 class="mb-3">Stay UPDATED</h3>
                        <p class="mb-5">SUBSCRIBE TO OUR NEWLESTTER</p>

                        <form>
                            <div class="row">
                              <div class="">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="" placeholder="">
                                  <label for="">First Name*</label>
                                </div>
                              </div>
                              <div class="">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="" placeholder="">
                                  <label for="">Last Name*</label>
                                </div>
                              </div>
                              <div class="">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="" placeholder="">
                                  <label for="">Email*</label>
                                </div>
                              </div>                              
                            </div>
                            <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <button class="btn_boletin">SUBMIT</button>
                        </form>
                    </div>
                </div>
           </div>             
        </div>
    </section>
    <?php include 'app/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>