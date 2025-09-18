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
		.vendors-message-body {
			margin-top: -50px;
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

	</head>
	


	
	<body class="h-full bg-slate-50 dark:bg-zinc-700 application scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">

		{{-- Notification --}}
        <!-- <x-notifications position="top-center" z-index="z-[65]" /> -->

        {{-- Dialog --}}
        <!-- <x-dialog z-index="z-[65]" blur="sm" /> -->

		{{-- Layout --}}
		
		<div x-data="{ open: false, notifications_menu: false }" @keydown.window.escape="open = false" class="contents">
			
			{{-- Sidebar / Mobile --}}
			<div x-show="open" class="fixed inset-0 flex z-40 md:hidden" x-ref="dialog" aria-modal="true" style="display: none">
				
				{{-- Backdrop --}}
				<div 
					x-show="open" 
					x-transition:enter="transition-opacity ease-linear duration-300" 
					x-transition:enter-start="opacity-0" 
					x-transition:enter-end="opacity-100" 
					x-transition:leave="transition-opacity ease-linear duration-300" 
					x-transition:leave-start="opacity-100" 
					x-transition:leave-end="opacity-0" 
					class="fixed inset-0 bg-gray-600 bg-opacity-75" 
					@click="open = false" 
					aria-hidden="true"></div>
				
				{{-- Menu --}}
				<div 
				x-show="open" 
				x-transition:enter="transition ease-in-out duration-300 transform" 
				x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full" 
				x-transition:enter-end="ltr:translate-x-0 rtl:-translate-x-0" 
				x-transition:leave="transition ease-in-out duration-300 transform" 
				x-transition:leave-start="ltr:translate-x-0 rtl:-translate-x-0" 
				x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full" 
				class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white dark:bg-zinc-800">
					
					{{-- Close button --}}
					<div 
						x-show="open" 
						x-transition:enter="ease-in-out duration-300" 
						x-transition:enter-start="opacity-0" 
						x-transition:enter-end="opacity-100" 
						x-transition:leave="ease-in-out duration-300" 
						x-transition:leave-start="opacity-100" 
						x-transition:leave-end="opacity-0" 
						class="absolute top-0 ltr:right-0 rtl:left-0 ltr:-mr-12 rtl:-ml-12 pt-2">
							<button type="button" class="ltr:ml-1 rtl:mr-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
								<span class="sr-only">Close sidebar</span>
								<svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
							</button>
					</div>
					
					{{-- Logo --}}
					@if (current_theme() === 'dark' && settings('general')->logo_dark)
						<a href="{{ url('/') }}" class="flex items-center flex-shrink-0 px-5 font-reselu">
							<!-- <img width="150" height="{{ settings('appearance')->sizes['header_desktop_logo_height'] }}" src="{{ src(settings('general')->logo_dark) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;width:auto"> -->
							<h1 class="text-lg sm:text-3xl" style="font-family:Reselu">SUKOONZZ</h1>
						</a>
					@else
						<a href="{{ url('/') }}" class="flex items-center flex-shrink-0 px-5 font-reselu">
							<!-- <img width="150" height="{{ settings('appearance')->sizes['header_desktop_logo_height'] }}" src="{{ src(settings('general')->logo) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;width:auto"> -->
							<h1 class="text-lg sm:text-3xl" style="font-family:Reselu">SUKOONZZ</h1>
						</a>
					@endif
					

					{{-- Links --}}
					<div class="mt-8 flex-grow flex flex-col">
						<nav class="flex-1 ltr:pl-2 rtl:pr-5 pb-4 space-y-1.5">
						
							{{-- Home --}}
							<a href="{{ url('seller/home') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/home') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"> <path fill="currentColor" fill-opacity=".3" d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z"></path> <path fill="currentColor" d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z"></path> <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path> <path fill="currentColor" d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"></path> </svg>
								
								<span>@lang('messages.t_home')</span>
							</a>

							{{-- Orders --}}
							<a href="{{ url('seller/orders') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/orders') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M5.94290508,4 L18.0570949,4 C18.5865712,4 19.0242774,4.41271535 19.0553693,4.94127798 L19.8754445,18.882556 C19.940307,19.9852194 19.0990032,20.9316862 17.9963398,20.9965487 C17.957234,20.9988491 17.9180691,21 17.8788957,21 L6.12110428,21 C5.01653478,21 4.12110428,20.1045695 4.12110428,19 C4.12110428,18.9608266 4.12225519,18.9216617 4.12455553,18.882556 L4.94463071,4.94127798 C4.97572263,4.41271535 5.41342877,4 5.94290508,4 Z" fill="currentColor" opacity="0.3"/> <path d="M7,7 L9,7 C9,8.65685425 10.3431458,10 12,10 C13.6568542,10 15,8.65685425 15,7 L17,7 C17,9.76142375 14.7614237,12 12,12 C9.23857625,12 7,9.76142375 7,7 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_orders')</span>
							</a>

							{{-- Gigs --}}
							<a href="{{ url('seller/gigs') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/gigs') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-opacity="0.25" d="M21.0001 16.05V18.75C21.0001 20.1 20.1001 21 18.7501 21H6.6001C6.9691 21 7.3471 20.946 7.6981 20.829C7.7971 20.793 7.89609 20.757 7.99509 20.712C8.31009 20.586 8.61611 20.406 8.88611 20.172C8.96711 20.109 9.05711 20.028 9.13811 19.947L9.17409 19.911L15.2941 13.8H18.7501C20.1001 13.8 21.0001 14.7 21.0001 16.05Z" fill="currentColor"></path> <path fill-opacity="0.5" d="M17.7324 11.361L15.2934 13.8L9.17334 19.9111C9.80333 19.2631 10.1993 18.372 10.1993 17.4V8.70601L12.6384 6.26701C13.5924 5.31301 14.8704 5.31301 15.8244 6.26701L17.7324 8.17501C18.6864 9.12901 18.6864 10.407 17.7324 11.361Z" fill="currentColor"></path> <path d="M7.95 3H5.25C3.9 3 3 3.9 3 5.25V17.4C3 17.643 3.02699 17.886 3.07199 18.12C3.09899 18.237 3.12599 18.354 3.16199 18.471C3.20699 18.606 3.252 18.741 3.306 18.867C3.315 18.876 3.31501 18.885 3.31501 18.885C3.32401 18.885 3.32401 18.885 3.31501 18.894C3.44101 19.146 3.585 19.389 3.756 19.614C3.855 19.731 3.95401 19.839 4.05301 19.947C4.15201 20.055 4.26 20.145 4.377 20.235L4.38601 20.244C4.61101 20.415 4.854 20.559 5.106 20.685C5.115 20.676 5.11501 20.676 5.11501 20.685C5.25001 20.748 5.385 20.793 5.529 20.838C5.646 20.874 5.76301 20.901 5.88001 20.928C6.11401 20.973 6.357 21 6.6 21C6.969 21 7.347 20.946 7.698 20.829C7.797 20.793 7.89599 20.757 7.99499 20.712C8.30999 20.586 8.61601 20.406 8.88601 20.172C8.96701 20.109 9.05701 20.028 9.13801 19.947L9.17399 19.911C9.80399 19.263 10.2 18.372 10.2 17.4V5.25C10.2 3.9 9.3 3 7.95 3ZM6.6 18.75C5.853 18.75 5.25 18.147 5.25 17.4C5.25 16.653 5.853 16.05 6.6 16.05C7.347 16.05 7.95 16.653 7.95 17.4C7.95 18.147 7.347 18.75 6.6 18.75Z" fill="currentColor"></path> </svg>
								
								<span>@lang('messages.t_gigs')</span>
							</a>

							{{-- Projects --}}
							@if (settings('projects')->is_enabled)
								<a href="{{ url('seller/projects') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/projects') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

									<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="currentColor"/> <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3"/> </g></svg>
									
									<span>@lang('messages.t_projects')</span>
								</a>
							@endif

							{{-- Reviews --}}
							<a href="{{ url('seller/reviews') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/reviews') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <polygon points="0 0 24 0 24 24 0 24"/> <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_reviews')</span>
							</a>

							{{-- Refunds --}}
							<a href="{{ url('seller/refunds') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/refunds') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-5.5 w-5.5 ltr:mr-3.5 rtl:ml-3.5 -mt-[1px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <circle fill="currentColor" opacity="0.3" cx="20.5" cy="12.5" r="1.5"/> <rect fill="currentColor" opacity="0.3" transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3" y="3" width="18" height="7" rx="1"/> <path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_refunds')</span>
							</a>

							{{-- Portfolio --}}
							<a href="{{ url('seller/portfolio') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/portfolio') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6.5 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M13.3111 14.75H5.03356C3.36523 14.75 2.30189 12.9625 3.10856 11.4958L5.24439 7.60911L7.24273 3.96995C8.07689 2.45745 10.2586 2.45745 11.0927 3.96995L13.1002 7.60911L14.0627 9.35995L15.2361 11.4958C16.0427 12.9625 14.9794 14.75 13.3111 14.75Z" fill="currentColor"></path> <path fill-opacity="0.3" d="M21.1667 15.2083C21.1667 18.4992 18.4992 21.1667 15.2083 21.1667C11.9175 21.1667 9.25 18.4992 9.25 15.2083C9.25 15.0525 9.25917 14.9058 9.26833 14.75H13.3108C14.9792 14.75 16.0425 12.9625 15.2358 11.4958L14.0625 9.36C14.4292 9.28666 14.8142 9.25 15.2083 9.25C18.4992 9.25 21.1667 11.9175 21.1667 15.2083Z" fill="currentColor"></path> </svg>
								
								<span>@lang('messages.t_portfolio')</span>
							</a>

							{{-- Payouts --}}
							<a href="{{ url('seller/withdrawals') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/withdrawals') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <rect fill="currentColor" opacity="0.3" x="2" y="4" width="20" height="5" rx="1"/> <path d="M5,7 L8,7 L8,21 L7,21 C5.8954305,21 5,20.1045695 5,19 L5,7 Z M19,7 L19,19 C19,20.1045695 18.1045695,21 17,21 L11,21 L11,7 L19,7 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_payouts')</span>
							</a>
						
						</nav>
					</div>

				</div>
				
				{{-- Dummy element to force sidebar to shrink to fit close icon --}}
				<div class="flex-shrink-0 w-14" aria-hidden="true"></div>

			</div>
			
		
			{{-- Sidebar / Desktop --}}
			
			<div class="hidden md:flex md:w-60 md:flex-col md:fixed md:inset-y-0">
				<div class="flex flex-col flex-grow ltr:border-r rtl:border-l border-[#e9eef5] dark:border-zinc-700 pt-5 bg-white dark:bg-zinc-800 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">

					{{-- Logo --}}
					@if (current_theme() === 'dark' && settings('general')->logo_dark)
						<a href="{{ url('/') }}" class="flex items-center flex-shrink-0 px-5">
							<!-- <img width="150" height="{{ settings('appearance')->sizes['header_desktop_logo_height'] }}" src="{{ src(settings('general')->logo_dark) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;width:auto"> -->
							<h1 class="text-lg sm:text-3xl" style="font-family:Reselu">SUKOONZZ</h1>
						</a>
					@else
						<a href="{{ url('/') }}" class="flex items-center flex-shrink-0 px-5">
							<!-- <img width="150" height="{{ settings('appearance')->sizes['header_desktop_logo_height'] }}" src="{{ src(settings('general')->logo) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;width:auto"> -->
							<h1 class="text-lg sm:text-3xl" style="font-family:Reselu">SUKOONZZ</h1>
						</a>
					@endif

					{{-- Links --}}
					<div class="mt-8 flex-grow flex flex-col">
						<nav class="flex-1 ltr:pl-2 rtl:pr-5 pb-4 space-y-1.5">
						
							{{-- Home --}}
							<a href="{{ url('seller/home') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/home') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"> <path fill="currentColor" fill-opacity=".3" d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z"></path> <path fill="currentColor" d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z"></path> <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path> <path fill="currentColor" d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"></path> </svg>
								
								<span>@lang('messages.t_home')</span>
							</a>

							{{-- Orders --}}
							<a href="{{ url('seller/orders') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/orders') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M5.94290508,4 L18.0570949,4 C18.5865712,4 19.0242774,4.41271535 19.0553693,4.94127798 L19.8754445,18.882556 C19.940307,19.9852194 19.0990032,20.9316862 17.9963398,20.9965487 C17.957234,20.9988491 17.9180691,21 17.8788957,21 L6.12110428,21 C5.01653478,21 4.12110428,20.1045695 4.12110428,19 C4.12110428,18.9608266 4.12225519,18.9216617 4.12455553,18.882556 L4.94463071,4.94127798 C4.97572263,4.41271535 5.41342877,4 5.94290508,4 Z" fill="currentColor" opacity="0.3"/> <path d="M7,7 L9,7 C9,8.65685425 10.3431458,10 12,10 C13.6568542,10 15,8.65685425 15,7 L17,7 C17,9.76142375 14.7614237,12 12,12 C9.23857625,12 7,9.76142375 7,7 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_orders')</span>
							</a>

							{{-- Gigs --}}
							<a href="{{ url('seller/gigs') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/gigs') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-opacity="0.25" d="M21.0001 16.05V18.75C21.0001 20.1 20.1001 21 18.7501 21H6.6001C6.9691 21 7.3471 20.946 7.6981 20.829C7.7971 20.793 7.89609 20.757 7.99509 20.712C8.31009 20.586 8.61611 20.406 8.88611 20.172C8.96711 20.109 9.05711 20.028 9.13811 19.947L9.17409 19.911L15.2941 13.8H18.7501C20.1001 13.8 21.0001 14.7 21.0001 16.05Z" fill="currentColor"></path> <path fill-opacity="0.5" d="M17.7324 11.361L15.2934 13.8L9.17334 19.9111C9.80333 19.2631 10.1993 18.372 10.1993 17.4V8.70601L12.6384 6.26701C13.5924 5.31301 14.8704 5.31301 15.8244 6.26701L17.7324 8.17501C18.6864 9.12901 18.6864 10.407 17.7324 11.361Z" fill="currentColor"></path> <path d="M7.95 3H5.25C3.9 3 3 3.9 3 5.25V17.4C3 17.643 3.02699 17.886 3.07199 18.12C3.09899 18.237 3.12599 18.354 3.16199 18.471C3.20699 18.606 3.252 18.741 3.306 18.867C3.315 18.876 3.31501 18.885 3.31501 18.885C3.32401 18.885 3.32401 18.885 3.31501 18.894C3.44101 19.146 3.585 19.389 3.756 19.614C3.855 19.731 3.95401 19.839 4.05301 19.947C4.15201 20.055 4.26 20.145 4.377 20.235L4.38601 20.244C4.61101 20.415 4.854 20.559 5.106 20.685C5.115 20.676 5.11501 20.676 5.11501 20.685C5.25001 20.748 5.385 20.793 5.529 20.838C5.646 20.874 5.76301 20.901 5.88001 20.928C6.11401 20.973 6.357 21 6.6 21C6.969 21 7.347 20.946 7.698 20.829C7.797 20.793 7.89599 20.757 7.99499 20.712C8.30999 20.586 8.61601 20.406 8.88601 20.172C8.96701 20.109 9.05701 20.028 9.13801 19.947L9.17399 19.911C9.80399 19.263 10.2 18.372 10.2 17.4V5.25C10.2 3.9 9.3 3 7.95 3ZM6.6 18.75C5.853 18.75 5.25 18.147 5.25 17.4C5.25 16.653 5.853 16.05 6.6 16.05C7.347 16.05 7.95 16.653 7.95 17.4C7.95 18.147 7.347 18.75 6.6 18.75Z" fill="currentColor"></path> </svg>
								
								<span>@lang('messages.t_gigs')</span>
							</a>

							{{-- Planner Inquiries --}}
							<a href="{{ url('seller/inquiries') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/gigs') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-blue-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-blue-700 dark:group-hover:text-zinc-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-opacity="0.25" d="M12 2C9.2 2 7 4.2 7 7C7 9.8 9.2 12 12 12C14.8 12 17 9.8 17 7C17 4.2 14.8 2 12 2ZM12 10C10.3 10 9 8.7 9 7C9 5.3 10.3 4 12 4C13.7 4 15 5.3 15 7C15 8.7 13.7 10 12 10Z" fill="currentColor"></path>
  <path fill-opacity="0.5" d="M12 14C8.7 14 7 16.3 7 18C7 19.7 8.7 22 12 22C15.3 22 17 19.7 17 18C17 16.3 15.3 14 12 14ZM12 20C10.3 20 9 18.7 9 18C9 17.3 10.3 16 12 16C13.7 16 15 17.3 15 18C15 18.7 13.7 20 12 20Z" fill="currentColor"></path>
  <path d="M21 7H18.5C18.2 7 18 7.2 18 7.5V8.5C18 8.8 18.2 9 18.5 9H21C21.3 9 21.5 8.8 21.5 8.5V7.5C21.5 7.2 21.3 7 21 7Z" fill="currentColor"></path>
  <path d="M12 6L14 8L12 10L10 8L12 6Z" fill="currentColor"></path>
</svg>

								
								<span>Planner Inquiries</span>
							</a>

							{{-- Projects --}}
							@if (settings('projects')->is_enabled)
								<a href="{{ url('seller/projects') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/projects') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

									<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="currentColor"/> <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3"/> </g></svg>
									
									<span>@lang('messages.t_projects')</span>
								</a>
							@endif


							<a href="{{ url('inbox') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/reviews') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">
            
            					<svg xmlns="http://www.w3.org/2000/svg" class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                					<path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
           	 					</svg>

            					<span> My Messages</span>
        					</a>


							{{-- Reviews --}}
							<a href="{{ url('seller/reviews') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/reviews') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <polygon points="0 0 24 0 24 24 0 24"/> <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_reviews')</span>
							</a>

							{{-- Refunds --}}
							<a href="{{ url('seller/refunds') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/refunds') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-5.5 w-5.5 ltr:mr-3.5 rtl:ml-3.5 -mt-[1px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <circle fill="currentColor" opacity="0.3" cx="20.5" cy="12.5" r="1.5"/> <rect fill="currentColor" opacity="0.3" transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3" y="3" width="18" height="7" rx="1"/> <path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_refunds')</span>
							</a>

							{{-- Portfolio --}}
							<a href="{{ url('seller/portfolio') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/portfolio') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6.5 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M13.3111 14.75H5.03356C3.36523 14.75 2.30189 12.9625 3.10856 11.4958L5.24439 7.60911L7.24273 3.96995C8.07689 2.45745 10.2586 2.45745 11.0927 3.96995L13.1002 7.60911L14.0627 9.35995L15.2361 11.4958C16.0427 12.9625 14.9794 14.75 13.3111 14.75Z" fill="currentColor"></path> <path fill-opacity="0.3" d="M21.1667 15.2083C21.1667 18.4992 18.4992 21.1667 15.2083 21.1667C11.9175 21.1667 9.25 18.4992 9.25 15.2083C9.25 15.0525 9.25917 14.9058 9.26833 14.75H13.3108C14.9792 14.75 16.0425 12.9625 15.2358 11.4958L14.0625 9.36C14.4292 9.28666 14.8142 9.25 15.2083 9.25C18.4992 9.25 21.1667 11.9175 21.1667 15.2083Z" fill="currentColor"></path> </svg>
								
								<span>@lang('messages.t_portfolio')</span>
							</a>

{{-- Sales Reports --}}
							<a href="{{ url('seller/salesreport') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/withdrawals') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

							<svg xmlns="http://www.w3.org/2000/svg" class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6.5 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 4h6a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm0-4h.01M13 15h.01M5 13h4m-4 4h4m1-12V3a2 2 0 012-2h4a2 2 0 012 2v2m-6 12V9m6 4h4m-4 4h4m1-12V3a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
							</svg>

								<span>Sales Reports</span>
							</a>

							{{-- Payouts --}}
							<a href="{{ url('seller/withdrawals') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/withdrawals') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<svg class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <rect fill="currentColor" opacity="0.3" x="2" y="4" width="20" height="5" rx="1"/> <path d="M5,7 L8,7 L8,21 L7,21 C5.8954305,21 5,20.1045695 5,19 L5,7 Z M19,7 L19,19 C19,20.1045695 18.1045695,21 17,21 L11,21 L11,7 L19,7 Z" fill="currentColor"/> </g></svg>
								
								<span>@lang('messages.t_payouts')</span>
							</a>

							{{-- Premium Vendor --}}
							<a href="{{ url('seller/premium-vendors') }}" class="group flex items-center ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 text-sm font-semibold tracking-wide ltr:rounded-l-full rtl:rounded-r-full {{ \Illuminate\Support\Str::of(request()->path())->startsWith('seller/premium-vendors') ? 'bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-700 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-700 dark:hover:bg-zinc-700 dark:text-zinc-200 dark:hover:text-zinc-100' }}">

								<!-- Crown Icon for Premium Membership -->
								<svg viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-slate-500 dark:text-zinc-300 flex-shrink-0 h-6 w-6 ltr:mr-3.5 rtl:ml-3.5 -mt-[3px] group-hover:text-slate-700 dark:group-hover:text-zinc-200">

									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>

									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

									<g id="SVGRepo_iconCarrier"> <path d="M21.2501 3C21.4925 3 21.7176 3.11688 21.8574 3.30983L21.9119 3.39706L25.9186 10.9098L25.9615 11.0122L25.9731 11.05L25.9901 11.1273L25.9994 11.2153L25.9973 11.3147L26.0001 11.25C26.0001 11.3551 25.9785 11.4552 25.9394 11.5461L25.9106 11.6057L25.87 11.6723L25.8173 11.7408L14.6 24.7047C14.4999 24.8391 14.3628 24.9277 14.2139 24.9703L14.1559 24.9844L14.0585 24.9979L13.9999 25L13.8993 24.9932L13.8142 24.9771L13.7109 24.9432L13.6852 24.931C13.5949 24.8911 13.5119 24.8316 13.4425 24.7535L2.17081 11.7263L2.1087 11.6387L2.06079 11.5456L2.02611 11.4463L2.00297 11.3152L2.00269 11.1878L2.01755 11.0891L2.02714 11.0499L2.06104 10.9538L2.08838 10.8971L6.08838 3.39706C6.20243 3.18321 6.41149 3.0396 6.64753 3.00704L6.75014 3H21.2501ZM17.9061 12H10.0911L14.0011 22.16L17.9061 12ZM8.48514 12H4.38914L11.7621 20.518L8.48514 12ZM23.6081 12H19.5151L16.2421 20.511L23.6081 12ZM10.0241 4.499H7.19914L3.99814 10.5H8.42314L10.0241 4.499ZM16.4231 4.499H11.5761L9.97514 10.5H18.0231L16.4231 4.499ZM20.8001 4.499H17.9751L19.5761 10.5H23.9991L20.8001 4.499Z" fill="currentColor"></path> </g>

								</svg>
								
								<span>Premium Membership</span>
							</a>


							
						
						</nav>
					</div>

				</div>
			</div>

			

			{{-- Header / Content --}}
			<div class="md:ltr:pl-60 md:rtl:pr-60 flex flex-col flex-1 vendors-message-body">

				{{-- Header --}}
				<!--copied scripts-->
				<!-- <div class="flex-shrink-0 flex h-16 bg-white dark:bg-zinc-800 border-b border-[#e9eef5] dark:border-zinc-600"> 
				
					{{-- Open sidebar --}}
					<button type="button" class="px-4 ltr:border-r rtl:border-l border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-600 md:hidden dark:border-zinc-700/40 dark:text-zinc-200" @click="open = true">
						<span class="sr-only">Open sidebar</span>
						<svg class="h-6 w-6 reflection" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
					</button>				

				</div>  -->




