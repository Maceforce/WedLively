<div class="container" x-data="window.TJPlQeqplTFcTQC" x-init="initialize()">

    
    <div class="fixed top-10 right-10 z-[99]" wire:loading>
<<<<<<< HEAD
        <div role="status"> <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
            </svg> <span class="sr-only">Loading...</span> </div>
=======
        <div role="status"> <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/> </svg> <span class="sr-only">Loading...</span> </div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
    </div>

    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

        
        <div class="col-span-12 lg:col-span-4">

            
            <div class="flex flex-col text-center bg-white dark:bg-zinc-800 rounded-md shadow-sm mb-6">

                
                <div class="flex-1 flex flex-col p-8">

                    
                    <div class="relative rounded-full overflow-hidden flex-shrink-0 mx-auto" wire:ignore>
                        <img id="profile-avatar-preview" class="relative rounded-full w-28 h-28 object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(auth()->user()->avatar)); ?>" alt="<?php echo e(auth()->user()->username); ?>">
                        <label for="profile-avatar-container" class="absolute inset-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100">
                            <span><?php echo e(__('messages.t_change')); ?></span>
                            <input type="file" id="profile-avatar-container" wire:model="avatar" @change="avatar" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                        </label>
                    </div>

                    
                    <div class="mt-4 text-gray-900 dark:text-gray-200 text-sm font-medium flex items-center justify-center">
<<<<<<< HEAD
                        <span class="text-[15px] font-extrabold text-gray-700 dark:text-gray-100"><?php echo e(auth()->user()->username); ?></span>
                        <?php if(auth()->user()->status === 'verified'): ?>
                        <?php
                        $uuid = uid();
                        ?>
                        <img data-tooltip-target="tooltip-account-verified-<?php echo e($uuid); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                        <div id="tooltip-account-verified-<?php echo e($uuid); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_account_verified')); ?>

                        </div>
                        <?php endif; ?>
=======
                        <span class="text-[15px] font-extrabold text-gray-700 dark:text-gray-100"><?php echo e(auth()->user()->username); ?></span>  
                        <?php if(auth()->user()->status === 'verified'): ?>
                            <?php
                                $uuid = uid();
                            ?>
                            <img data-tooltip-target="tooltip-account-verified-<?php echo e($uuid); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                            <div id="tooltip-account-verified-<?php echo e($uuid); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                <?php echo e(__('messages.t_account_verified')); ?>

                            </div>
                        <?php endif; ?>  
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    </div>

                    
                    <div class="mt-2 text-xs text-gray-500 dark:text-gray-300">
                        <?php echo e(auth()->user()->fullname); ?>

                    </div>

                    
                    <div class="w-[20%] h-0.5 bg-gray-100 dark:bg-zinc-700 flex items-center justify-center mx-auto mt-4"></div>

                    
                    <div class="my-4">

                        
                        <div class="flex items-center justify-center cursor-pointer" @click="toggleEditingHeadline" x-show="!isHeadlineEditing" x-cloak>

                            
                            <p class="text-gray-500 dark:text-gray-300 text-sm"><?php echo e(auth()->user()->headline); ?></p>

                            
<<<<<<< HEAD
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] ltr:ml-2 rtl:mr-2 text-gray-400 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
=======
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] ltr:ml-2 rtl:mr-2 text-gray-400 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3

                        </div>

                        
                        <div x-show="isHeadlineEditing" x-cloak>

                            <input type="text" wire:model.defer="headline" @keydown.enter="disableEditing" @keydown.window.escape="disableEditing" class="w-full bg-white dark:bg-zinc-800 focus:outline-none focus:shadow-outline border border-gray-200 dark:border-zinc-600 dark:text-gray-100 rounded-sm py-1 px-2 appearance-none leading-normal text-xs font-medium" x-ref="edit_headline" maxlength="100">

                            <div class="ltr:text-right rtl:text-left space-x-2 rtl:space-x-reverse flex items-center justify-end pt-1">

                                
                                <button wire:click="setHeadline" wire:loading.attr="disabled" wire:target="setHeadline" class="text-xs font-medium text-green-600 hover:text-green-800 flex items-center">

                                    
                                    <div wire:loading wire:target="setHeadline">
                                        <svg role="status" class="inline w-3 h-3 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
<<<<<<< HEAD
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
=======
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                        </svg>
                                    </div>

                                    
                                    <div wire:loading.remove wire:target="setHeadline">
<<<<<<< HEAD
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
=======
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    </div>

                                    <span class="text-[10px] font-medium ltr:ml-1 rtl:mr-1"><?php echo e(__('messages.t_approve')); ?></span>
                                </button>

                                
                                <button @click="disableEditing" class="text-xs font-medium text-red-600 hover:text-red-800 flex items-center">
<<<<<<< HEAD
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
=======
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    <span class="text-[10px] font-medium ltr:ml-1 rtl:mr-1"><?php echo e(__('messages.t_cancel')); ?></span>
                                </button>

                            </div>

                        </div>
<<<<<<< HEAD

=======
                        
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    </div>

                    
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dd>
<<<<<<< HEAD

                            <?php if(auth()->user()->isOnline() && !$availability): ?>
                            <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full"><?php echo e(__('messages.t_online')); ?></span>
                            <?php elseif($availability): ?>
                            <span class="px-2 py-1 text-gray-800 text-xs font-medium bg-gray-100 rounded-full"><?php echo e(__('messages.t_unavailable')); ?></span>
                            <?php else: ?>
                            <span class="px-2 py-1 text-red-800 text-xs font-medium bg-red-100 rounded-full"><?php echo e(__('messages.t_unavailable')); ?></span>
=======
                            
                            <?php if(auth()->user()->isOnline() && !$availability): ?>
                                <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full"><?php echo e(__('messages.t_online')); ?></span>
                            <?php elseif($availability): ?>
                                <span class="px-2 py-1 text-gray-800 text-xs font-medium bg-gray-100 rounded-full"><?php echo e(__('messages.t_unavailable')); ?></span>
                            <?php else: ?>
                                <span class="px-2 py-1 text-red-800 text-xs font-medium bg-red-100 rounded-full"><?php echo e(__('messages.t_unavailable')); ?></span>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                            <?php endif; ?>

                        </dd>
                    </dl>

                </div>

                
                <dl class="mt-2 divide-y divide-gray-50 dark:divide-zinc-600 border-t border-gray-50 dark:border-zinc-600">

                    
                    <div class="flex justify-between text-sm font-medium px-5 py-4">
                        <dt class="text-gray-400 font-normal"><?php echo e(__('messages.t_member_since')); ?></dt>
                        <dd class="text-gray-700 dark:text-gray-300"><?php echo e(format_date(auth()->user()->created_at, 'F j, Y H:i')); ?></dd>
                    </div>

                    
                    <div class="flex justify-between text-sm font-medium px-5 py-4">
                        <dt class="text-gray-400 font-normal"><?php echo e(__('messages.t_current_level')); ?></dt>
                        <dd class="text-gray-700 dark:text-gray-300"><?php echo e(auth()->user()->level?->title); ?></dd>
                    </div>

                    
                    <div class="flex justify-between text-sm font-medium px-5 py-4">
                        <dt class="text-gray-400 font-normal"><?php echo e(__('messages.t_country')); ?></dt>
                        <dd class="text-gray-700 dark:text-gray-300 flex items-center">
                            <?php if(auth()->user()->country): ?>
