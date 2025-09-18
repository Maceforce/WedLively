<div class="w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="mt-8 overflow-hidden">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-800 dark:text-gray-200 sm:truncate sm:text-3xl">
                        Sales Report
                    </h2>
                    <nav class="mt-4 flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li>
                                <div class="flex items-center">
                                    <a href="/" class="text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-300 dark:hover:text-gray-100">
                                        Home
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 rtl:rotate-180 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="/seller/home" class="text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-300 dark:hover:text-gray-100">
                                        My Dashboard
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400 rtl:rotate-180 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                        Sales Report
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="mt-8 p-6 bg-white shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-wrap gap-4 mb-6">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Date</label>
                        <input type="date" id="start_date" wire:model.defer="start_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Date</label>
                        <input type="date" id="end_date" wire:model.defer="end_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div class="flex-1">
                        <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Location</label>
                        <input type="text" id="location" wire:model.defer="location" placeholder="Enter location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div class="self-end">
                        <button wire:click="loadSalesReport" class="inline-flex items-center justify-center rounded-sm border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">
                            Filter
                        </button>
                    </div>
                </div>
                <hr class="mb-6 border-gray-200 dark:border-gray-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                                Event Name
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                                Location
                            </th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                                Total Sales
                            </th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                                Revenue
                            </th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                                Total Orders
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($salesData as $data)
                        <tr>
                            <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-white">
                                {{ $data->event_name }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                {{ $data->location }}
                            </td>
                            <td class="px-4 py-4 text-sm text-right text-gray-500 dark:text-gray-400">
                                ${{ number_format($data->total_sales, 2) }}
                            </td>
                            <td class="px-4 py-4 text-sm text-right text-gray-500 dark:text-gray-400">
                                ${{ number_format($data->revenue, 2) }}
                            </td>
                            <td class="px-4 py-4 text-sm text-right text-gray-500 dark:text-gray-400">
                                {{ $data->total_orders }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
