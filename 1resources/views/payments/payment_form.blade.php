<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Stripe Payment Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        .form-group {
            margin-bottom: 15px;
        }

        #card-element {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
        }

        .StripeElement {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Stripe Payment Form</h2>
        <form id="payment-form" class="mt-3">
            <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount (USD)</label>
                <input type="number" id="amount" class="form-control" placeholder="Amount" required>
            </div>
            <div class="form-group">
                <label for="card-element">Card Details</label>
                <div id="card-element"><!-- Stripe Elements will be inserted here. --></div>
            </div>
            <button type="submit" id="submit-button" class="btn btn-primary">Pay</button>
            <div id="error-message" class="text-danger mt-3"></div>
        </form>
    </div>

    <script>
        const stripe = Stripe("{{ config('services.stripe.key') }}");
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const submitButton = document.getElementById('submit-button');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            submitButton.disabled = true;

            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                },
            });

            if (error) {
                document.getElementById('error-message').textContent = error.message;
                submitButton.disabled = false;
            } else {
                processPayment(paymentMethod.id);
            }
        });

        function processPayment(paymentMethodId) {
            fetch("{{ route('payment.process') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    payment_method_id: paymentMethodId,
                    amount: document.getElementById('amount').value,
                }),
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    alert('Payment successful!');
                } else {
                    document.getElementById('error-message').textContent = result.error || 'Payment failed!';
                    submitButton.disabled = false;
                }
            })
            .catch(() => {
                document.getElementById('error-message').textContent = 'Error processing payment!';
                submitButton.disabled = false;
            });
        }
    </script>
</body>
</html>
