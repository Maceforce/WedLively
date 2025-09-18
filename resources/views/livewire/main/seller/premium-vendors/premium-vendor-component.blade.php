<div>
    <!-- @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif -->




    <style>
        ul.marker-light li::marker {
            color: #ffcccc!important;
        }
        .alert.alert-success {
            text-align: center;
            color: green;
            font-weight: 900;
            padding: 6px 0px;
            border: 1px solid green;
        }
    </style>
    
    <div class="w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                <div class="mx-auto max-w-7xl">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">Premium Membership</h2>

@if ($isPremium)
						<div class="mt-2 flex items-center text-sm text-gray-500 dark:text-zinc-200" style="font-weight: bold;COLOR:GREEN;">
                                <svg class="ltr:mr-1.5 rtl:ml-1.5 -mt-0.5 h-4.5 w-4.5 flex-shrink-0 text-gray-400 dark:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0H24V24H0z"></path><path d="M12 1l8.217 1.826c.457.102.783.507.783.976v9.987c0 2.006-1.003 3.88-2.672 4.992L12 23l-6.328-4.219C4.002 17.668 3 15.795 3 13.79V3.802c0-.469.326-.874.783-.976L12 1zm4.452 7.222l-4.95 4.949-2.828-2.828-1.414 1.414L11.503 16l6.364-6.364-1.415-1.414z" style="color: green;"></path></g></svg>
                                Premium Vendor!
                            </div>
					@else
						<!-- <p>You are not a premium vendor.</p> -->
					@endif

        
                        
                        <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                                
                                <li>
                                    <div class="flex items-center">
                                        <a href="https://compassionate-williamson.70-35-202-80.plesk.page" class="text-sm font-medium text-gray-700 hover:text-gray-500 dark:text-zinc-300 dark:hover:text-white">
                                            Home                                    </a>
                                    </div>
                                </li>
                
                                
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                        <a href="https://compassionate-williamson.70-35-202-80.plesk.page/seller/home" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                            My dashboard                                    </a>
                                    </div>
                                </li>
                
                                
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                        <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        Premium Membership                                  </span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">
                        <span class="block">
                            <!-- <a href="#" class="inline-flex items-center rounded-sm border border-red-400 bg-red-400 px-4 py-2 text-[13px] font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">Purchase</a> -->
                        </span>
                    </div>
                </div>
                <div class="mt-8 p-8 bg-white shadow-sm border border-gray-100 dark:border-zinc-700">
                    <div class="flex justify-between">
                        <div>
                            <h3 class="font-bold text-lg mb-0">Premium Perks</h3>
                            <p class="font-medium mb-3 text-gray-400 uppercase b-0 text-sm">Features</p>
                        </div>
                        <h3 class="font-bold text-lg mb-0 text-red-400">$65.00</h3>
                    </div>


                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                    <hr>    

                        <script src="https://js.stripe.com/v3/"></script>

                        <div style="max-width: 100%; margin: 0 auto;">
                            <h3 class="font-bold text-lg mt-6 mb-3">Subscribe for Premium Vendor</h3>
                            
                            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #666;">Email Address</label>
                            <input type="email" wire:model="email" placeholder="Enter your email" class="focus:ring-red-400" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ddd;" />
                            
                            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #666;">Card Information</label>
                            <div id="card-element" style="padding: 10px; border: 1px solid #ddd; margin-bottom: 15px;"></div>
                            
                            <button id="submit-button" onclick="handleSubscription()" class="inline-flex items-center justify-center rounded-sm border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">
                                Subscribe
                            </button>

                            <script>
                                var stripe = Stripe("{{ env('STRIPE_KEY') }}");
                                var elements = stripe.elements();
                                var card = elements.create("card");
                                card.mount("#card-element");

                                function handleSubscription() {
                                    stripe.createPaymentMethod({
                                        type: 'card',
                                        card: card,
                                        billing_details: {
                                            email: @this.get('email')
                                        },
                                    }).then((result) => {
                                        if (result.error) {
                                            alert(result.error.message); // Display error
                                        } else {
                                            // Pass the payment method ID to the component
                                            @this.set('paymentMethod', result.paymentMethod.id);
                                            @this.call('createSubscription');
                                        }
                                    });
                                }
                            </script>
                        </div>

                        <style>
                            #card-element {
                                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
                                padding: 10px;
                                border-radius: 4px;
                                background-color: #f9f9f9;
                            }
                        </style>
                   
                </div>
            </div>
            </div>
        </div>
    </div>
</div>