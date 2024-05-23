<?php
include 'dashboard/config/conexion.php';
include 'dashboard/class/folder.php';
include 'dashboard/class/user.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/header-all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="index.js" defer></script>
  </head>
  <body>
    <?php include 'app/header-all.php'; ?>
    <!-- Display a payment form -->
      <div id="checkout" class="mt-5 p-5">
        <!-- Checkout will insert the payment form here -->
      </div>

      <?php include 'app/footer.php'; ?>  
  </body>
</html>