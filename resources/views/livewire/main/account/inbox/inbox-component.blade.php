<main class="w-full my-4">
    <div class="p-5 bg-white shadow-sm border border-gray-100 dark:border-zinc-700">
        <div class="bg-white dark:bg-zinc-800 shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
                <x-main.account.plannerbar />
					
					
					
					<div class="w-full">

                        {{-- Section header --}}
                        <div class="mb-14 py-6 px-4 sm:p-4">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"> My messages </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
								<div id="successMessage" class="success-message" style="display: none;">Messages added successfully!</div>
							</p>
                        </div>
                        
                        <div class="bg-white dark:bg-zinc-800">

<style>
     /* .hidden.md\:flex.md\:w-60.md\:flex-col.md\:fixed.md\:inset-y-0 {
        display: none;
    } */
    .mb-14 {
        margin-bottom: 0rem !important;
    }
</style>

<!--chat code statarted-->

<!--header code added instead of adding view-->

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

</head>
<!--End of the head link codes-->
<body>
    <div class="messenger shivram" style="margin-top: -50px; margin-top: 0px; border-top: 1px solid #e5e7eb;">
        {{-- ----------------------Users/Groups lists side---------------------- --}}
        <div class="messenger-listView ltr:border-r rtl:border-l dark:border-zinc-700">

            {{-- Header and search bar --}}
            <div class="m-header">

                {{-- Back to homepage --}}
                <!-- <div class="py-4 px-5 border-b dark:border-zinc-700">
                    <div class="relative flex space-x-3 rtl:space-x-reverse group">
                        <a href="{{ url('/') }}">
                            <span class="h-8 w-8 rounded-full bg-slate-300 group-hover:bg-slate-400 dark:bg-zinc-600 dark:group-hover:bg-slate-200 flex items-center justify-center rtl:-rotate-180">
                                <svg class="h-6 w-6 !text-slate-500 dark:!text-zinc-400 group-hover:!text-zinc-200 dark:group-hover:!text-zinc-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path></svg>
                            </span>
                        </a>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-slate-500 dark:text-white">
                                    @lang('messages.t_messages')
                                </p>
                            </div>
                            <div class="whitespace-nowrap text-right">
                                <div class="listView-x">
                                    <svg class="!text-slate-500 dark:!text-slate-300 h-3.5 w-3.5 mt-0.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                {{-- Search --}}
                <nav class="w-full py-4 border-b dark:border-zinc-700">
                    <div class="w-full px-5">
                        <div class="relative mt-1 shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3">
                                <svg class="h-5 w-5 !text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path><circle cx="16.5" cy="17.5" r="2.5"></circle><path d="M18.5 19.5l2.5 2.5"></path></svg>
                            </div>
                            <input type="text" class="messenger-search block w-full border-gray-300 dark:border-zinc-700 ltr:pl-10 rtl:pr-10 focus:border-primary-600 focus:ring-primary-600 sm:text-sm" placeholder="@lang('messages.t_search_in_ur_contacts')">
                        </div>
                    </div>
                </nav>
                
            </div>

            {{-- tabs and lists --}}
            <div class="m-body contacts-container">
               {{-- Lists [Users/Group] --}}
               {{-- ---------------- [ User Tab ] ---------------- --}}
               <div class="@if($type == 'user') show @endif messenger-tab users-tab app-scroll" data-view="users">
    
                   {{-- Favorites --}}
                   <div class="favorites-section border-b dark:border-zinc-700">
                    <p class="messenger-title !px-5">@lang('messages.t_favorites')</p>
                    <div class="messenger-favorites app-scroll-thin !px-5"></div>
                   </div>
    
                   {{-- Saved Messages --}}
                   {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
    
                   {{-- Contact --}}
                   <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>
    
               </div>
    
               {{-- ---------------- [ Group Tab ] ---------------- --}}
               <div class="@if($type == 'group') show @endif messenger-tab groups-tab app-scroll" data-view="groups">
                    {{-- items --}}
                    <p style="text-align: center;color:grey;margin-top:30px">
                        <a target="_blank" style="color:{{$messengerColor}};" href="#">Click here</a> for more info!
                    </p>
                 </div>
    
                 {{-- ---------------- [ Search Tab ] ---------------- --}}
               <div class="messenger-tab search-tab app-scroll" data-view="search">
                    <p class="messenger-title !px-5 mb-2">@lang('messages.t_search')</p>
                    <div class="search-records">
                        <p class="message-hint mt-20"><span>@lang('messages.t_type_to_search_in_ur_contacts')</span></p>
                    </div>
                 </div>

            </div>
        </div>
    
        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView">
            
            {{-- header title [conversation name] amd buttons --}}
            <div class="m-header m-header-messaging py-5 border-b dark:border-zinc-700 px-4" style="display: Block">
                <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    {{-- header back button, avatar and user name --}}
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                        <a href="#" class="show-listView"></a>
                        <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>
                        <span class="user-name show-infoSide cursor-pointer dark:!text-white">{{ config('app.name') }}</span>
                    </div> 
                </nav>  
            </div>
    
            {{-- Messaging area --}}
            <div class="m-body messages-container app-scroll">

                {{-- Internet connection --}}
                <div class="internet-connection">

                    {{-- Connected status --}}
                    <span class="ic-connected">@lang('messages.t_chat_connected')</span>

                    {{-- Connecting status --}}
                    <span class="ic-connecting">@lang('messages.t_chat_connecting')</span>

                    {{-- No internet access status --}}
                    <span class="ic-noInternet">@lang('messages.t_chat_no_internet_access')</span>

                </div>

                <div class="messages space-y-10">
                    <p class="message-hint center-el"><span>@lang('messages.t_no_conversation_selected_subtitle')</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing px-5 !mx-0 !mt-4">
                        <p>
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </p>
                    </div>
                </div>
    
            </div>
            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>
        {{-- ---------------------- Info side ---------------------- --}}
        <div class="messenger-infoView app-scroll" style="display: none">
            {{-- nav actions --}}
            <nav class="py-4">

                {{-- Close --}}
                <a class="cursor-pointer flex justify-end">
                    <svg class="h-6 w-6 text-gray-400 hover:text-gray-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                
            </nav>
            <div class="w-full px-6 flex flex-col space-y-8">
                {!! view('Chatify::layouts.info')->render() !!}
            </div>
        </div>
    </div>
    @include('Chatify::layouts.modals')




    <!-- Footer links code started instead of including chatify footer links layout-->
   


    
{{-- Content --}}
				

				</div>
	
			</div>
	
			{{-- Livewire scripts --}}
			@livewireScripts
	
			{{-- Wire UI --}}
			 <wireui:scripts />
	
			{{-- Helpers --}}	
			<script src="{{ url('public/js/components.js?v=1.3.2') }}"></script> 
	
			{{-- Custom JS codes --}}
			<!-- <script defer>
				
				document.addEventListener("DOMContentLoaded", function(){
	
					jQuery.event.special.touchstart = {
						setup: function( _, ns, handle ) {
							this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
						}
					};
					jQuery.event.special.touchmove = {
						setup: function( _, ns, handle ) {
							this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
						}
					};
					jQuery.event.special.wheel = {
						setup: function( _, ns, handle ){
							this.addEventListener("wheel", handle, { passive: true });
						}
					};
					jQuery.event.special.mousewheel = {
						setup: function( _, ns, handle ){
							this.addEventListener("mousewheel", handle, { passive: true });
						}
					};
	
					// Refresh
					window.addEventListener('refresh',() => {
						location.reload();
					});
	
					// Scroll to specific div
					window.addEventListener('scrollTo', (event) => {
	
						// Get id to scroll
						const id = event.detail;
	
						// Scroll
						$('html, body').animate({
							scrollTop: $("#" + id).offset().top
						}, 500);
	
					});
	
					// Scroll to up page
					window.addEventListener('scrollUp', () => {
	
						// Scroll
						$('html, body').animate({
							scrollTop: $("body").offset().top
						}, 500);
	
					});
	
				});
	
				function jwUBiFxmwbrUwww() {
					return {
	
						scroll: false,
	
						init() {
							var _this = this;
							$(document).scroll(function () {
								$(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
							});
	
						}
	
					}
				}
				window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();
	
				document.ontouchmove = function(event){
					event.preventDefault();
				}
				
			</script> -->
	
			{{-- Custom scripts --}}
			<!-- @stack('scripts') -->
	
			{{-- Custom footer code --}}
			<!-- @if (settings('appearance')->custom_code_footer_freelancer_layout)
				{!! settings('appearance')->custom_code_footer_freelancer_layout !!}
			@endif -->
	
	
	  
	





<!--Original codes of this page-->

<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>

<script>

	// Gloabl Chatify variables from PHP to JS
	window.chatify = {
		enable_attachments       : Boolean({{ settings('live_chat')->enable_attachments }}),
		enable_emojis            : Boolean({{ settings('live_chat')->enable_emojis }}),
		enable_notification_sound: Boolean({{ settings('live_chat')->play_notification_sound }}),
		notification_sound       : "{{ url('public/js/chatify/sounds/new-message-sound.mp3') }}"
	};

	// Disable pusher logging
	Pusher.logToConsole = false;

	var pusher = new Pusher("{{ config('chatify.pusher.key') }}", {
		encrypted   : Boolean({{ config('chatify.pusher.options.encrypted') ? 1 : 0 }}),
		cluster     : "{{ config('chatify.pusher.options.cluster') }}",
		authEndpoint: '{{ route("pusher.auth") }}',
		auth        : {
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		}
	});

	// Bellow are all the methods/variables that using php to assign globally.
	const allowedImages        = {!! json_encode( explode(',', settings('live_chat')->allowed_images) ) !!} || [];
	const allowedFiles         = {!! json_encode( explode(',', settings('live_chat')->allowed_files) ) !!} || [];
	const getAllowedExtensions = [...allowedImages, ...allowedFiles];
	const getMaxUploadSize     = {{ settings('live_chat')->max_file_size * 1048576 }};

</script>

<script src="{{ url('public/js/chatify/utils.js') }}"></script>
<script src="{{ url('public/js/chatify/code.js') }}"></script>

 <!-- End of the Footer links code started instead of including chatify footer links layout-->


</body>
</html>
<!-- chat code ended -->                  






							

						</div>
					</div>					
                </div>
            </div>
        </div>
    </div>
</main>