<<<<<<< HEAD
                            <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(countryFlag(auth()->user()->country?->code)); ?>" alt="<?php echo e(auth()->user()->country?->name); ?>" class="lazy h-5 w-5 ltr:mr-2 rtl:ml-2">
                            <span><?php echo e(auth()->user()->country?->name); ?></span>
                            <?php else: ?>
                            <?php echo e(__('messages.t_n_a')); ?>

                            <?php endif; ?>
                        </dd>
                    </div>

=======
                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(countryFlag(auth()->user()->country?->code)); ?>" alt="<?php echo e(auth()->user()->country?->name); ?>" class="lazy h-5 w-5 ltr:mr-2 rtl:ml-2">  
                                <span><?php echo e(auth()->user()->country?->name); ?></span> 
                            <?php else: ?>
                                <?php echo e(__('messages.t_n_a')); ?> 
                            <?php endif; ?>
                        </dd>
                    </div>
                    
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                </dl>

            </div>

            
            <?php if(auth()->user()->account_type === 'seller'): ?>
<<<<<<< HEAD
            <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border <?php echo e($availability ? 'border-b-0' : ''); ?> border-gray-200 dark:border-zinc-600">

                
                <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 <?php echo e($availability ? 'rounded-t-md' : 'rounded-md'); ?>">
                    <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                            <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_availability')); ?></h3>
                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_when_unavailable_u_wont_receive_orders')); ?></p>
                        </div>
                        <?php if(!$availability): ?>
                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                            <button id="modal-set-availability-button" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                <span class="text-xs font-medium text-primary-600 hover:text-primary-700">
                                    <?php echo e(__('messages.t_set_availability')); ?>

                                </span>
                            </button>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                
                <?php if($availability): ?>
                <div class="px-5 py-6">
                    <div class="rounded-lg bg-gray-50 dark:bg-zinc-700 px-6 py-8 sm:p-10 gird mb-4">
                        <div class="flex-1 mb-4">
                            <div>
                                <h3 class="inline-flex px-4 py-1 rounded-full text-xs font-semibold tracking-wide uppercase bg-red-100 text-red-800">
                                    <?php echo e(__('messages.t_unavailable')); ?>

                                </h3>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                <?php echo __('messages.t_u_wont_be_able_to_receive_orders_until_date', ['date' => format_date($availability->expected_available_date, 'F j, Y')]); ?>

                            </div>
                        </div>
                        <blockquote class="relative ltr:border-l-4 rtl:border-r-4 ltr:pl-4 rtl:pr-4 sm:ltr:pl-6 sm:rtl:pr-6 bg-gray-100 dark:bg-zinc-600 py-4 rounded dark:border-zinc-500">
                            <p class="text-gray-800 text-sm dark:text-white"><em>
                                    <?php echo e($availability->message); ?>

                            </p></em>

                            <footer class="mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-5 w-5 rounded-full object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(auth()->user()->avatar)); ?>" alt="<?php echo e(auth()->user()->username); ?>">
                                    </div>
                                    <div class="ltr:ml-4 rtl:mr-4">
                                        <div class="text-xs font-semibold text-gray-800 dark:text-gray-300"><?php echo e(auth()->user()->username); ?></div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>

                    <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border <?php echo e($availability ? 'border-b-0' : ''); ?> border-gray-200 dark:border-zinc-600">

                    
                    <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 <?php echo e($availability ? 'rounded-t-md' : 'rounded-md'); ?>">
                        <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                            <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_availability')); ?></h3>
                                <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_when_unavailable_u_wont_receive_orders')); ?></p>
                            </div>
                            <?php if(!$availability): ?>
                                <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                                    <button id="modal-set-availability-button" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" viewBox="0 0 20 20" fill="currentColor"> <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                                        <span class="text-xs font-medium text-primary-600 hover:text-primary-700"> 
                                            <?php echo e(__('messages.t_set_availability')); ?>

                                        </span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    
                    <?php if($availability): ?>
                        <div class="px-5 py-6">
                            <div class="rounded-lg bg-gray-50 dark:bg-zinc-700 px-6 py-8 sm:p-10 gird mb-4">
                                <div class="flex-1 mb-4">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 rounded-full text-xs font-semibold tracking-wide uppercase bg-red-100 text-red-800">
                                            <?php echo e(__('messages.t_unavailable')); ?>

                                        </h3>
                                    </div>
                                    <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        <?php echo __('messages.t_u_wont_be_able_to_receive_orders_until_date', ['date' => format_date($availability->expected_available_date, 'F j, Y')]); ?>

                                    </div>
                                </div>
                                <blockquote class="relative ltr:border-l-4 rtl:border-r-4 ltr:pl-4 rtl:pr-4 sm:ltr:pl-6 sm:rtl:pr-6 bg-gray-100 dark:bg-zinc-600 py-4 rounded dark:border-zinc-500">
                                    <p class="text-gray-800 text-sm dark:text-white"><em>
                                        <?php echo e($availability->message); ?>

                                    </p></em>
                                
                                    <footer class="mt-2">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                        <img class="h-5 w-5 rounded-full object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(auth()->user()->avatar)); ?>" alt="<?php echo e(auth()->user()->username); ?>">
                                        </div>
                                        <div class="ltr:ml-4 rtl:mr-4">
                                            <div class="text-xs font-semibold text-gray-800 dark:text-gray-300"><?php echo e(auth()->user()->username); ?></div>
                                        </div>
                                    </div>
                                    </footer>
                                </blockquote>
                            </div>

                            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_change')),'action' => 'removeAvailability','block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
<<<<<<< HEAD
                </div>
                <?php endif; ?>

            </div>
=======
                        </div>
                    <?php endif; ?>

                </div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
            <?php endif; ?>

            
            <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700">

                
                <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 rounded-t-md">
                    <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                            <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_description')); ?></h3>
                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_tell_us_more_about_ur_self')); ?></p>
                        </div>
                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                            <button @click="isDescriptionEditing = !isDescriptionEditing" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
