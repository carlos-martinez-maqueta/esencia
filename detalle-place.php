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
    font-style: italic;
    font-size: 64px;
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
            <div class="row mb-5">
              <div class="col-lg-7"></div>
              <div class="col-lg-5">
                <form action="rama" method="get">
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