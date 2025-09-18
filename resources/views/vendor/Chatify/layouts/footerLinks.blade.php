
{{-- Content --}}
				

				</div>
	
			</div>
			
			{{-- Livewire scripts --}}
			<!-- @livewireScripts -->
	
			{{-- Wire UI --}}
			<!-- <wireui:scripts /> -->
	
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
	
	
	  
	

	</body>
</html>



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