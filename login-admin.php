<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Login Admin</title>
    <!-- CDN CSS Bootstrap 5.2.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="dashboard/assets/css/login.css">
    <!-- CDN Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <!-- SweetAlert CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">

</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-4 card_login py-4 px-3 rounded">
                <div class="mb-3">
                    <h2 class="text-white noto-serif-jp-regular">Welcome Back</h2>
                </div>
                <div class="px-4">
                    <form id="access" method="POST" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-sm bg-transparent border-0 text-white" id="floatingInput" name="username" placeholder="name@example.com">
                            <label for="floatingInput" class="text-white">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-sm bg-transparent border-0 text-white" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword" class="text-white">Password</label>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Loading -->
    <?php include 'dashboard/app/components/loading.php' ?>
    <!-- CDN JS Bootstrap 5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
    <!-- Access -->
    <script src="dashboard/assets/js/user/access.js"></script>






</body>

</html>