<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago con Stripe</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <form id="payment-form">
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>
        <button type="submit">Pagar</button>
        <div id="card-errors" role="alert"></div>
    </form>

    <script>
        var stripe = Stripe('pk_test_51PHp94P8D8E0X1o3tCvURXEzagUkuFeinlYJIJCD4LWqj0YwMKYxvKI5sByqYdFm8hUrmRjDVr2l7ZVf0pO35lvo00WXNfKcfn');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
            }).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    fetch('backend.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            payment_method: result.paymentMethod.id
                        })
                    }).then(function(response) {
                        return response.json();
                    }).then(function(paymentIntent) {
                        stripe.confirmCardPayment(paymentIntent.clientSecret).then(function(result) {
                            if (result.error) {
                                var errorElement = document.getElementById('card-errors');
                                errorElement.textContent = result.error.message;
                            } else {
                                if (result.paymentIntent.status === 'succeeded') {
                                    alert('Pago exitoso!');
                                }
                            }
                        });
                    });
                }
            });
        });
    </script>
</body>
</html>
