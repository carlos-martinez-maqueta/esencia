// Initialize Stripe.js
const stripe = Stripe('pk_test_51PHp94P8D8E0X1o3tCvURXEzagUkuFeinlYJIJCD4LWqj0YwMKYxvKI5sByqYdFm8hUrmRjDVr2l7ZVf0pO35lvo00WXNfKcfn');

initialize();

// Fetch Checkout Session and retrieve the client secret
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("http://localhost:8012/esencia/stripe/public/checkout.php", {
      method: "POST",
    });
    const { clientSecret } = await response.json();
    return clientSecret;
  };

  // Initialize Checkout
  const checkout = await stripe.initEmbeddedCheckout({
    fetchClientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}