<<<<<<< HEAD
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                <span class="text-xs font-medium text-primary-600 hover:text-primary-700">
=======
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" viewBox="0 0 20 20" fill="currentColor"> <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                                <span class="text-xs font-medium text-primary-600 hover:text-primary-700"> 
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    <?php echo e(__('messages.t_edit')); ?>

                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                
                <div class="px-5 py-6" x-cloak>

                    
                    <div x-show="isDescriptionEditing" class="w-full">
                        <div class="mb-4">
                            <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_description')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_pls_tell_us_about_ur_hobbies_etc')),'model' => 'description','icon' => 'clipboard-text-outline']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11)): ?>
<?php $component = $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11; ?>
<?php unset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11); ?>
<?php endif; ?>
                        </div>
                        <div class="flex items-center justify-end">
                            <div></div>
                            <div class="flex items-center">
                                <span @click="isDescriptionEditing = false" class="ltr:mr-4 rtl:ml-4 font-medium text-sm text-gray-500 hover:text-gray-600 cursor-pointer"><?php echo e(__('messages.t_cancel')); ?></span>
                                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'updateDescription','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_update')),'block' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>

                    
                    <div class="italic text-sm font-medium text-gray-400" x-show="!isDescriptionEditing">
                        <?php echo e($description); ?>

                    </div>

                </div>

            </div>

            
            <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700">

                
                <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 rounded-t-md">
                    <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                            <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_linked_accounts')); ?></h3>
                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_connect_ur_social_media_accounts')); ?></p>
                        </div>
                    </div>
                </div>

                
                <div class="grid grid-cols-12 gap-4 py-6">

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_facebook')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_facebook_profile')),'model' => 'facebook_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_twitter')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_twitter_profile')),'model' => 'twitter_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_dribbble')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_dribbble_profile')),'model' => 'dribbble_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_stackoverflow')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_stackoverflow_profile')),'model' => 'stackoverflow_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_github')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_github_profile')),'model' => 'github_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_youtube')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_youtube_profile')),'model' => 'youtube_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_vimeo')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_vimeo_profile')),'model' => 'vimeo_profile','icon' => 'link-variant']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 px-5 mt-5">
                        <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'updateSocial','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_update')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                    </div>

                </div>

            </div>

            
            <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700">

                
                <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 rounded-t-md">
                    <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                            <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_skills')); ?></h3>
                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_let_ur_buyers_know_ur_skills')); ?></p>
                        </div>
                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                            <button @click="isAddSkill = !isAddSkill" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
<<<<<<< HEAD
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-200 rtl:mr-2 ltr:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
=======
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-200 rtl:mr-2 ltr:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                            </button>
                        </div>
                    </div>
                </div>

                
                <div class="py-6" x-cloak>

<<<<<<< HEAD
                    
=======
                      
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <div class="px-5" x-show="isAddSkill">

                        
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_add_skill')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_eg_voice_talent')),'model' => 'add_skill.name','icon' => 'bookmark-multiple']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>

                        
                        <div class="mt-6">
                            <label class="text-sm font-medium text-gray-900 dark:text-gray-300"><?php echo e(__('messages.t_experience')); ?></label>
                            <fieldset class="mt-4">
                                <div class="space-y-4">
<<<<<<< HEAD

=======
                                
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    
                                    <div class="flex items-center">
                                        <input id="skill-experience-beginner" wire:model.defer="add_skill.experience" value="beginner" name="skill_experience" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="skill-experience-beginner" class="ltr:ml-3 rtl:mr-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <?php echo e(__('messages.t_beginner')); ?>

                                        </label>
                                    </div>

                                    
                                    <div class="flex items-center">
                                        <input id="skill-experience-intermediate" wire:model.defer="add_skill.experience" value="intermediate" name="skill_experience" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="skill-experience-intermediate" class="ltr:ml-3 rtl:mr-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <?php echo e(__('messages.t_intermediate')); ?>

                                        </label>
                                    </div>

                                    
                                    <div class="flex items-center">
                                        <input id="skill-experience-expert" wire:model.defer="add_skill.experience" value="pro" name="skill_experience" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="skill-experience-expert" class="ltr:ml-3 rtl:mr-3 block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            <?php echo e(__('messages.t_expert')); ?>

                                        </label>
                                    </div>
<<<<<<< HEAD

=======
                                
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                </div>
                            </fieldset>
                        </div>

                        
                        <div class="mt-6">
                            <?php if(isset($add_skill['id'])): ?>
<<<<<<< HEAD
                            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'updateSkill','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_update_skill')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                            <?php else: ?>
<<<<<<< HEAD
                            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'addSkill','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_add_skill')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </div>

                    </div>

                    
                    <?php if(count($skills)): ?>
<<<<<<< HEAD
                    <div class="px-5" x-show="!isAddSkill" wire:key="list-of-skills">
                        <ul role="list" class="border border-gray-200 dark:border-zinc-600 rounded-md divide-y divide-gray-200 dark:divide-zinc-600">
                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm" wire:key="skill-id-<?php echo e($skill->id); ?>">

                                
                                <div class="w-0 flex-1 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                                        <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                                    </svg>
                                    <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate font-medium text-xs dark:text-gray-200">
                                        <?php echo e($skill->name); ?>

                                    </span>
                                </div>

                                
                                <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 flex items-center justify-center">

                                    
                                    <button wire:click="deleteSkill(<?php echo e($skill->id); ?>)" wire:loading.attr="disabled" wire:target="deleteSkill(<?php echo e($skill->id); ?>)" data-tooltip-target="skill-tooltip-delete-<?php echo e($skill->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                        
                                        <div wire:loading wire:target="deleteSkill(<?php echo e($skill->id); ?>)">
                                            <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                            </svg>
                                        </div>

                                        
                                        <div wire:loading.remove wire:target="deleteSkill(<?php echo e($skill->id); ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                    </button>
                                    <div id="skill-tooltip-delete-<?php echo e($skill->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_delete_skill')); ?>

                                    </div>

                                    
                                    <button wire:click="editSkill(<?php echo e($skill->id); ?>)" wire:loading.attr="disabled" wire:target="editSkill(<?php echo e($skill->id); ?>)" data-tooltip-target="skill-tooltip-edit-<?php echo e($skill->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                        
                                        <div wire:loading wire:target="editSkill(<?php echo e($skill->id); ?>)">
                                            <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                            </svg>
                                        </div>

                                        
                                        <div wire:loading.remove wire:target="editSkill(<?php echo e($skill->id); ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </div>

                                    </button>
                                    <div id="skill-tooltip-edit-<?php echo e($skill->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_edit_skill')); ?>

                                    </div>

                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
