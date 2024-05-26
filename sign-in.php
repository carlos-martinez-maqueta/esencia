<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIGN IN - VILLA ESENCIA TULUM</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
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
              <div class="ali"><img src="assets/img/hormiga.svg"> <a href="index.php"><b>HOME</b></a> / LOGIN</div>
            </div>
            <div class=" ">
              <img src="">
            </div>

            <div class="conte_login">
              <p>Login to your account</p>
              <span>Enter your credential to access your account</span>

              <form id="access" class="mt-5" method="POST" enctype="multipart/form-data">
                <div class="">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="" name="username" placeholder="">
                    <label for="">Email</label>
                  </div>
                </div>
                <div class="">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="" name="password" placeholder="">
                    <label for="">Password</label>
                  </div>
                </div>
                <div class="register_add">
                  Don't have an account? <a href="sign-up">Register here </a>
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
  <?php include 'dashboard/app/components/loading.php'; ?>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
  <!-- Access -->
  <script src="dashboard/assets/js/user/access2.js"></script>

</body>

</html>