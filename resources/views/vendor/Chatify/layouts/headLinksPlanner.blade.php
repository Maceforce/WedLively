<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}" @class(['dark' => Cookie::get('dark_mode') === 'enabled'])>
<head>

	{{-- Meta tags --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="id" content="{{ $id }}">
	<meta name="uid" content="{{ $uid }}">
	<meta name="type" content="{{ $type }}">
	<meta name="messenger-color" content="{{ $messengerColor }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="authenticated-user" data-user-uid="{{ auth()->user()->uid }}" />
	<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ auth()->id() }}">
	<meta name="time-locale" content="{{ config()->get('frontend_timing_locale') }}" />
	<meta name="time-timezone" content="{{ config('app.timezone') }}" />

	{{-- Generate seo tags --}}
	{!! SEO::generate() !!}

	{{-- Custom fonts --}}
	{!! settings('appearance')->font_link !!}

	{{-- Favicon --}}
	<link rel="icon" type="image/png" href="{{ src( settings('general')->favicon ) }}"/>

	{{-- Styles --}}
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	<link rel="stylesheet" href="{{ url('public/js/plugins/emojipanel/dist/emojipanel.css') }}" />
	<link rel="stylesheet" href="{{ url('public/js/plugins/file-icon-vectors/file-icon-vectors.min.css') }}" />
	<link rel='stylesheet' href="{{ url('public/js/plugins/nprogress/nprogress.css') }}" />
	<link rel="stylesheet" href="{{ url('public/css/chatify/style.css') }}" />
	<link rel="stylesheet" href="{{ url('public/css/chatify/'.$dark_mode.'.mode.css') }}" />

	{{-- Messenger Color Style--}}
	@include('Chatify::layouts.messengerColor')

	{{-- Custom css --}}
	<style>
		:root {
			--color-primary-h: {{ hex2hsl( settings('appearance')->colors['primary'] )[0] }};
			--color-primary-s: {{ hex2hsl( settings('appearance')->colors['primary'] )[1] }}%;
			--color-primary-l: {{ hex2hsl( settings('appearance')->colors['primary'] )[2] }}%;
		}
		html {
			font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
		}
		img.twemoji, img.emoji {
			height: 1.5em;
			width: 1.5em;
			margin: 5px;
			display: inline-block;
		}
	</style>

	{{-- JavaScript variables --}}
	<script>
		__var_app_url        = "{{ url('/') }}";
		__var_app_locale     = "{{ app()->getLocale() }}";
		__var_rtl            = @js(config()->get('direction') === 'ltr' ? false : true);
		__var_primary_color  = "{{ settings('appearance')->colors['primary'] }}";
		__var_axios_base_url = "{{ url('/') }}/";
		__var_currency_code  = "{{ settings('currency')->code }}";
	</script>

	{{-- Scripts --}}
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{ url('public/js/chatify/autosize.js') }}"></script>
	<script defer src="{{ url('public/js/app.js') }}"></script>
	<script src="{{ url('node_modules/@webcomponents/webcomponentsjs/webcomponents-bundle.js') }}"></script>
	<script src="{{ url('public/js/plugins/twemoji/twemoji.min.js') }}"></script>
	<script src="{{ url('public/js/plugins/nprogress/nprogress.js') }}"></script>
	<script src="{{ url('public/js/plugins/emoji-mart/dist/browser.js') }}"></script>
	<script src="{{ url('public/js/plugins/momentjs/moment-with-locales.js') }}"></script>
	<script src="{{ url('public/js/plugins/momentjs/moment-timezone.min.js') }}"></script>
	<script src="{{ url('public/js/plugins/momentjs/moment-timezone-with-data-1970-2030.min.js') }}"></script>

	<style>
		.navbar {
			background-color: #FF8080; 
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		.nav-menu {
			list-style-type: none;
			margin: 0;
			padding: 0;
			/* display: flex;
			justify-content: space-between; */
		}

		.nav-menu li {
			position: relative;
		}

		.nav-menu a {
			text-decoration: none;
			color: white;
			padding: 10px 15px;
			transition: background-color 0.3s, color 0.3s;
		}

		.nav-menu a:hover {
			background-color: #ffffff; /* Darker shade for hover */
			color: #FF8080; /* Text color remains white */
		}

		.planner-messages nav.w-full.py-6 {
			padding: 11px 0!important;
		}
	</style>

</head>
@livewire('main.includes.header')
    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}">

        {{-- Notification --}}
        {{--  <x-notifications position="top-center" z-index="z-[60]" />  --}}

        {{-- Container --}}
         <div class="flex-grow"> 
             <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 min-h-screen">
             
			  <div class="w-full lg:px-0 my-4">
            <div class="p-5 bg-white shadow-sm border border-gray-100 dark:border-zinc-700 relative">
                        
			 {{--  <div class="auth-left-imag">
                            <img src="{{url('public/img/home/authimage.jpg')}}" class="p-4 bg-white">  
                        </div>  --}}
                        <main class="flex flex-col items-center dark:bg-navy-700 lg:max-w-lg">  

	 <div class="w-full"> 
        <div class="bg-white dark:bg-zinc-800 shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">
				<aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>
				<div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
                <x-main.account.plannerbar />

				<div class="w-full">

                        {{-- Section header --}}
                        <div class="py-6 px-4 sm:p-4">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"> My messages </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
								<div id="successMessage" class="success-message" style="display: none;">Messages added successfully!</div>
							</p>
                        </div>
                        
                        <div class="bg-white dark:bg-zinc-800 overflow-y-auto border !border-x-0 dark:border-zinc-600 planner-messages">