=======
                        <div class="px-5" x-show="!isAddSkill" wire:key="list-of-skills">
                            <ul role="list" class="border border-gray-200 dark:border-zinc-600 rounded-md divide-y divide-gray-200 dark:divide-zinc-600">
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm" wire:key="skill-id-<?php echo e($skill->id); ?>">

                                        
                                        <div class="w-0 flex-1 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd"/> <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z"/></svg>
                                            <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate font-medium text-xs dark:text-gray-200">
                                                <?php echo e($skill->name); ?>

                                            </span>
                                        </div>

                                        
                                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 flex items-center justify-center">

                                            
                                            <button wire:click="deleteSkill(<?php echo e($skill->id); ?>)" wire:loading.attr="disabled" wire:target="deleteSkill(<?php echo e($skill->id); ?>)" data-tooltip-target="skill-tooltip-delete-<?php echo e($skill->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                                
                                                <div wire:loading wire:target="deleteSkill(<?php echo e($skill->id); ?>)">
                                                    <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                    </svg>
                                                </div>

                                                
                                                <div wire:loading.remove wire:target="deleteSkill(<?php echo e($skill->id); ?>)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                                </div>

                                            </button>
                                            <div id="skill-tooltip-delete-<?php echo e($skill->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                <?php echo e(__('messages.t_delete_skill')); ?>

                                            </div>

                                            
                                            <button wire:click="editSkill(<?php echo e($skill->id); ?>)" wire:loading.attr="disabled" wire:target="editSkill(<?php echo e($skill->id); ?>)" data-tooltip-target="skill-tooltip-edit-<?php echo e($skill->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                                
                                                <div wire:loading wire:target="editSkill(<?php echo e($skill->id); ?>)">
                                                    <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                    </svg>
                                                </div>

                                                
                                                <div wire:loading.remove wire:target="editSkill(<?php echo e($skill->id); ?>)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                                                </div>

                                            </button>
                                            <div id="skill-tooltip-edit-<?php echo e($skill->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                <?php echo e(__('messages.t_edit_skill')); ?>

                                            </div>

                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <?php endif; ?>

                    
                    <?php if(count($skills) === 0): ?>
<<<<<<< HEAD
                    <div wire:key="no-skills-yet" x-show="!isAddSkill" class="text-center text-xs font-medium text-gray-400"><?php echo e(__('messages.t_u_dont_have_any_skills')); ?></div>
=======
                        <div wire:key="no-skills-yet" x-show="!isAddSkill" class="text-center text-xs font-medium text-gray-400"><?php echo e(__('messages.t_u_dont_have_any_skills')); ?></div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <?php endif; ?>

                </div>

            </div>

            
            <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700">

                
                <div class="bg-gray-50 dark:bg-zinc-700 px-5 py-4 rounded-t-md">
                    <div class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                            <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100"><?php echo e(__('messages.t_languages')); ?></h3>
                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_add_languages_u_speak')); ?></p>
                        </div>
                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                            <button @click="isAddLanguage = !isAddLanguage" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
<<<<<<< HEAD
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-200 rtl:mr-2 ltr:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
=======
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-200 rtl:mr-2 ltr:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                            </button>
                        </div>
                    </div>
                </div>

                
                <div class="py-6" x-cloak>

<<<<<<< HEAD
                    
=======
                      
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <div class="px-5" x-show="isAddLanguage">

                        
                        <div class="relative <?php echo e($errors->first('add_language.name') ? 'select2-custom-has-error' : ''); ?>">
                            <label class="text-xs font-medium block mb-2 <?php echo e($errors->first('add_language.name') ? 'text-red-600 dark:text-red-500' : 'text-gray-700'); ?>"><?php echo e(__('messages.t_language')); ?></label>
<<<<<<< HEAD

                            <select data-pharaonic="select2" data-component-id="<?php echo e($this->id); ?>" wire:model.defer="add_language.name" id="select2-id-add_language.name" data-placeholder="<?php echo e(__('messages.t_choose_language')); ?>" data-search-off class="select2" data-dir="<?php echo e(config()->get('direction')); ?>" wire:ignore>
                                <option value=""></option>
                                <?php $__currentLoopData = config('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($name); ?>"><?php echo e($name); ?></option>
=======
                        
                            <select data-pharaonic="select2" data-component-id="<?php echo e($this->id); ?>" wire:model.defer="add_language.name" id="select2-id-add_language.name" data-placeholder="<?php echo e(__('messages.t_choose_language')); ?>" data-search-off class="select2" data-dir="<?php echo e(config()->get('direction')); ?>" wire:ignore>
                                <option value=""></option>
                                <?php $__currentLoopData = config('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($name); ?>"><?php echo e($name); ?></option>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['add_language.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('add_language.name')); ?></p>
=======
                                <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('add_language.name')); ?></p>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<<<<<<< HEAD

=======
                        
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        </div>

                        
                        <div class="mt-6">
                            <fieldset class="mt-4">
                                <div class="space-y-4">
<<<<<<< HEAD

=======
                                
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    
                                    <div class="flex items-center">
                                        <input id="languages-level-basic" wire:model.defer="add_language.level" value="basic" name="languages_level" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="languages-level-basic" class="ltr:ml-3 rtl:mr-3 block text-xs font-medium text-gray-700 dark:text-gray-400">
                                            <?php echo e(__('messages.t_basic')); ?>

                                        </label>
                                    </div>
<<<<<<< HEAD

=======
                                    
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                    
                                    <div class="flex items-center">
                                        <input id="languages-level-conversational" wire:model.defer="add_language.level" value="conversational" name="languages_level" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="languages-level-conversational" class="ltr:ml-3 rtl:mr-3 block text-xs font-medium text-gray-700 dark:text-gray-400">
                                            <?php echo e(__('messages.t_conversational')); ?>

                                        </label>
                                    </div>

                                    
                                    <div class="flex items-center">
                                        <input id="languages-level-fluent" wire:model.defer="add_language.level" value="fluent" name="languages_level" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="languages-level-fluent" class="ltr:ml-3 rtl:mr-3 block text-xs font-medium text-gray-700 dark:text-gray-400">
                                            <?php echo e(__('messages.t_fluent')); ?>

                                        </label>
                                    </div>

                                    
                                    <div class="flex items-center">
                                        <input id="languages-level-native" wire:model.defer="add_language.level" value="native" name="languages_level" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 dark:border-zinc-600 dark:bg-transparent">
                                        <label for="languages-level-native" class="ltr:ml-3 rtl:mr-3 block text-xs font-medium text-gray-700 dark:text-gray-400">
                                            <?php echo e(__('messages.t_native')); ?>

                                        </label>
                                    </div>
