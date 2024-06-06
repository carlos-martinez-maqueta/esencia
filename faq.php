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
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
  <link rel="stylesheet" type="text/css" href="assets/css/terms-of-service.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body style="background-color: #ffffff;">

  <?php include 'app/header-all.php'; ?>

  <main>
    <section class="section_terms_of_service">
      <div class="container">
        <div class="row">
          <div class="col-12 py-5">
            <h3 class="text-center mb-4">FAQ</h3>
            <div>
              <h5>1. Check-In and Check-Out Times</h5>
              <p>Our check-in time is after 3:00 PM, and check-out time is before 11:00 AM. Please let us know if you have different travel times, and we will try to accommodate you as best as we can. Due to our high occupancy rate, early check-in or late check-out incurs an additional cost as we need to block the night before or after your reservation.</p>

              <h5>2. Pet Policies</h5>
              <p>We welcome pets! However, please check the specifications of your reservation, as some of our villas do not allow pets. We kindly ask you to treat our villas and furniture as if they were your own. This helps avoid damage charges.</p>
              <h5>3. Parking Availability</h5>
              <p>Our luxury villas provide ample parking space, accommodating up to [X] cars. Each villa is designed to ensure convenience and ease for our guests. Should you have any specific parking needs or questions before your stay, please feel free to contact us. We are here to help make your stay as comfortable as possible.</p>
              <h5>4. Wi-Fi</h5>
              <p>In the era of digital nomads, excellent Wi-Fi is the most important service for our guests. We have ensured that all our properties are equipped with fiber optic internet so you can surf without any hassle. You can find the Wi-Fi password at the bottom of the welcome letter.</p>
              <h5>5. Additional Services</h5>
              <p>Discover how you can personalize your stay with us by adding extra cleaning services, transportation, early check-in, and late check-out. Contact us if you have any special requests. We are happy to help.</p>
              <h5>6. Transportation Services</h5>
              <p>Don’t worry about your arrival in the city. We work with various professional transportation partners to get you from one place to another safely.</p>
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