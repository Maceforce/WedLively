
@if (auth()->user()->account_type === 'seller')
	@include('Chatify::layouts.headLinks')
@else
	@include('Chatify::layouts.headLinksPlanner')
@endif

    <div class="messenger shivram test">
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
                <nav class="w-full py-6 border-b dark:border-zinc-700">
                    <div class="w-full px-5">
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3">
                                <svg class="h-5 w-5 !text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path><circle cx="16.5" cy="17.5" r="2.5"></circle><path d="M18.5 19.5l2.5 2.5"></path></svg>
                            </div>
                            <input type="text" class="messenger-search block w-full rounded-md border-gray-300 dark:border-zinc-700 ltr:pl-10 rtl:pr-10 focus:border-red-600 sm:text-sm focus:shadow-none focus:ring-0" placeholder="@lang('messages.t_search_in_ur_contacts')">
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
                    {{-- header buttons --}}
                    <nav class="m-header-right space-x-3 rtl:space-x-reverse">

                        {{-- Add to favotite --}}
                        <button class="focus:outline-none add-to-favorite">
                            <svg class="h-6 w-6 text-slate-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </button>



                        <!-- New Injected code -->

				@if (auth()->user()->account_type === 'seller')
                <div class="flex-1 px-4 md:px-6 flex justify-between">
						<div class="flex-1 flex"></div>
						<div class="ltr:ml-4 rtl:mr-4 flex items-center md:ltr:ml-6 md:rtl:mr-6">

							{{-- Notifications --}}
							@php
								$notifications = \App\Models\Notification::where('user_id', auth()->id())->where('is_seen', false)->latest()->get();
							@endphp
							<button x-on:click="notifications_menu = true" type="button" class="text-gray-500 hover:text-red-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white">
								<svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
								@if ($notifications && count($notifications))
									<span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
										<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
										<span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
									</span>
								@endif
							</button>

							{{-- Messages --}}
							@php
								$new_messages = \App\Models\ChMessage::where('to_id', auth()->id())->where('seen', false)->count();
							@endphp
							<a href="{{ url('inbox') }}" class="text-gray-500 hover:text-red-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white">
								<svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
								@if ($new_messages)
									<span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
										<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
										<span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
									</span>
								@endif
							</a>
			
							{{-- Profile dropdown --}}
							<div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative ltr:ml-3 rtl:mr-3">

								{{-- Button --}}
								<div>
									<button 
										type="button" x-ref="button" 
										class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-0 lg:rounded-md lg:p-2 lg:hover:bg-gray-50 dark:bg-zinc-700/40 lg:dark:hover:bg-zinc-700" 
										id="freelancer-dashboard-user-menu-button"
										x-bind:aria-expanded="open.toString()"
										@click="onButtonClick()" 
										@keyup.space.prevent="onButtonEnter()" 
										@keydown.enter.prevent="onButtonEnter()" 
										@keydown.arrow-up.prevent="onArrowUp()" 
										@keydown.arrow-down.prevent="onArrowDown()"
										aria-expanded="false" aria-haspopup="true">

										{{-- Avatar --}}
										<img class="h-8 w-8 rounded-full object-cover object-center" src="{{ src(auth()->user()->avatar) }}" alt="{{ auth()->user()->username }}">

										{{-- Username --}}
										<div class="ltr:ml-3 rtl:mr-3 hidden text-sm font-medium text-gray-700 dark:text-zinc-100 lg:block truncate max-w-[100px]">
											{{ auth()->user()->username }}
										</div>

										{{-- Chevron icon --}}
										<svg class="ltr:ml-1 rtl:mr-1 hidden h-5 w-5 flex-shrink-0 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path> </svg>

									</button>
								</div>
								
								{{-- Menu --}}
								<div 
									x-show="open" 
									x-transition:enter="transition ease-out duration-100" 
									x-transition:enter-start="transform opacity-0 scale-95" 
									x-transition:enter-end="transform opacity-100 scale-100" 
									x-transition:leave="transition ease-in duration-75" 
									x-transition:leave-start="transform opacity-100 scale-100" 
									x-transition:leave-end="transform opacity-0 scale-95" 
									class="ltr:origin-top-right rtl:origin-top-left py-1 focus:outline-none absolute top-full ltr:right-0 rtl:left-0 w-60 mt-3 bg-white dark:bg-zinc-800 rounded-lg shadow-md ring-1 ring-gray-900 ring-opacity-5 font-normal text-sm text-gray-900 divide-y divide-gray-100 dark:divide-zinc-700 z-40" 
									x-ref="menu-items" 
									x-bind:aria-activedescendant="activeDescendant" 
									role="menu" 
									aria-orientation="vertical" 
									aria-labelledby="freelancer-dashboard-user-menu-button" 
									tabindex="-1" 
									@keydown.arrow-up.prevent="onArrowUp()" 
									@keydown.arrow-down.prevent="onArrowDown()" 
									@keydown.tab="open = false" 
									@keydown.enter.prevent="open = false; focusButton()" 
									@keyup.space.prevent="open = false; focusButton()" 
									style="display: none;">

									<p class="py-3 px-3.5 truncate">
										<span
											class="block mb-0.5 text-xs text-gray-500 dark:text-gray-300">{{ __('messages.t_logged_in_as_username', ['username' => auth()->user()->username]) }}</span>
										<span class="font-semibold dark:text-white">@money(auth()->user()->balance_available, settings('currency')->code, true)</span>
									</p>

									{{-- Account --}}
									<div class="py-1.5 px-3.5">

										{{-- View Profile --}}
										<a href="{{ url('profile', auth()->user()->username) }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5"
												fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
											<span
												class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_view_profile') }}</span>
										</a>

										{{-- Edit profile --}}
										<a href="{{ url('account/profile') }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5"
												fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
											</svg>
											<span
												class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_edit_profile') }}</span>
										</a>

										{{-- Account settings --}}
										<a href="{{ url('account/settings') }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5"
												fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
											</svg>
											<span
												class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_account_settings') }}</span>
										</a>

										{{-- Update password --}}
										<a href="{{ url('account/password') }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
											<span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_update_password') }}</span>
										</a>

									</div>

									{{-- Content --}}
									<div class="py-1.5 px-3.5">

										{{-- Deposit --}}
										<a href="{{ url('account/deposit') }}" class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
											<span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_deposit') }}</span>
										</a>

										{{-- Messages --}}
										<a href="{{ url('inbox') }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5"
												fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
											</svg>
											<span
												class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_messages') }}</span>
										</a>

									</div>

									{{-- Security --}}
									<div class="py-1.5 px-3.5">

										{{-- Verification center --}}
										@if (auth()->user()->status !== 'verified')
											<a href="{{ url('account/verification') }}"
												class="group flex items-center py-1.5 group-hover:text-red-600">
												<svg xmlns="http://www.w3.org/2000/svg"
													class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5"
													fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
												</svg>
												<span
													class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_verification_center') }}</span>
											</a>
										@endif

										{{-- Logout --}}
										<a href="{{ url('auth/logout') }}"
											class="group flex items-center py-1.5 group-hover:text-red-600">
											<svg aria-hidden="true" width="20" height="20" fill="none"
												class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-red-600 h-5 w-5">
												<path
													d="M10.25 3.75H9A6.25 6.25 0 002.75 10v0A6.25 6.25 0 009 16.25h1.25M10.75 10h6.5M14.75 12.25l2.5-2.25-2.5-2.25"
													stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
											<span
												class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-500">{{ __('messages.t_logout') }}</span>
										</a>

									</div>
								
								</div>
								
							</div>
							
						</div>
					</div>
					@endif
                <!--End Of the new injected code -->






                    </nav>







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

@if (auth()->user()->account_type === 'seller')
	@include('Chatify::layouts.footerLinks')
@else
	@include('Chatify::layouts.footerLinksPlanner')
@endif