<?php
    require_once('vendor/autoload.php');
    $stripe = new \Stripe\StripeClient("sk_test_51PHp94P8D8E0X1o3lrxDHu79N0ql7bUkiGjbHaYoavzdOxf1hIUhKY9h4jzBlMHAL0LB8zjgPTDjrk8OGclQCXee00msXLjbzL");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = 1000; // Monto en centavos (1000 centavos = 10.00 USD)
        $currency = 'usd';
    
        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount,
                'currency' => $currency,
                'payment_method_types' => ['card'],
            ]);
    
            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];
    
            echo json_encode($output);
        } catch (Error $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
    
    // $product = $stripe->products->create([
    // 'name' => 'Starter Subscription',
    // 'description' => '$12/Month subscription',
    // ]);
    // echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

    // $price = $stripe->prices->create([
    // 'unit_amount' => 1200,
    // 'currency' => 'usd',
    // 'recurring' => ['interval' => 'month'],
    // 'product' => $product['id'],
    // ]);
    // echo "Success! Here is your starter subscription price id: " . $price->id . "\n";
?>