<<<<<<< HEAD

=======
                                
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                                </div>
                            </fieldset>
                        </div>

                        
                        <div class="mt-6">
                            <?php if(isset($add_language['id'])): ?>
<<<<<<< HEAD
                            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'updateLanguage','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_update_language')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                            <?php else: ?>
<<<<<<< HEAD
                            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'addLanguage','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_add_language')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </div>

                    </div>

                    
                    <?php if(count($languages)): ?>
<<<<<<< HEAD
                    <div class="px-5" x-show="!isAddLanguage" wire:key="list-of-languages">
                        <ul role="list" class="border border-gray-200 dark:border-zinc-600 rounded-md divide-y divide-gray-200 dark:divide-zinc-600">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm" wire:key="language-id-<?php echo e($language->id); ?>">

                                
                                <div class="w-0 flex-1 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate font-medium text-xs dark:text-gray-100">
                                        <?php echo e($language->name); ?> ⚊ <span class="font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_' . $language->level)); ?></span>
                                    </span>
                                </div>

                                
                                <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 flex items-center justify-center">

                                    
                                    <button wire:click="deleteLanguage(<?php echo e($language->id); ?>)" wire:loading.attr="disabled" wire:target="deleteLanguage(<?php echo e($language->id); ?>)" data-tooltip-target="language-tooltip-delete-<?php echo e($language->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                        
                                        <div wire:loading wire:target="deleteLanguage(<?php echo e($language->id); ?>)">
                                            <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                            </svg>
                                        </div>

                                        
                                        <div wire:loading.remove wire:target="deleteLanguage(<?php echo e($language->id); ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                    </button>
                                    <div id="language-tooltip-delete-<?php echo e($language->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_delete_language')); ?>

                                    </div>

                                    
                                    <button wire:click="editLanguage(<?php echo e($language->id); ?>)" wire:loading.attr="disabled" wire:target="editLanguage(<?php echo e($language->id); ?>)" data-tooltip-target="language-tooltip-edit-<?php echo e($language->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                        
                                        <div wire:loading wire:target="editLanguage(<?php echo e($language->id); ?>)">
                                            <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                            </svg>
                                        </div>

                                        
                                        <div wire:loading.remove wire:target="editLanguage(<?php echo e($language->id); ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </div>

                                    </button>
                                    <div id="language-tooltip-edit-<?php echo e($language->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <?php echo e(__('messages.t_edit_language')); ?>

                                    </div>

                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
=======
                        <div class="px-5" x-show="!isAddLanguage" wire:key="list-of-languages">
                            <ul role="list" class="border border-gray-200 dark:border-zinc-600 rounded-md divide-y divide-gray-200 dark:divide-zinc-600">
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm" wire:key="language-id-<?php echo e($language->id); ?>">

                                        
                                        <div class="w-0 flex-1 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd"/></svg>
                                            <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate font-medium text-xs dark:text-gray-100">
                                                <?php echo e($language->name); ?> ⚊ <span class="font-normal text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_' . $language->level)); ?></span>
                                            </span>
                                        </div>

                                        
                                        <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 flex items-center justify-center">

                                            
                                            <button wire:click="deleteLanguage(<?php echo e($language->id); ?>)" wire:loading.attr="disabled" wire:target="deleteLanguage(<?php echo e($language->id); ?>)" data-tooltip-target="language-tooltip-delete-<?php echo e($language->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                                
                                                <div wire:loading wire:target="deleteLanguage(<?php echo e($language->id); ?>)">
                                                    <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                    </svg>
                                                </div>

                                                
                                                <div wire:loading.remove wire:target="deleteLanguage(<?php echo e($language->id); ?>)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                                </div>

                                            </button>
                                            <div id="language-tooltip-delete-<?php echo e($language->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                <?php echo e(__('messages.t_delete_language')); ?>

                                            </div>

                                            
                                            <button wire:click="editLanguage(<?php echo e($language->id); ?>)" wire:loading.attr="disabled" wire:target="editLanguage(<?php echo e($language->id); ?>)" data-tooltip-target="language-tooltip-edit-<?php echo e($language->id); ?>" type="button" class="font-medium text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2">

                                                
                                                <div wire:loading wire:target="editLanguage(<?php echo e($language->id); ?>)">
                                                    <svg role="status" class="inline w-4 h-4 text-primary-600 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                    </svg>
                                                </div>

                                                
                                                <div wire:loading.remove wire:target="editLanguage(<?php echo e($language->id); ?>)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                                                </div>

                                            </button>
                                            <div id="language-tooltip-edit-<?php echo e($language->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                <?php echo e(__('messages.t_edit_language')); ?>

                                            </div>

                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <?php endif; ?>

                    
                    <?php if(count($languages) === 0): ?>
<<<<<<< HEAD
                    <div wire:key="no-languages-yet" x-show="!isAddLanguage" class="text-center text-xs font-medium text-gray-400"><?php echo e(__('messages.t_u_dont_have_any_languages')); ?></div>
=======
                        <div wire:key="no-languages-yet" x-show="!isAddLanguage" class="text-center text-xs font-medium text-gray-400"><?php echo e(__('messages.t_u_dont_have_any_languages')); ?></div>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <?php endif; ?>

                </div>

            </div>

        </div>

        
        <div class="col-span-12 lg:col-span-8">

            
            <div class="border-dashed border-2 dark:border-zinc-600 rounded-md mb-6">
                <div class="py-14 px-6 text-center text-sm sm:px-14">
<<<<<<< HEAD
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
=======
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <p class="mt-4 font-semibold text-gray-900 dark:text-gray-300"><?php echo e(__('messages.t_update_profile')); ?></p>
                    <p class="mt-2 text-gray-500 max-w-md mx-auto"><?php echo e(__('messages.t_these_info_will_appear_on_ur_public_profile')); ?></p>
                </div>
            </div>

            
            <div class="flex items-center justify-center">
                <span class="relative z-0 inline-flex shadow-sm rounded-md">

                    
                    <a href="<?php echo e(url('account/settings')); ?>" class="relative inline-flex items-center px-4 py-1 ltr:rounded-l-md rtl:rounded-r-md border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-xs font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600">
