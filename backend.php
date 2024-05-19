<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $body = json_decode($input, true);

    try {
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => 1000, // el monto en centavos
            'currency' => 'usd',
            'payment_method' => $body['payment_method'],
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);

        echo json_encode(['clientSecret' => $paymentIntent->client_secret]);
    } catch (Error $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

?>