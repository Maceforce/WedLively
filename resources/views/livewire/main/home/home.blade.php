
<div class="w-full">



    <style>
        ._sda9893 {
            width: 625px;
            height: 350px;
            border-radius: 17px;
            box-shadow: 0 8px 20px 0 rgb(20 20 43 / 31%) !important;
        }

        @media only screen and (max-width: 600px) {
            ._sda9893 {
                width: 95%;
                height: 185px;
                border-radius: 17px;
                box-shadow: 0 8px 20px 0 rgb(20 20 43 / 31%) !important;
            }
        }

<<<<<<< HEAD
<<<<<<< Updated upstream
                    @foreach ($categories as $category)
                    <a href="{{ url('categories', $category->slug) }}" class="relative !h-44 rounded-lg !p-6 !flex !flex-col overflow-hidden group mx-5">
                        <span aria-hidden="true" class="absolute inset-0">
                            <img src="{{ placeholder_img() }}" data-src="{{ src($category->image) }}" alt="{{ $category->name }}" class="lazy w-full h-full object-center object-cover opacity-70 group-hover:opacity-100">
                        </span>
                        <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-90"></span>
                        <span class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name }}</span>
                    </a>
                    @endforeach
                            
=======
=======
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
        .vendor-row {
            display: flex;
            justify-content: space-between;
            margin-top:-2rem;

            /* Space between columns */
        }

        .vendor-row-col-7 {
            width: 60%;
            /* Adjust width as needed */
            background-color: #FF8080;
            /* Background color for Category 1 */
            border-top: 2px solid black;
            /* Black border on top */
            border-bottom: 2px solid black;
            /* Black border on bottom */
        }

        .vendor-row-col-5 {
            width: 40%;
            /* Adjust width as needed */
            background-color: #FFF6D8;
            /* Background color for Category 2 */
            border-top: 2px solid black;
            /* Black border on top */
            border-bottom: 2px solid black;
            /* Black border on bottom */
        }

        .custom-width {
            width: 62%;
            /* Set your desired width */
            max-width: 800px;
            /* Optional: Set a maximum width */
            margin: 0 auto;
            /* Center the element */
        }

        .plan-wedding {
            background-color: #FF8080;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            /* Ensures space is distributed evenly */
        }

        .circle-container {
            width: 200px;
            /* Adjust the width as needed */
            height: 200px;
            /* Adjust the height as needed */
            background-color: white;
            border-radius: 50%;
            /* This creates the circle */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* Center the text inside the circle */
            z-index: 1;
        }

        .circle-text {
            color: black;
            font-size: 16px;
            /* Adjust the font size as needed */
            padding: 10px;
            /* Optional: Add some padding */
        }

        .line {
            height: 2px;
            /* Adjust the line thickness */
            background-color: black;
            /* Color of the line */
            flex-grow: 1;
            /* Allows the line to grow and fill space between circles */
        }

        p.num {
            margin-top: 100px;
            font-weight: 700;
            color: black;
        }

        .line-vertically {
            height: 2px;
            /* Adjust the line thickness */
            background-color: black;
            /* Color of the line */
        }

        .vertical-line {
            width: 2px;
            height: 107px;
            /* Height of the vertical line */
            background-color: black;
            /* Line color */
            margin: 0 20px;
            /* Adjust horizontal spacing as needed */
            position: absolute;
            /* Position the line absolutely */
            right: 7%;
            /* Center the line */
            top: 50%;
            /* Adjust this value to position between step 2 and 3 */
            z-index: 0;
            /* Send it behind other elements */
        }

        .enire-plan h1 {
            font-size: 68px;
            font-weight: 700;
            line-height: 1;
            margin-top: 17%;
            margin-bottom: 4%;
        }

        .vendor-cate {
            margin: 20px;
        }

        .wed-plan h2.text-white {
            width: 25%;
            font-size: 31px;
            margin: 70px 0px 0px 50px;
            color: white;
        }

        .plan-wedding button {
            margin-right: 106px;
            margin-top: 90px;
        }

        .stress-free p.first {
            margin-top: 100px;
            text-align: left;
            margin-left: 38px;
        }

        .stress-free p {
            text-align: left;
            margin-left: 38px;
        }

        .stress-free p.second {
            padding-bottom: 100px;
        }

        .vendor-business span {
            width: 50%;
            text-transform: uppercase;
            margin-left: 30%;
            font-size: 35px;
            margin-top: 50px;
            line-height: 1;
        }

        .vendor-business p {
            width: 52%;
            margin-left: 30%;
        }
    </style>

    <div class="col-md-12 mt-6 mb-16">
        <div class="row vendor-row">
            <div class="vendor-row-col-7">
                <div class="flex justify-between rounded-lg !p-6 overflow-hidden group">
                    <div class="flex-1 mr-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-venues">Venues</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Venues</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Find the perfect venue for all sorts of events- including Mosques, Banquet Halls, and Reception Locations
                        </p>
                    </div>
                    <div class="flex-1 ml-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/caterers"> Catering </a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Catering</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Choose from the tastiest cuisines
                        </p>
                    </div>
                </div>
                <div class="flex justify-between rounded-lg !p-6 overflow-hidden group">
                    <div class="flex-1 mr-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/wedding-photographers">Photographers</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Photographers</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Remember your special day forever!
                        </p>
                    </div>
                    <div class="flex-1 ml-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/wedding-videography">Videographers</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Videographers</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Get everything recorded. Live out your wedding day as many times as you like!
                        </p>
                    </div>
                </div>
                <div class="flex justify-between  rounded-lg !p-6 overflow-hidden group">
                    <div class="flex-1 mr-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/wedding-dj">DJ’s</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">DJ’s</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Good music = Good Wedding
                        </p>
                    </div>
                    <div class="flex-1 ml-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/wedding-decorators">Decorators</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Decorators</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            Beautify your venue!
                        </p>
                    </div>
                </div>
                <div class="flex justify-between  rounded-lg !p-6 overflow-hidden group">
                    <div class="flex-1 mr-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/wedding-vendors/imams">Imams</a>
