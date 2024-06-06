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
            <h3 class="text-center mb-4">Cancellation Policies</h3>
            <div>

              <h5>1. General Cancellation Policy:</h5>
              <ul>
                <li>More than 60 Days Before Check-In: Cancellations made more than 60 days before the check-in date will receive a full refund.</li>
                <li>Within 60 Days of Check-In: Cancellations made within 60 days of the check-in date will incur a fee equivalent to 50% of the total booking cost.</li>
                <li>Within 30 Days of Check-In: Cancellations made within 30 days of the check-in date will incur a fee equivalent to 100% of the total booking cost.</li>
              </ul>

              <h5>2. Peak Season Cancellation Policy:</h5>
              <ul>
                <li>More than 90 Days Before Check-In: For bookings during peak seasons (e.g., holidays, festivals), cancellations made more than 90 days before the check-in date will receive a full refund.</li>
                <li>Within 90 Days of Check-In: Cancellations made within 90 days of the check-in date will incur a fee equivalent to 50% of the total booking cost.</li>
                <li>Within 45 Days of Check-In: Cancellations made within 45 days of the check-in date will incur a fee equivalent to 100% of the total booking cost.</li>
              </ul>

              <h5>3. Non-Refundable Rates:</h5>
              <ul>
                <li>Some of our special rates and promotions may be non-refundable. These bookings cannot be canceled or modified, and no refunds will be issued.</li>
              </ul>

              <h5>4. Early Departures:</h5>
              <ul>
                <li>No refunds will be issued for early departures or unused nights.</li>
              </ul>

              <h5>5. Force Majeure:</h5>
              <ul>
                <li>In the event of unforeseen circumstances such as natural disasters, pandemics, or government travel restrictions, we will work with guests to reschedule their stay or provide a credit for future use. Refunds in such cases will be evaluated on a case-by-case basis.</li>
              </ul>


              <h5>6. Travel Insuranc:</h5>
              <ul>
                <li>We strongly recommend that guests purchase travel insurance to cover any unexpected changes to their travel plans. This can provide additional protection and peace of mind in case of emergencies.</li>
              </ul>

              <h5>7. How to Cancel:</h5>
              <ul>
                <li>To cancel your booking, please contact our reservations team via email or phone. Ensure you have your booking confirmation number and personal details ready for verification.</li>
              </ul>

              <p>For any questions or further clarification on our cancellation policies, please contact our customer service team.</p>
















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