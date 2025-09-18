<main class="w-full my-4" x-data>
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
                    {{-- Form --}}
                    <div class="w-full">

                        {{-- Section header --}}
                        <div class="py-6 px-4 sm:p-4">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">Checklist</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
								<div id="successMessage" class="success-message" style="display: none;">Task added successfully!</div>
							</p>
                        </div>
                        
                        <div class="bg-white dark:bg-zinc-800 overflow-y-auto p-4">
							
							
							
							<!-- <div class="pb">
								<a id="openModalBtn" class="btn-primary bpop">Add New Task</a>
							</div> -->
							<div class="grid grid-cols-12 gap-4">
								<div id="taskModal" class="modalf col-span-12 md:col-span-4">
									<div class="modal-content">
										<!--<span class="close" id="closeModalBtn">&times;</span>-->
										<form wire:submit.prevent="addTask" class="task-form shadow-md mx-0">
											<h1 class="text-center text-red-400 text-xl mb-0">Add New Task</h1>
											<div class="form-group mb-0">
												<input type="text" wire:model="newTask.title" class="form-input" placeholder="Add a new task">
												@error('newTask.title') <span class="error">{{ $message }}</span> @enderror
											</div>
											<div class="form-group mb-0">
												<input wire:model="newTask.due_date" type="date" class="form-input">
												@error('newTask.due_date') <span class="error">{{ $message }}</span> @enderror
											</div>
											<div class="form-group mb-0">
												<select wire:model="newTask.category" class="form-select">
													<option value="">Select a category</option>
													<option value="Accommodations">Accommodations</option>
													<option value="Budget">Budget</option>
													<option value="Dress and Attire">Dress and Attire</option>
													<option value="Engagement">Engagement</option>
													<option value="Guests">Guests</option>
													<option value="Invitations">Invitations</option>
													<option value="Jewelry">Jewelry</option>
													<option value="Legal">Legal</option>
													<option value="Other">Other</option>
													<option value="Planning">Planning</option>
													<option value="Registry">Registry</option>
													<option value="Rehearsal">Rehearsal</option>
													<option value="Vendors">Vendors</option>
												</select>
												<div class="form-group mt-3 mb-0">
													<textarea wire:model="newTask.description" class="form-textarea" rows="2" placeholder="Description of task"></textarea>
													@error('newTask.description') <span class="error">{{ $message }}</span> @enderror
												</div>

												@error('newTask.category') <span class="error">{{ $message }}</span> @enderror
											</div>
											<button type="submit" class="inline-flex items-center justify-center border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">Create</button>    
										</form>
									</div>
								</div>
								
								
								<div class="tasklist col-span-12 md:col-span-8">
									<ul class="task-list">
										@forelse($tasks as $task)
										<li @if($task->completed) style="text-decoration: line-through;" @endif>
											<div style="display: flex; justify-content:space-between; gap: 15px; flex-wrap: wrap; max-width: 100%;">
												<!-- Checkbox -->
												<div>
													<input type="checkbox" 
													   wire:model="tasks.{{ $loop->index }}.completed" 
													   wire:change="toggleCompletion({{ $task->id }})"
													   {{ $task->completed ? 'checked' : '' }}>
												</div>

												<!-- Task Title with Heading -->
												<div class="text-sm">
													<strong>Task:</strong><br> {{ $task->title }}
												</div>

												<!-- Task Description with Heading -->
												<div class="text-sm">
													<strong>Description:</strong><br> <span class="truncate overflow-hidden inline-block" style="max-width: 100px;">{{ $task->description }}</span>
												</div>

												<!-- Task Category with Heading -->
												<div class="text-sm">
													<strong>Category:</strong><br> {{ $task->category }}
												</div>

												<!-- Due Date with Heading -->
												<div class="text-sm">
													<strong>Due Date:</strong><br> {{ $task->due_date }}
												</div>

												<!-- Delete Button -->
												<div>
													<button wire:click="deleteTask({{ $task->id }})" class="ml-2 text-red-600 text-sm">Delete</button>
												</div>
											</div>
										</li>

										@empty
											<li>No records</li>
										@endforelse
									</ul>
								</div>
							</div>

						</div>
					</div>		
                </div>   
			</div>
		</div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        //$('#taskModal').hide();
        
        // $('.bpop').on('click', function() {
        //     $('#taskModal').show();
        // });

       
        // $('#closeModalBtn').on('click', function() {
        //     $('#taskModal').hide();
        // });
        
        // $(window).on('click', function(event) {
        //     if ($(event.target).is('#taskModal')) {
        //         $('#taskModal').fadeOut();
        //     }
        // });

        // Close Modal with Escape key
        // $(document).on('keydown', function(event) {
        //     if (event.key === "Escape") {
        //         $('#taskModal').fadeOut();
        //     }
        // });

        // Prevent fade out on interaction with input fields
        // $('.modal-content').on('click', function(event) {
        //     event.stopPropagation(); 
        // });

        $('.task-form button.btn-primary').click(function() {
            $('#successMessage').fadeIn(500).delay(8000).hide(500);
            //$('#taskModal').hide();
        });
    });
</script>
