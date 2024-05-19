<?php

require '../vendor/autoload.php';

$stripe = new \Stripe\StripeClient([
  "api_key" => 'sk_test_51PHp94P8D8E0X1o3lrxDHu79N0ql7bUkiGjbHaYoavzdOxf1hIUhKY9h4jzBlMHAL0LB8zjgPTDjrk8OGclQCXee00msXLjbzL'
]);

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'ui_mode' => 'embedded',
  'return_url' => 'https://example.com/checkout/return?session_id={CHECKOUT_SESSION_ID}',
]);

header('Content-Type: application/json');
echo json_encode(array('clientSecret' => $checkout_session->client_secret));
?>