<<<<<<< HEAD
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.122 21c.378.378.88.586 1.414.586S7.572 21.378 7.95 21l4.336-4.336a7.495 7.495 0 0 0 2.217.333 7.446 7.446 0 0 0 5.302-2.195 7.484 7.484 0 0 0 1.632-8.158l-.57-1.388-4.244 4.243-2.121-2.122 4.243-4.243-1.389-.571A7.478 7.478 0 0 0 14.499 2c-2.003 0-3.886.78-5.301 2.196a7.479 7.479 0 0 0-1.862 7.518L3 16.05a2.001 2.001 0 0 0 0 2.828L5.122 21zm4.548-8.791-.254-.616a5.486 5.486 0 0 1 1.196-5.983 5.46 5.46 0 0 1 4.413-1.585l-3.353 3.353 4.949 4.95 3.355-3.355a5.49 5.49 0 0 1-1.587 4.416c-1.55 1.55-3.964 2.027-5.984 1.196l-.615-.255-5.254 5.256h.001l-.001 1v-1l-2.122-2.122 5.256-5.255z"></path>
                        </svg>
=======
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.122 21c.378.378.88.586 1.414.586S7.572 21.378 7.95 21l4.336-4.336a7.495 7.495 0 0 0 2.217.333 7.446 7.446 0 0 0 5.302-2.195 7.484 7.484 0 0 0 1.632-8.158l-.57-1.388-4.244 4.243-2.121-2.122 4.243-4.243-1.389-.571A7.478 7.478 0 0 0 14.499 2c-2.003 0-3.886.78-5.301 2.196a7.479 7.479 0 0 0-1.862 7.518L3 16.05a2.001 2.001 0 0 0 0 2.828L5.122 21zm4.548-8.791-.254-.616a5.486 5.486 0 0 1 1.196-5.983 5.46 5.46 0 0 1 4.413-1.585l-3.353 3.353 4.949 4.95 3.355-3.355a5.49 5.49 0 0 1-1.587 4.416c-1.55 1.55-3.964 2.027-5.984 1.196l-.615-.255-5.254 5.256h.001l-.001 1v-1l-2.122-2.122 5.256-5.255z"></path></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <?php echo e(__('messages.t_account_settings')); ?>

                    </a>

                    
                    <a href="<?php echo e(url('account/password')); ?>" class="ltr:-ml-px rtl:-mr-px relative inline-flex items-center px-4 py-1 border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-xs font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600">
<<<<<<< HEAD
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path>
                        </svg>
=======
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <?php echo e(__('messages.t_change_password')); ?>

                    </a>

                    
                    <?php if(auth()->user()->status !== 'verified'): ?>
<<<<<<< HEAD
                    <a href="<?php echo e(url('account/verification')); ?>" class="ltr:-ml-px rtl:-mr-px relative inline-flex items-center px-4 py-1 border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-xs font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600">
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.438 5.089a1.002 1.002 0 0 0-.959.015c-.684.389-1.355.577-2.053.577-2.035 0-3.952-1.629-5.722-3.39-.375-.373-1.063-.373-1.438 0C9.592 3.959 7.598 5.663 5.51 5.663c-.69 0-1.351-.184-2.018-.561-.298-.166-.658-.171-.96-.012s-.501.461-.528.801c-.011.129-.944 12.872 9.683 16.041a.99.99 0 0 0 .286.042H12c.097 0 .192-.014.285-.041 10.657-3.17 9.695-15.916 9.684-16.044a1 1 0 0 0-.531-.8zm-9.452 14.842c-6.979-2.255-7.934-9.412-8.014-12.477.505.14 1.019.209 1.537.209 2.492 0 4.65-1.567 6.476-3.283 1.893 1.788 3.983 3.301 6.442 3.301.53 0 1.057-.074 1.575-.22-.074 3.065-1.021 10.217-8.016 12.47z"></path>
                        </svg>
                        <?php echo e(__('messages.t_get_verified')); ?>

                    </a>
=======
                        <a href="<?php echo e(url('account/verification')); ?>" class="ltr:-ml-px rtl:-mr-px relative inline-flex items-center px-4 py-1 border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-xs font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600">
                            <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.438 5.089a1.002 1.002 0 0 0-.959.015c-.684.389-1.355.577-2.053.577-2.035 0-3.952-1.629-5.722-3.39-.375-.373-1.063-.373-1.438 0C9.592 3.959 7.598 5.663 5.51 5.663c-.69 0-1.351-.184-2.018-.561-.298-.166-.658-.171-.96-.012s-.501.461-.528.801c-.011.129-.944 12.872 9.683 16.041a.99.99 0 0 0 .286.042H12c.097 0 .192-.014.285-.041 10.657-3.17 9.695-15.916 9.684-16.044a1 1 0 0 0-.531-.8zm-9.452 14.842c-6.979-2.255-7.934-9.412-8.014-12.477.505.14 1.019.209 1.537.209 2.492 0 4.65-1.567 6.476-3.283 1.893 1.788 3.983 3.301 6.442 3.301.53 0 1.057-.074 1.575-.22-.074 3.065-1.021 10.217-8.016 12.47z"></path></svg>
                            <?php echo e(__('messages.t_get_verified')); ?>

                        </a>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                    <?php endif; ?>

                    
                    <a href="<?php echo e(url('profile', auth()->user()->username)); ?>" class="ltr:-ml-px rtl:-mr-px relative ltr:rounded-r-md rtl:rounded-l-md inline-flex items-center px-4 py-1 border border-gray-300 dark:border-zinc-600 dark:hover:bg-zinc-700 dark:text-gray-200 bg-white dark:bg-zinc-800 text-xs font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-primary-600 focus:border-primary-600">
<<<<<<< HEAD
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                        </svg>
=======
                        <svg class="ltr:-ml-1 ltr:mr-2 rtl:-mr-1 rtl:ml-2 w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
                        <?php echo e(__('messages.t_view_profile')); ?>

                    </a>
                </span>
            </div>

        </div>

    </div>

    
    <?php if(auth()->user()->account_type === 'seller' && !$availability): ?>
<<<<<<< HEAD
    <?php if (isset($component)) { $__componentOriginal7f2ffadb3529b0da5f15e93a160bb50fa776283f = $component; } ?>
=======
        <?php if (isset($component)) { $__componentOriginal7f2ffadb3529b0da5f15e93a160bb50fa776283f = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-set-availability-container','target' => 'modal-set-availability-button','uid' => 'modal_'.e(uid()).'','placement' => 'center-center','size' => 'max-w-md']); ?>

<<<<<<< HEAD
        
         <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_change_availability')); ?> <?php $__env->endSlot(); ?>

        
         <?php $__env->slot('content', null, []); ?> 
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
=======
            
             <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_change_availability')); ?> <?php $__env->endSlot(); ?>

            
             <?php $__env->slot('content', null, []); ?> 
                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                    
                    <div class="col-span-12">
                        <?php if (isset($component)) { $__componentOriginala0274761f86638d78e36787c771a294b67c238db = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_when_do_u_expect_tobe_ready_for_new_work')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_mm_dd_yyyy_example', ['example' => now()->addDay()->format('m/d/Y')])),'model' => 'availability_date','icon' => 'calendar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0274761f86638d78e36787c771a294b67c238db)): ?>
