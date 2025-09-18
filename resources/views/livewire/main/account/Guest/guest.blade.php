<main class="w-full my-4" x-data>
	<div class="p-5 bg-white shadow-sm border border-gray-100 dark:border-zinc-700">
        <div class="bg-white dark:bg-zinc-800 shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
               <!-- <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside> -->

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-12">
					<x-main.account.plannerbar />
                    {{-- Form --}}
                    <div class="w-full">
							 
                        {{-- Section header --}}
                        <!-- <div class="pt-3 px-3 sm:p-2">
                           
                           <p class="text-sm text-gray-500 dark:text-gray-300">
								<div id="successMessage" class="success-message mt-1" style="display: none;">Task added successfully!</div>
							</p>
                            <div>
									<div>
										@if (session()->has('message'))
											<div id="flash-message" class="alert alert-success">
												{{ session('message') }}
											</div>
										@endif
									</div>
									<script>
										document.addEventListener('livewire:load', () => {
											Livewire.hook('message.processed', (message, component) => {
												const flashMessage = document.getElementById('flash-message');
												if (flashMessage) {
													setTimeout(() => {
														flashMessage.style.transition = 'opacity 0.5s ease';
														flashMessage.style.opacity = '0';
														setTimeout(() => {
															flashMessage.remove();
                                                            location.reload();
														}, 500); // Match the fade-out time
													}, 2000); // Adjust the delay before hiding the message
												}
											});
										});
                                        console.log('Livewire DOM updated');
									</script>
								</div>
                        </div>-->
                        
                       <!-- <div class="bg-white dark:bg-zinc-800 overflow-y-auto border !border-t-0 !border-b-0 dark:border-zinc-600 overflow-thin">
							<div class="tab-content w-fit">-->
								@include('livewire.main.account.Guest.overview')
						<!--	</div> 
						 	<div class="container mx-auto px-0">
								@if (session()->has('message'))
									<div class="alert alert-success p-4 text-green-700 bg-green-100 border border-green-200  mb-4">
										{{ session('message') }}
									</div>
								@endif
								<div class="grid grid-cols-12 gap-4">
									
									  <div class="p-4 col-span-12 md:col-span-4 bg-white ">
										 <div class="shadow-md p-6"> 
											 <h2 class="text-2xl font-bold text-red-400 mb-6">Add Guest</h2>
											 <form wire:submit.prevent="addGuest" class="space-y-1">
												 <div class="form-group mb-0">
													 <label class="block text-gray-700 font-semibold mb-2 text-sm">First Name:</label>
													 <input type="text" wire:model="first_name" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500">
													 @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
												 </div>
	 
												 <div class="form-group mb-0">
													 <label class="block text-gray-700 font-semibold mb-2 text-sm">Last Name:</label>
													 <input type="text" wire:model="last_name" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500">
													 @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
												 </div>
	 
												 <div class="form-group mb-0">
													 <label class="block text-gray-700 font-semibold mb-2 text-sm">Email:</label>
													 <input type="email" wire:model="email" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500">
													 @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
												 </div>
	 
												 <div class="form-group mb-0">
													 <label class="block text-gray-700 font-semibold mb-2 text-sm">Group:</label>
													 <select wire:model="group_id" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500">
														 <option value="">Select Group</option>
														 @foreach($groups as $group)
															 <option value="{{ $group->id }}">{{ $group->name }}</option>
														 @endforeach
													 </select>
												 </div>
	 
												 <div class="form-group mb-0">
													 <button type="submit" class="inline-flex items-center justify-center border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">
														 Add Guest
													 </button>
												 </div>
											 </form>
										 </div>
									 </div>

									
									<div class="col-span-12 md:col-span-8">
										<h3 class="text-xl font-semibold text-red-400 mb-4">Guest List</h3>
										<ul class="space-y-2">
											@foreach($guests as $guest)
												<li class="flex justify-between items-center p-4 bg-gray-100 ">
													<span class="text-gray-800 font-medium">{{ $guest->first_name }} {{ $guest->last_name }} - <span class="text-gray-500">{{ $guest->rsvp_status }}</span></span>
													<div class="flex space-x-2">
														<button wire:click="updateConfirmation({{ $guest->id }}, 'Accepted')" class="px-3 py-1 bg-black text-white hover:bg-gray-800 hover:underline">Accept</button>
														<button wire:click="updateConfirmation({{ $guest->id }}, 'Declined')" class="px-3 py-1 bg-red-400 text-white hover:underline">Decline</button>
													</div>
												</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							</div>-->
							</div>
							<style>
							/*	 .action-buttons {
									display: flex;
									justify-content: space-between;
									align-items: center;
									border: 1px solid #FFE6B3;
									padding: 40px;
								}

								.btnOutline {
									padding: 10px 15px;
									border: 1px solid #FFE6B3;
									border-radius: 5px;
									background: transparent;
									color: #FF8080;
									font-weight: bold;
									text-decoration: none;
									transition: background 0.3s, color 0.3s;
								}

								.btnOutline:hover {
									background: #FF8080;
									color: white;
								}

								.app-dropdown-layer {
									position: relative;
								}

								.guestsDropdown {
									position: absolute;
									display: none;
									top: 100%;
									left: 0;
									background: white;
									border: 1px solid #e2e6ea;
									border-radius: 5px;
									box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
									z-index: 10;
								}

								.guestsDropdown a {
									padding: 10px 15px;
									display: block;
									color: #333;
									text-decoration: none;
									transition: background 0.3s;
								}

								.guestsDropdown a:hover {
									background: #f7f9fc;
								}
								.dnone {
									display: none;
								}*/
							</style>
						</div>
					</div>		
                </div>   
			</div>
		</div>
    </div>
</main>