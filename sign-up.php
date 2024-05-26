<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIGN IN - VILLA ESENCIA TULUM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">


  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">


</head>
<style type="text/css">
  .col_hormiga {
    padding: 70px 0px 40px;
    font-size: 16px;
  }

  .col_hormiga img {
    width: 20px;
  }

  .col_hormiga a {
    font-size: 16px;
    text-decoration: none;
    color: #000000;
    font-family: 'Gotham';
  }

  .col_hormiga a b {
    font-family: 'Gotham Bold';
  }

  .conte_login p {
    font-family: 'Gotham Bold';
    font-size: 36px;
  }

  .conte_login span {
    font-family: 'Gotham';
    font-size: 20px;
  }

  .conte_login form label {
    font-family: 'Gotham';
    font-size: 16px;
    color: #797979;
  }

  .register_add {
    margin: 15px 0px 0px 0px;
    font-family: 'Gotham';
    font-size: 16px;
  }

  .register_add a {
    /*    text-decoration: none;
    color: #00000*/
  }

  .conte_login .btn_login {
    margin: 20px 0px 0px 0px;
    background-color: #000000;
    color: #ffffff;
    font-family: 'Gotham';
    font-size: 12px;
    padding: 8px 20px;
    border-radius: 0px;
  }

  .medio_center {
    width: fit-content;
    margin: auto;
  }
</style>

<body>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <img src="assets/img/sign/in.png" class="img-fluid w-100">
        </div>
        <div class="col-lg-6">
          <div class="medio_center">
            <div class="col_hormiga">
              <div class="ali"><img src="assets/img/hormiga.svg"> <a href="index.php"><b>HOME</b></a> / REGISTER</div>
            </div>
            <div class=" ">
              <img src="">
            </div>

            <div class="conte_login">
                <p>Create an account</p>
                <span>Please fill out form to register</span>
                <form class="mt-5" id="add-client" method="POST" enctype="multipart/form-data">
                  <div class="">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                      <label for="">Name</label>
                    </div>
                  </div>
                  <div class="">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required>
                      <label for="">Last Name</label>
                    </div>
                  </div>
                  <div class="">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                      <label for="">Email</label>
                    </div>
                  </div>
                  <div class="">
                    <div class="mb-3">
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="countrySelectRegister" name="country" required>
                        <option value="Argentina">Argentina</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cuba">Cuba</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Italy">Italy</option>
                        <option value="Mexico" selected>Mexico</option>
                        <option value="Peru">Peru</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Russia">Russia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Turkey">Turkey</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                      </select>
                    </div>
                  </div>
                  <div class="">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
                      <label for="phone">N* Phone</label>
                    </div>
                  </div>
                  <div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck" required>
                      <label class="form-check-label" for="termsCheck">I accept the <a href="terms-and-conditions" target="_blank">terms and conditions</a></label>
                    </div>
                  </div>
                  <div class="register_add">
                    Do you already have an account? <a href="sign-in">Login here </a>
                  </div>
                  <div>
                    <button type="submit" class="btn_login btn">SUBMIT</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'dashboard/app/components/loading.php' ; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- SWEETALERT CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>

  <script src="dashboard/assets/js/folder/client/add-client.js"></script>

  <script>
    const countrySelectRegister = document.getElementById('countrySelectRegister');
    const phone = document.getElementById('phone');

    // Define un objeto con los códigos de país y sus prefijos
    const countryCodes = {
      'Argentina': '+54',
      'Brazil': '+55',
      'Chile': '+56',
      'Colombia': '+57',
      'Costa Rica': '+506',
      'Cuba': '+53',
      'France': '+33',
      'Germany': '+49',
      'Italy': '+39',
      'Mexico': '+52',
      'Peru': '+51',
      'Portugal': '+351',
      'Russia': '+7',
      'South Africa': '+27',
      'Spain': '+34',
      'Sweden': '+46',
      'Turkey': '+90',
      'United Kingdom': '+44',
      'United States': '+1',
      'Uruguay': '+598',
      'Venezuela': '+58'
    };

    // Establece el prefijo inicial para el país seleccionado por defecto
    window.onload = function() {
      const selectedCountry = countrySelectRegister.value;
      const prefix = countryCodes[selectedCountry];
      if (prefix) {
        phone.value = prefix;
      }
    };

    countrySelectRegister.addEventListener('change', function() {
      const selectedCountry = countrySelectRegister.value;
      const prefix = countryCodes[selectedCountry];

      if (prefix) {
        phone.value = prefix;
      } else {
        phone.value = ''; // Restablece el campo si no se encuentra un prefijo
      }
    });
  </script>
</body>

</html>