=======
                        <h2 class="text-xl font-bold text-white">Imams
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        </h2>
                        <p class="text-white mt-2">
                            Find Imams to perform your nikkah!
                        </p>
                    </div>
                    <div class="flex-1 ml-2">
<<<<<<< HEAD
                        <h2 class="text-xl font-bold text-white"><a href="categories/brides/bridal-makeup-artists">Henna Artists</a></h2>
=======
                        <h2 class="text-xl font-bold text-white">Makeup/Henna Artists</h2>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <p class="text-white mt-2">
                            You gotta look good for your wedding day!
                        </p>
                    </div>
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                </div>
            </div>
            <div class="vendor-row-col-5">
                <h2 class="text-2xl font-bold text-black mb-4 ml-4 mt-4">Vendor Spotlight</h2> <!-- Added margin-left -->

                <div class="relative !h-44 rounded-lg !p-6 !flex overflow-hidden group">
                    <div class="flex-shrink-0 w-1/2">
                        <img src="https://via.placeholder.com/300x200" alt="Category Image" class="h-full w-full object-cover rounded-lg">
                    </div>
                    <div class="flex-1 ml-4 flex flex-col justify-center">
                        <span class="text-xl font-bold text-black">Article Title</span>
                        <p class="text-black mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                        <a href="#" class="mt-4 inline-block text-black py-2">Read More</a>
                    </div>
                </div>

                <div class="relative !h-44 rounded-lg !p-6 !flex overflow-hidden group mt-4"> <!-- Added margin-top for spacing -->
                    <div class="flex-shrink-0 w-1/2">
                        <img src="https://via.placeholder.com/300x200" alt="Category Image" class="h-full w-full object-cover rounded-lg">
                    </div>
                    <div class="flex-1 ml-4 flex flex-col justify-center">
                        <span class="text-xl font-bold text-black">Article Title</span>
                        <p class="text-black mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                        <a href="#" class="mt-4 inline-block text-black py-2">Read More</a>
                    </div>
                </div>

                <!-- See all articles link -->
                <div class="mt-4 ml-5">
                    <a href="#" class="text-black hover:underline">See all articles ></a> <!-- Changed text color to black -->
                </div>
            </div>
        </div>


        {{-- Newsletter --}}
        @if (settings('newsletter')->is_enabled)
        <!-- <div class="col-span-12">
            <div class="bg-gray-100 dark:bg-zinc-800 rounded-md p-6 flex items-center sm:p-10">
                <div class="max-w-lg mx-auto">
                    <h3 class="font-semibold text-gray-900 dark:text-gray-100">{{ __('messages.t_sign_up_for_newsletter') }}</h3>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">{{__('messages.t_sign_up_for_newsletter_subtitle')}}</p>
                    <div class="mt-4 sm:mt-6 sm:flex">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input wire:model.defer="email" id="email-address" type="text" autocomplete="email" required="" placeholder="{{ __('messages.t_enter_email_address') }}" class="h-14 appearance-none min-w-0 w-full bg-white dark:bg-zinc-700 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm py-2 px-4 text-sm text-gray-900 dark:text-gray-300 placeholder-gray-500 focus:outline-none focus:border-primary-600 focus:ring-1 focus:ring-primary-600" readonly onfocus="this.removeAttribute('readonly');">
                        <div class="mt-3 sm:flex-shrink-0 sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4">
                            <button wire:click="newsletter" wire:loading.attr="disabled" wire:target="newsletter" type="button" class="dark:disabled:bg-zinc-500 dark:disabled:text-zinc-400 disabled:cursor-not-allowed disabled:!bg-gray-400 disabled:text-gray-500 h-14 w-full bg-primary-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-sm font-bold tracking-wider text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600">
                                {{ __('messages.t_signup') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        @endif


<<<<<<< HEAD
<<<<<<< Updated upstream
@push('scripts')
=======
=======
    </div>
    <div class="text-center custom-width enire-plan">
        <h1 class="text-black italic">
            Plan your entire wedding in <span style="color: #FF8080;">one week</span>, stress free!
        </h1>

>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
        <p class="text-black mt-4">
            Everyone always says planning a wedding is stressful.
            It isn’t with us! Plan your Nikkah, Valima, or any other Muslim wedding event today,
            completely stress free with our custom wedding plan!
        </p>

        <button class="mt-5 px-6 py-3 text-white" style="background-color: #FF8080; border: none; border-radius: 5px; font-size: 18px;">
<<<<<<< HEAD
            <a href="auth/register">Start Planning</a>
=======
            Start Planning
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
        </button>
    </div>



    <div class="text-center mt-8 plan-wedding mt-4 relative">
        <div class="flex justify-between items-center wed-plan">
            <h2 class="text-white text-2xl ml-4">
                How do we plan your wedding completely stress-free?
            </h2>
            <button class="mt-4 px-6 py-3 text-black bg-white border-none rounded mr-4">
<<<<<<< HEAD
            <a href="auth/register">Start Planning<a>
=======
                Start Planning
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
            </button>
        </div>
        <div class="vertical-line"></div>
        <div class="flex justify-between items-center mt-6 ml-5">
            <div class="circle-container">
                <p class="circle-text">Hit ‘Start Planning’ and take our <span style="color: #FF8080;">10 minute quiz</span></p>
            </div>
            <p class="num">1</p>
            <div class="line"></div>
            <div class="circle-container mr-5">
                <p class="circle-text">We’ll give you a list of everything you need, for every event - custom to your answers <span style="color: #FF8080;">within seconds</span></p>
            </div>
            <p class="num">2</p>
        </div>
        <div class="flex justify-between items-center mt-6 ml-5">
            <div class="circle-container">
                <p class="circle-text">Vendors send you pricing back along with their availability <span style="color: #FF8080;">within 1-2 days.</span></p>
            </div>
            <p class="num">4</p>
            <div class="line"></div>
            <div class="line-vertically"></div>
            <div class="circle-container mr-5">
                <p class="circle-text">Send the details of your event to vendors with <span style="color: #FF8080;">one click</span></p>
            </div>
            <p class="num">3</p>
        </div>
        <div class="mt-6 stress-free">
            <p class="text-white first font-bold">1. Take a few days to think it over.</p>
            <p class="text-white font-bold second">2. Book everything!</p>
        </div>

    </div>




    <!-- Random gigs -->
    <div class="col-span-12 mb-16">

        <!-- Section title -->
        <div class="block mb-6 mt-5 vendor-business">
            <div class="flex justify-between items-center bg-transparent py-2">
                <span class="font-extrabold text-xl text-black-800 dark:text-black-100 pb-1 block ">
                    our vendors are the best in the business
                </span>
            </div>
            <p class="text-black-600 dark:text-black-300 mt-2">
                Besides personally screening all our vendors to guarantee quality, check out their ratings!
            </p>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 vendor-cate">
        <!-- Image 1 -->
        <div class="relative">
            <img src="https://via.placeholder.com/300x200" alt="Image 1" class="w-full h-auto">
            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50">
                <span class="text-white text-xl font-bold">Text on Image 1</span>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="relative">
            <img src="https://via.placeholder.com/300x200" alt="Image 2" class="w-full h-auto">
            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50">
                <span class="text-white text-xl font-bold">Text on Image 2</span>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="relative">
            <img src="https://via.placeholder.com/300x200" alt="Image 3" class="w-full h-auto">
            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50">
                <span class="text-white text-xl font-bold">Text on Image 3</span>
            </div>
        </div>
    </div>


    @push('scripts')
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories && $categories && $categories->count())
    <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Init featured categories slick
            $('#featured-categories-slick').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('#featured-categories-slick').removeClass('hidden');
        });
    </script>
    @endif

    {{-- Bestsellers --}}
    @if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Init featured categories slick
            $('#top-sellers-slick').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('#top-sellers-slick').removeClass('hidden');
        });
    </script>
    @endif

    @endpush

    @push('styles')

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories)
    <link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';" />
    @endif
<<<<<<< HEAD
<<<<<<< Updated upstream
        
@endpush
=======

    @endpush
apps-fileview.texmex_20241003.01_p4
home.blade.php
Displaying home.blade.php.
>>>>>>> Stashed changes
=======

    @endpush
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
