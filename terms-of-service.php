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
            <h3 class="text-center mb-4">Terms of Service</h3>
            <div>
              <p>This document is a legally binding agreement ("Agreement"). Please review these Terms of Service thoroughly before using this website or our mobile application.
              </p>
              <p>These Terms of Service ("Terms") apply to all websites and mobile applications (together referred to as the "Applications") of Wynwood House brands, which are owned, licensed, and operated by {name of the company}, including its affiliates and subsidiaries ("name of the company," "we," or "us").</p>
              <p>By accessing, viewing, transmitting, caching, storing, or otherwise using the Applications, the services or features offered through the Applications, or the content available within, you agree to all the terms and conditions detailed below. If you do not agree to all these terms and conditions, please discontinue use of the Applications immediately. We reserve the right to change or remove parts of these Terms at any time without notice, with changes becoming effective immediately unless stated otherwise. Please review the Terms periodically for updates. Continuing to use the Applications after changes are posted means you accept those changes.</p>
              <h5>Information Submission</h5>
              <p>Your information submissions through the Applications are governed by our Privacy Policy, which is incorporated here by reference and also regulates your use of the Applications. The Privacy Policy explains our practices, including how we collect, use, and disclose personal information. You confirm that any information you provide through the Applications is accurate and complete, and you agree to update this information as necessary.</p>

              <h5>Use of the Applications</h5>
              <p>The services offered through the Applications are not intended for minors and should not be used by individuals under 18 years of age. You may only use these services if you are at least 18 years old and capable of entering into legally binding contracts under applicable law. Additional terms and conditions may apply to reservations, transactions, purchases, activities, or other uses through the Applications. You agree to comply with these Terms and any applicable additional terms.</p>
              <p>You also warrant that you have the legal authority to make travel reservations and purchases for yourself or on behalf of another person for whom you are authorized to act. You may only use the Applications to make legitimate reservations or purchases and must not use them for any other purposes, including speculative, false, or fraudulent reservations or reservations made in anticipation of demand.</p>
              <p>We reserve the right to cancel or modify reservations if it appears that a customer has engaged in fraudulent or inappropriate activity or if the reservations contain or result from an error or mistake, or an attempt to bypass Wynwood House or specific hotel policies, terms, or conditions.</p>
              <p>You agree not to use any device, software, or method to interfere or attempt to interfere with the proper functioning of the Applications. You also agree not to take any action that imposes an unreasonable or disproportionately large load on our infrastructure. Additionally, you agree not to use any robot, spider, or other automatic device or manual process to monitor, scrape, or copy the Applications or the information contained within without prior written consent from {name of the company}. You also agree not to use our Applications for any illegal purposes or in any manner prohibited by these Terms. You agree not to interrupt, disrupt, alter, destroy, impair, restrict, tamper, or otherwise affect the proper operation of the Applications, including through the use of malicious or unauthorized code, viruses, worms, Trojan horses, malware, or other harmful programs. You may not use the Applications in a threatening, defamatory, obscene, inflammatory, pornographic, discriminatory, or otherwise offensive manner. We reserve the right to revoke or deny access to the Applications at our discretion, especially if you violate any of the provisions of these Terms.</p>

              <h5>Booked Properties</h5>
              <p>Subject to your full compliance with this Agreement and applicable law, we grant you a limited, non-transferable, non-sublicensable, revocable license to occupy a specific unit at a specific property for the specific period you have reserved, for non-commercial purposes only, and for the maximum number of occupants permitted by us, as confirmed in writing (a “Confirmation”) and provided by email or other means. For clarity, we are not obligated to make the property available, and no binding contract exists until you receive the Confirmation, at which point your reservation is deemed "completed." You do not have any rights to renewal, extension, or recurring use of the property. </p>


              <h5>Cancellation Policy</h5>
              <p>Please click here to read our Cancellation Policies.</p>
              <h5>Authorization</h5>
              <p>You authorize us to charge all applicable sums (including any security deposits, reservation fees, subscription fees, and other service fees, including for On-Site Services) for reservations, subscriptions, and other purchases made through the Service. This includes all applicable taxes (e.g., goods and services tax, sales tax, value-added tax, city taxes, hotel and occupancy tax). These charges will be applied to the payment method specified in your account or indicated when you submit the reservation or enter into any related agreements with us (the “Applicable Payment Method”). If the Applicable Payment Method is a credit card, we may seek pre-authorization to verify its validity and availability of funds or credit. You authorize us to place a hold on the card for sums sufficient to cover any applicable fees and any other charges owed under this Agreement. If any service fees are charged in connection with your use of the Applicable Payment Method, you will be responsible for these fees.</p>
              <h5>Damaged Property</h5>
              <p>You are responsible for leaving any booked property in the condition it was in when you arrived and for adhering to all related terms applicable to your stay. You agree to be responsible for your actions, as well as those of your guests and pets. If we reasonably believe that you, your guests, or pets have damaged the property or removed or stolen any items, we will notify you with evidence and give you two business days to respond. After this period, we may charge the Applicable Payment Method for the full amount of any lost revenue and the costs of repairing or replacing the damaged property ("Damaged Property Fee"). Additionally, if damage, removal, or theft occurs, we may terminate this Agreement and remove you and your guests from the property. We reserve the right to fix the damaged property as we see fit and pursue any available means to collect the Damaged Property Fee. This may include charging the Applicable Payment Method up front or in installments, or making claims under your insurance policy, with your cooperation as needed.</p>

              <h5>Personal Items</h5>
              <p>We are not responsible for any personal property left in our properties. Before the end of your occupancy period, you must remove all personal items. If you fail to do so, we will remove, store, or dispose of these items in accordance with applicable law, after making reasonable efforts to notify you. You will be responsible for any fees incurred. We recommend obtaining renter’s or personal property insurance to protect against damage or loss of personal items.</p>

              <h5>Content</h5>
              <p>Any photographic or video material produced within our properties must be credited when shared on social media (tagged). Such material cannot be used for advertising, either online or in print, without explicit authorization from us. Failure to comply will result in a US$100.00 penalty per photo or video and may lead to legal action.</p>
              <h5>Accounts/Passwords</h5>
              <p>We may allow you to create an account with a username and password to access certain areas of the Applications. You are responsible for maintaining the confidentiality of your login information. You will be financially accountable for all uses of the Applications through your account. You agree to notify us immediately of any unauthorized use of your account and to log out at the end of each session. We will not be responsible for any loss or damage resulting from your failure to comply with these provisions.</p>
              <h5>Promotional Information</h5>
              <p>The Applications may display information about specific programs, offers, or promotions ("Promotions"). Each Promotion is subject to its specific terms, conditions, and restrictions. We reserve the right to change or withdraw any Promotion at any time without notice. Each Promotion is void where prohibited by law.</p>
              <h5>Links to Third-Party Websites</h5>
              <p>The Applications may contain links to third-party websites for your convenience. We do not endorse, sponsor, or recommend these websites or their services and are not responsible for their content, services, or any issues that arise from your use of them. Use these links at your own risk, and be aware that third-party websites may have their own terms and conditions.</p>
              <h5>Disclaimers</h5>
              <p>Electronic transmissions, including the internet, are public media. Any use of such media is public, not private. Information related to or arising from such use is public or belongs to those collecting information, not personal or private.</p>
              <p>You agree to use the Applications at your own risk. The Applications and the information contained within are provided "as is" and "as available," without any warranties of any kind, either express or implied. We do not guarantee that the Applications or the information contained within will be available, accurate, uninterrupted, complete, or error-free. We are not responsible for any malicious or unauthorized code. By using the Applications, you assume all risks associated with that use.</p>
              <h5>Electronic Communications Privacy Act Notice (18 U.S.C. 2701-2711)</h5>
              <p>We do not guarantee the confidentiality or privacy of any communication or information transmitted through the Applications or any linked websites. We will not be liable for the privacy of information, email addresses, registration and identification information, disk space, communications, confidential or trade-secret information, or any other content transmitted over networks accessed by the Applications.</p>
              <p>No oral advice, written correspondence, or information provided by us will create a warranty of any kind, and you should not rely on such information or advice.</p>
              <p>The material in the Applications is for general reference only. We do not warrant that the materials are accurate, current, complete, reliable, or useful. We do not warrant that the Applications or related information, services, contents, or materials will be continuously available, uninterrupted, error-free, or free of viruses or other harmful components. We reserve the right to update the Applications at any time, but we are under no obligation to do so.</p>
              <p>You agree that you use the Applications at your own risk. To the maximum extent permitted by law, the Applications and information contained therein are provided "as is" and "as available," without warranty of any kind, either express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
              <p>We make no warranties or guarantees that the Applications and/or the information contained within will be available, adequate, accurate, uninterrupted, complete, or error-free. We are not responsible or liable for any malicious or unauthorized code, and you are solely responsible for ensuring you have appropriate scanning and protective mechanisms for the security of your devices, programs, and information.</p>
              <p>By using any of the Applications, you assume all risks of loss that may arise or be associated with that use.</p>









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