<?php

namespace App\Http\Livewire\Main\Seller\PremiumVendors;

use AWS\CRT\HTTP\Message;
use Livewire\Component;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use Illuminate\Support\Facades\Http;



class PremiumVendorComponent extends Component
{
    public $email;
    public $paymentMethod;

	public $stripeCustomerId;
    public $premiumSubscriptionId;
    public $isPremium;

    protected $listeners = ['paymentMethodReceived' => 'createSubscription']; 

    public function mount()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $vendor = auth()->user();

		$this->stripeCustomerId = $vendor->stripe_customer_id;
        $this->premiumSubscriptionId = $vendor->premium_subscription_id;
        $this->isPremium = $vendor->is_premium;

        // echo '<pre>';
        // print_r($vendor);
        // echo '</pre>';
        // die("test");

    }

    public function createSubscription()
    {       

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $vendor = auth()->user();

		$this->stripeCustomerId = $vendor->stripe_customer_id;
        $this->premiumSubscriptionId = $vendor->premium_subscription_id;
        $this->isPremium = $vendor->is_premium;

        // echo '<pre>';
        // print_r($vendor);
        // echo '</pre>';

        try {
            // Create or retrieve a Stripe customer based on email
            $customer = Customer::create([
                'email' => $this->email,
                'payment_method' => $this->paymentMethod,
                'invoice_settings' => [
                    'default_payment_method' => $this->paymentMethod,
                ],
            ]);            

            // Create the subscription
            $subscription = Subscription::create([
                'customer' => $customer->id,
                'items' => [['price' => 'price_1QKBxWP6Quzhke2tl4DONhcI']], // replace with actual Stripe price ID
                'expand' => ['latest_invoice.payment_intent'],
            ]);            

            $paymentIntent = $subscription->latest_invoice->payment_intent;

            if($paymentIntent->status == "succeeded"){                       

                //dd($paymentIntent);

                $vendor->update([
                    'stripe_customer_id' => $customer->id,
                    'premium_subscription_id' => $subscription->id,
                    'is_premium' => true,
                ]);

                session()->flash('success', 'Subscription created successfully!');

                //return response()->json(['status' => 'success', 'Message' => 'Successfully upgraded to premium!']);     
                //session()->flash('status', 'Successfully upgraded to premium!');
                //return redirect('seller/home');
                //return redirect()->route('seller.profile');
                //session()->flash('message', 'Subscription created successfully!');

            }

        } catch (\Exception $e) {
            //dd($e->getMessage());
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.main.seller.premium-vendors.premium-vendor-component')->extends('livewire.main.seller.layout.app')->section('content');;
    }

    public function handleWebhook(Request $request)
    {      
        $payload = @file_get_contents('php://input');
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, 
                $request->header('Stripe-Signature'), 
                env('STRIPE_WEBHOOK_SECRET')
            );

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

        // Process subscription events
        if ($event->type === 'invoice.payment_succeeded') {
            $subscription = $event->data->object;
            // Update vendor's subscription status in your database
        }

        return response()->json(['status' => 'success']);
    }


}