<?php $component = $__componentOriginala0274761f86638d78e36787c771a294b67c238db; ?>
<?php unset($__componentOriginala0274761f86638d78e36787c771a294b67c238db); ?>
<?php endif; ?>
<<<<<<< HEAD
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
=======
                    </div>

                    
                    <div class="col-span-12">
                        <?php if (isset($component)) { $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11 = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_add_a_message')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_buyers_will_see_ur_message_when_visiting_ur_gigs')),'model' => 'availability_message','icon' => 'message-reply-text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11)): ?>
<?php $component = $__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11; ?>
<?php unset($__componentOriginal582987c8de0d25188b5e8e44b2a5588ebcdc0b11); ?>
<?php endif; ?>
<<<<<<< HEAD
                </div>

            </div>
         <?php $__env->endSlot(); ?>

        
         <?php $__env->slot('footer', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
=======
                    </div>

                </div>
             <?php $__env->endSlot(); ?>

            
             <?php $__env->slot('footer', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c = $component; } ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'setAvailability','text' => ''.e(__('messages.t_set_availability')).'','block' => 0]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c)): ?>
<?php $component = $__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c; ?>
<?php unset($__componentOriginal49b2fc8ba42c39d638e648b21b88e1b33ae2822c); ?>
<?php endif; ?>
<<<<<<< HEAD
         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
=======
             <?php $__env->endSlot(); ?>

         <?php echo $__env->renderComponent(); ?>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
<?php endif; ?>
<?php if (isset($__componentOriginal7f2ffadb3529b0da5f15e93a160bb50fa776283f)): ?>
<?php $component = $__componentOriginal7f2ffadb3529b0da5f15e93a160bb50fa776283f; ?>
<?php unset($__componentOriginal7f2ffadb3529b0da5f15e93a160bb50fa776283f); ?>
<?php endif; ?>
    <?php endif; ?>

<<<<<<< HEAD


    <style>
        /* Basic page styles */


        /* Popup modal overlay */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Darker background for more focus */
            backdrop-filter: blur(5px);
            /* Adds a blur effect to the background */
        }

        /* Modal content box */
        .modal-content {
            background-color: #ffffff;
            /* White background for content */
            margin: 5% auto;
            /* Align it vertically */
            padding: 30px;
            border: 1px solid #ccc;
            width: 80%;
            /* Adjust width */
            max-width: 600px;
            /* Optional max width */
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
            /* Softer shadow for depth */
            border-radius: 10px;
            /* Rounded corners for a modern look */
            animation: fadeIn 0.5s;
            /* Fade-in animation for the modal */
        }

        /* Modal fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Close button */
        .close {
            color: #ff6b6b;
            /* Red color for emphasis */
            float: right;
            font-size: 30px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #c0392b;
            /* Darker red on hover for better interaction */
            cursor: pointer;
        }

        /* Style the form fields */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            /* Add space between form elements */
        }

        form input,
        form select,
        form textarea {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ced4da;
            /* Lighter border */
            border-radius: 5px;
            transition: border-color 0.3s;
            /* Smooth transition for focus */
        }

        form input:focus,
        form select:focus,
        form textarea:focus {
            border-color: #80bdff;
            /* Blue border on focus */
            outline: none;
            /* Remove default outline */
        }

        form label {
            margin-bottom: 5px;
            font-weight: 600;
            /* Semi-bold labels for emphasis */
        }

        /* Checkbox styling */
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping if necessary */
            gap: 15px;
            /* Space between checkboxes */
        }

        form .form-check {
            display: flex;
            align-items: center;
        }

        /* Submit button */
        form .submit-btn {
            background-color: #28a745;
            /* Green button */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            /* Smooth transition on hover */
        }

        form .submit-btn:hover {
            background-color: #218838;
            /* Darker green on hover */
        }

        /* Responsive design adjustments */
        @media (max-width: 768px) {
            .modal-content {
                width: 90%;
                /* Use more width on smaller screens */
            }

            form {
                gap: 10px;
                /* Reduce gap on smaller screens */
            }
        }
    </style>

    <!-- The Popup Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>Welcome! Please fill out this form:</h2>

            <form id="weddingPlanningForm" class="mt-4">
                <?php echo csrf_field(); ?> <!-- CSRF Token for AJAX -->

                <!-- First Row: Name and Email -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <!-- Second Row: Getting Married and Wedding Date -->
                <div class="form-group">
                    <label for="getting_married">Getting Married</label>
                    <input type="text" class="form-control" id="getting_married" name="getting_married">
                </div>

                <div class="form-group">
                    <label for="wedding_date">Wedding Date</label>
                    <input type="date" class="form-control" id="wedding_date" name="wedding_date">
                </div>

                <!-- Third Row: Number of Guests and Estimated Budget -->
                <div class="form-group">
                    <label for="number_of_guests">Number of Guests</label>
                    <input type="number" class="form-control" id="number_of_guests" name="number_of_guests">
                </div>

                <div class="form-group">
                    <label for="estimated_budget">Estimated Budget</label>
                    <input type="number" class="form-control" id="estimated_budget" name="estimated_budget">
                </div>

                <!-- Fourth Row: City/Town -->
                <div class="form-group">
                    <label for="city_town">City/Town</label>
                    <input type="text" class="form-control" id="city_town" name="city_town">
                </div>

                <!-- Wedding Vendors Needed -->
                <div class="form-group">
                    <label class="col-form-label">Which wedding vendors do you still need?</label>
                    <div class="checkbox-group">
                        <?php $__currentLoopData = ['Venue', 'Catering', 'Photography', 'Band', 'Invitations', 'Favors & Gifts', 'Flowers', 'Dress & Attire', 'Travel', 'Transportation', 'Lighting & Decor', 'Planning', 'Wedding Cake', 'Videography']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="vendors[]" value="<?php echo e($vendor); ?>" id="vendor_<?php echo e(strtolower(str_replace(' ', '_', $vendor))); ?>">
                            <label class="form-check-label" for="vendor_<?php echo e(strtolower(str_replace(' ', '_', $vendor))); ?>"><?php echo e($vendor); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <input type="submit" class="submit-btn" value="Submit">
            </form>

        </div>
    </div>
    <style>
        /* Global Styling */
       

        h1, h2 {
            color: #333;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 60%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .modal-content h2 {
            margin-bottom: 20px;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: #aaa;
        }

        .close:hover {
            color: #333;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        button[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }

        /* Vendor Section */
        .vendor-section {
            display: flex;
            align-items: center;
            margin: 20px 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .vendor-section img {
            margin-right: 15px;
            width: 60px;
            height: 60px;
        }

        .vendor-section a {
            font-size: 18px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .vendor-section a:hover {
            color: #0056b3;
        }

        .vendor-description {
            font-size: 14px;
            color: #555;
        }

    </style>
    <div id="vendorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Welcome! Let's start with your vendors.</h1>
        <p>Choose a category</p>
        <a href="https://example.com/explore-more-vendors" target="_blank">Explore more vendors</a>

        <div class="vendor-section">
            <img src="https://via.placeholder.com/56" alt="Banquet Hall">
            <div>
                <a href="https://example.com/wedding-venues" target="_blank">Wedding Venues</a>
                <p class="vendor-description">Explore and tour top-rated reception venues to book a special space to celebrate your love.</p>
            </div>
        </div>

        <div class="vendor-section">
            <img src="https://via.placeholder.com/56" alt="Catering">
            <div>
                <a href="https://example.com/catering" target="_blank">Catering</a>
                <p class="vendor-description">Find experienced chefs, bartenders, and caterers to craft the ultimate menu to remember.</p>
            </div>
        </div>

        <div class="vendor-section">
            <img src="https://via.placeholder.com/56" alt="Photography">
            <div>
                <a href="https://example.com/photography" target="_blank">Photography</a>
                <p class="vendor-description">Browse local photographers and their work to find one who’ll capture the essence of your day.</p>
            </div>
        </div>

        <div class="vendor-section">
            <img src="https://via.placeholder.com/56" alt="Bands">
            <div>
                <a href="https://example.com/bands" target="_blank">Bands</a>
                <p class="vendor-description">From oldies to soul, discover live wedding bands that play all styles of music.</p>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var vendorModal = document.getElementById("vendorModal");
        vendorModal.style.display = "none";
        var closeButtons = document.getElementsByClassName("close");

        Array.from(closeButtons).forEach(function(closeButton) {
        closeButton.onclick = function() {
            this.parentElement.parentElement.style.display = "none";
        };
    });
        
        $(document).ready(function() {
            $('#weddingPlanningForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Collect form data
                var formData = $(this).serialize();

                // Send the AJAX request
                $.ajax({
                    url: "<?php echo e(route('wedding_planning.store')); ?>",
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Wedding planning entry created successfully.'); // Handle success
                        $('#myModal').hide(); // Close modal if needed
                        // Optionally, reset the form
                        $('#weddingPlanningForm')[0].reset();
                        vendorModal.style.display = "flex";

                    },
                    error: function(xhr) {
                        // Handle errors
                        var errors = xhr.responseJSON.errors;
                        var errorMessages = '';
                        $.each(errors, function(key, value) {
                            errorMessages += value[0] + "\n"; // Collect error messages
                        });
                        alert('Errors:\n' + errorMessages); // Show errors                       
                        //vendorModal.style.display = "flex";
                    }
                });
            });
        });
    </script>

    <script>
        // Get the modal element
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        //var span = document.getElementsByClassName("close")[0];

        // Show the modal when the page loads
        window.onload = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }
    </script>


