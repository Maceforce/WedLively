<div class="w-full bg-gray-50 dark:bg-zinc-900 rounded-lg shadow-lg">
    <!-- Section Title -->
    <div class="px-6 py-4 bg-white border-b dark:bg-gray-700 dark:border-zinc-600 rounded-t-lg">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold leading-7 text-gray-800 dark:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block mr-2 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 4h6a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm0-4h.01M13 15h.01M5 13h4m-4 4h4m1-12V3a2 2 0 012-2h4a2 2 0 012 2v2m-6 12V9m6 4h4m-4 4h4m1-12V3a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                </svg>
                Sales Report
            </h2>
        </div>
    </div>

    <!-- Section Content -->
    <div class="px-6 py-4 bg-white dark:bg-zinc-800 border-t dark:border-zinc-600">
        <!-- Filters -->
        <div class="mb-6 flex flex-wrap items-center space-y-2 sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
            <input type="date" wire:model.defer="start_date" class="border border-gray-300 dark:border-zinc-600 px-3 py-2 rounded-lg text-sm text-gray-700 dark:text-gray-200 bg-gray-50 dark:bg-zinc-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Start Date">
            <input type="date" wire:model.defer="end_date" class="border border-gray-300 dark:border-zinc-600 px-3 py-2 rounded-lg text-sm text-gray-700 dark:text-gray-200 bg-gray-50 dark:bg-zinc-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="End Date">
            <input type="text" wire:model.defer="location" class="border border-gray-300 dark:border-zinc-600 px-3 py-2 rounded-lg text-sm text-gray-700 dark:text-gray-200 bg-gray-50 dark:bg-zinc-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Location">
            
            <!-- Vendor Category Filter -->
            <select wire:model.defer="vendor_category" class="border border-gray-300 dark:border-zinc-600 px-3 py-2 rounded-lg text-sm text-gray-700 dark:text-gray-200 bg-gray-50 dark:bg-zinc-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                <option value="">Select Vendor Category</option>
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
                <!-- Add more categories here -->
            </select>

            <button wire:click="loadSalesReport" class="inline-flex items-center justify-center rounded-sm border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">
                Filter
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-zinc-600 rounded-lg">
                <thead>
                    <tr class="bg-gray-100 dark:bg-zinc-700 text-gray-700 dark:text-gray-200">
                        <th class="px-4 py-2 text-left text-sm font-medium">Event Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium">Location</th>
                        <th class="px-4 py-2 text-left text-sm font-medium">Total Sales</th>
                        <th class="px-4 py-2 text-left text-sm font-medium">Revenue</th>
                        <th class="px-4 py-2 text-left text-sm font-medium">Total Orders</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 text-gray-800 dark:text-gray-200">
                    @foreach ($salesData as $data)
                        <tr class="border-b border-gray-200 dark:border-zinc-700">
                            <td class="px-4 py-2 text-sm">{{ $data->event_name }}</td>
                            <td class="px-4 py-2 text-sm">{{ $data->location }}</td>
                            <td class="px-4 py-2 text-sm">${{ number_format($data->total_sales, 2) }}</td>
                            <td class="px-4 py-2 text-sm">${{ number_format($data->revenue, 2) }}</td>
                            <td class="px-4 py-2 text-sm">{{ $data->total_orders }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
