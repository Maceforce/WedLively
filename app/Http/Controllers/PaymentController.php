<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payments.payment_form');
    }

    public function createPaymentIntent(Request $request)
    {
        // Set the Stripe secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        // Convert the amount to cents (Stripe expects the amount in the smallest unit of the currency)
        $amount = $request->amount * 100;

        // Create a PaymentIntent
        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'usd',
                'payment_method' => $request->payment_method_id,
                'confirm' => true, // Automatically confirm the payment
            ]);

            $user = User::find(Auth::id()); // Retrieve the authenticated user by ID

            if ($user) {
                $user->subscription_type = 'premium';
                $user->subscription_expires_at = now()->addMonth(); // 1-month premium subscription
                $user->save(); // Save the changes
            }
            // Return a success message and client_secret if needed
            return response()->json(['success' => true, 'client_secret' => $paymentIntent->client_secret]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
