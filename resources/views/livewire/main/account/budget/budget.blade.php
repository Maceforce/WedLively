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
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">Budget</h2>
                            <p class="m-0 text-sm text-gray-500 dark:text-gray-300">
								<div id="successMessage" class="success-message" style="display: none;">Task added successfully!</div>
							</p>
                        </div>
                        
                        <div class="bg-white dark:bg-zinc-800 overflow-y-auto">
							
							
							<div class="budget-container">
							<div class="budget-container-inner p-4">
								<div class="grid grid-cols-12 gap-4">
									<div class="col-span-12 md:col-span-6 p-1">
										<div class="grid grid-cols-12 gap-4">
											<div class="col-span-12 lg:col-span-6">
												<div class="estimated-form">
													<h1 class="text-red-400 text-xl mb-3">Estimated Cost</h1>
												<div class="bg-gray-100 min-h-11 p-3"> {{$estimatedBudget}}</div>
												</div>
											</div>
											<div class="col-span-12 lg:col-span-6">
												<div class="estimated-form">
													<h1 class="text-red-400 text-xl mb-3">Estimated Cost</h1>
													<input type="number" wire:model="estimatedBudget" min="0" />
													<button type="button" wire:click="updateEstimatedBudget" class="mt-2 inline-flex items-center justify-center border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">Change</button>
													<!--<p>Current Estimated Budget: ${{ $estimatedBudget }}</p>-->
												</div>
											</div>
										</div>
									</div>
									<div class="col-span-12 md:col-span-6 p-1">
										<div class="existing-budgets shadow-md bg-gray-100">
											<h2>Final Cost</h2>
											<p>${{ $estimatedBudget }}</p>
										</div>
									</div>
								</div>

								<div class="grid grid-cols-12 gap-4">
									<div class="col-span-12 md:col-span-6 p-1">
										<div class="budget-form shadow-md bg-white">
											<h1 class="text-red-400 text-xl mb-3">Add New Budget</h1>
											<form wire:submit.prevent="addBudget">
												<div class="form-group">
													<input type="text" wire:model="newBudget.category" placeholder="Budget Category (separate with commas)">
													@error('newBudget.category') <span class="error">{{ $message }}</span> @enderror
												</div>
												<div class="form-group">
													<input type="text" wire:model="newBudget.amount" placeholder="Amount" min="1">
													@error('newBudget.amount') <span class="error">{{ $message }}</span> @enderror
												</div>
												<div class="form-group">
													<button type="submit" class="inline-flex items-center justify-center border border-black bg-gray-800 px-4 py-2 font-medium text-white hover:text-gray-800 focus:text-gray-800 hover:bg-transparent transition-colors duration-300">Add Budget</button>
												</div>
											</form>
										</div>
									</div>
									<div class="col-span-12 md:col-span-6 p-1">
										<div class="existing-budgets shadow-md bg-white">
											<h2 class="text-red-400 text-xl mb-3">Existing Budgets</h2>
											<ul>
												@forelse($budgets as $budget)
												<li class="budget-item bg-gray-100">
													<strong>{{ $budget->category }}</strong> -
													<span>${{ number_format($budget->amount, 2) }}</span>
													<button wire:click="deleteBudget({{ $budget->id }})" class="btn-delete">Delete</button>
												</li>
												@empty
												<li>No budgets available</li>
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
			</div>
		</div>
    </div>
</main>

<style>
    /* .budget-container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #FFF6D8;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    } */

    .budget-form {
        padding: 20px;
        background-color: #FF8080;
        color: black;
        max-height: 275px;
    }

    .existing-budgets {
        padding: 20px;
        background-color: #FF8080;
        color: black;
    }


    .form-group {
        margin-bottom: 15px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .btn-submit {
        padding: 10px 15px;
        background-color: black;
        color: white;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #444;
    }

    .budget-item {
        margin-bottom: 10px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .btn-delete {
        padding: 5px 10px;
        background-color: #FF4444;
        color: white;
        border: none;
        cursor: pointer;
    }

    .btn-delete:hover {
        background-color: #FF0000;
    }
</style>
<script>
    window.addEventListener('notify', event => {
        alert(event.detail.message); // Display the error in an alert, or customize as needed
    });
</script>
<script>
    document.addEventListener('refreshPage', () => {
       window.location.reload();
    });
</script>