=======
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3
</div>

<?php $__env->startPush('scripts'); ?>

<<<<<<< HEAD

<script>
    function TJPlQeqplTFcTQC() {
        return {

            isHeadlineEditing: false,
            isAddSkill: false,
            isAddLanguage: false,
            isDescriptionEditing: false,

            // Edit headline
            toggleEditingHeadline() {
                this.isHeadlineEditing = !this.isHeadlineEditing;

                if (this.isHeadlineEditing) {
                    this.$nextTick(() => {
                        this.$refs.edit_headline.focus();
                    });
                }
            },

            // Disable headline editing
            disableEditing() {
                this.isHeadlineEditing = false;
            },

            // Avatar changed
            avatar(event) {
                var output = document.getElementById('profile-avatar-preview');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            },

            // Init
            initialize() {

                // Headline updated
                window.addEventListener('profile-headline-updated', () => {
                    this.disableEditing();
                });

                // Edit skill form
                window.addEventListener('open-skills-edit-form', () => {
                    this.isAddSkill = true;
                });

                // Close edit skill form
                window.addEventListener('close-edit-skill-form', () => {
                    this.isAddSkill = false;
                });

                // Edit language form
                window.addEventListener('open-languages-edit-form', () => {
                    this.isAddLanguage = true;
                });

                // Close edit language form
                window.addEventListener('close-edit-language-form', () => {
                    this.isAddLanguage = false;
                });

                // Close description edit form
                window.addEventListener('close-description-edit-form', () => {
                    this.isDescriptionEditing = false;
                });

            }

        }
    }
    window.TJPlQeqplTFcTQC = TJPlQeqplTFcTQC();
</script>
=======
    
    <script>
        function TJPlQeqplTFcTQC() {
            return {

                isHeadlineEditing   : false,
                isAddSkill          : false,
                isAddLanguage       : false,
                isDescriptionEditing: false,

                // Edit headline
                toggleEditingHeadline() {
                    this.isHeadlineEditing = !this.isHeadlineEditing;

                    if (this.isHeadlineEditing) {
                        this.$nextTick(() => {
                            this.$refs.edit_headline.focus();
                        });
                    }
                },
                
                // Disable headline editing
                disableEditing() {
                    this.isHeadlineEditing = false;
                },

                // Avatar changed
                avatar(event) {
                    var output    = document.getElementById('profile-avatar-preview');
                    output.src    = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                        URL.revokeObjectURL(output.src) // free memory
                    }
                },

                // Init
                initialize() {

                    // Headline updated
                    window.addEventListener('profile-headline-updated',() => {
                        this.disableEditing();
                    });

                    // Edit skill form
                    window.addEventListener('open-skills-edit-form',() => {
                        this.isAddSkill = true;
                    });

                    // Close edit skill form
                    window.addEventListener('close-edit-skill-form',() => {
                        this.isAddSkill = false;
                    });

                    // Edit language form
                    window.addEventListener('open-languages-edit-form',() => {
                        this.isAddLanguage = true;
                    });

                    // Close edit language form
                    window.addEventListener('close-edit-language-form',() => {
                        this.isAddLanguage = false;
                    });

                    // Close description edit form
                    window.addEventListener('close-description-edit-form',() => {
                        this.isDescriptionEditing = false;
                    });

                }

            }
        }
        window.TJPlQeqplTFcTQC = TJPlQeqplTFcTQC();
    </script>
>>>>>>> dbc6c2e5da09640f606f176e24f6aac468749da3

<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/profile/profile.blade.php ENDPATH**/ ?>