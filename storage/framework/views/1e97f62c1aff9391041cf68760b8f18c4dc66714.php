<div class="w-full">
        
    
    <div class="grid grid-cols-12 gap-6">
        



<style>
._sda9893 {
    width: 625px;
    height: 350px;
    border-radius: 17px;
    box-shadow: 0 8px 20px 0 rgb(20 20 43 / 31%) !important;
}
@media only screen and (max-width: 600px) {
    ._sda9893 {
        width: 95%;
        height: 185px;
        border-radius: 17px;
        box-shadow: 0 8px 20px 0 rgb(20 20 43 / 31%) !important;
    }
}
</style>

        
        <?php if(settings('appearance')->is_featured_categories && $categories && $categories->count()): ?>
            <div class="col-span-12 mt-6 xl:mt-6 mb-16">
                <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block"><?php echo e(__('messages.t_featured_categories')); ?></span>
                <div class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="featured-categories-slick" wire:ignore>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('categories', $category->slug)); ?>" class="relative !h-44 rounded-lg !p-6 !flex !flex-col overflow-hidden group mx-5">
                        <span aria-hidden="true" class="absolute inset-0">
                            <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($category->image)); ?>" alt="<?php echo e($category->name); ?>" class="lazy w-full h-full object-center object-cover opacity-70 group-hover:opacity-100">
                        </span>
                        <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-90"></span>
                        <span class="relative mt-auto text-center text-xl font-bold text-white"><?php echo e($category->name); ?></span>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                </div>
            </div>
        <?php endif; ?>

        
        <?php if(settings('appearance')->is_best_sellers && $sellers && $sellers->count()): ?>
            
        <?php endif; ?>

        
        <?php if($gigs && !$gigs->isEmpty()): ?>
            <div class="col-span-12 mb-16">

                
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block">
                                <?php echo app('translator')->get('messages.t_selected_gigs_for_u'); ?>    
                            </span>
                        </div>

                        <div>
                            <a href="<?php echo e(url('search')); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                <?php echo e(__('messages.t_view_more')); ?>

                                
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                    <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.cards.gig', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('gig-item-' . $gig->uid)) {
    $componentId = $_instance->getRenderedChildComponentId('gig-item-' . $gig->uid);
    $componentTag = $_instance->getRenderedChildComponentTagName('gig-item-' . $gig->uid);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gig-item-' . $gig->uid);
} else {
    $response = \Livewire\Livewire::mount('main.cards.gig', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('gig-item-' . $gig->uid, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

        
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($category->gigs()->active()->count()): ?>
                
                
                <div class="col-span-12">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider"><?php echo e($category->name); ?></span>
                        </div>

                        <div>
                            <a href="<?php echo e(url('categories', $category->slug)); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                <?php echo e(__('messages.t_view_more')); ?>

                                
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                
                <div class="col-span-12 mb-16">
                    <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                        <?php $__currentLoopData = $category->gigs()->active()->inRandomOrder()->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 xl:col-span-3">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.cards.gig', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('gig-item-' . $category->id . '-' . $gig->uid)) {
    $componentId = $_instance->getRenderedChildComponentId('gig-item-' . $category->id . '-' . $gig->uid);
    $componentTag = $_instance->getRenderedChildComponentTagName('gig-item-' . $category->id . '-' . $gig->uid);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gig-item-' . $category->id . '-' . $gig->uid);
} else {
    $response = \Livewire\Livewire::mount('main.cards.gig', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('gig-item-' . $category->id . '-' . $gig->uid, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if(settings('projects')->is_enabled && !is_null($projects) && !$projects->isEmpty()): ?>
            <div class="col-span-12 mb-16">
            
                
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">
                                <?php echo app('translator')->get('messages.t_latest_projects'); ?>    
                            </span>
                        </div>

                        <div>
                            <a href="<?php echo e(url('explore/projects')); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                <?php echo e(__('messages.t_view_more')); ?>

                                
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                
                <div class="space-y-6">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.cards.project', [ 'id' => $project->uid ])->html();
} elseif ($_instance->childHasBeenRendered('project-card-id-' . $project->uid)) {
    $componentId = $_instance->getRenderedChildComponentId('project-card-id-' . $project->uid);
    $componentTag = $_instance->getRenderedChildComponentTagName('project-card-id-' . $project->uid);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('project-card-id-' . $project->uid);
} else {
    $response = \Livewire\Livewire::mount('main.cards.project', [ 'id' => $project->uid ]);
    $html = $response->html();
    $_instance->logRenderedChild('project-card-id-' . $project->uid, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        <?php endif; ?>

        
        <?php if(settings('newsletter')->is_enabled): ?>
            <div class="col-span-12">
                <div class="bg-gray-100 dark:bg-zinc-800 rounded-md p-6 flex items-center sm:p-10">
                    <div class="max-w-lg mx-auto">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_sign_up_for_newsletter')); ?></h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_sign_up_for_newsletter_subtitle')); ?></p>
                        <div class="mt-4 sm:mt-6 sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input wire:model.defer="email" id="email-address" type="text" autocomplete="email" required="" placeholder="<?php echo e(__('messages.t_enter_email_address')); ?>" class="h-14 appearance-none min-w-0 w-full bg-white dark:bg-zinc-700 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm py-2 px-4 text-sm text-gray-900 dark:text-gray-300 placeholder-gray-500 focus:outline-none focus:border-primary-600 focus:ring-1 focus:ring-primary-600" readonly onfocus="this.removeAttribute('readonly');">
                            <div class="mt-3 sm:flex-shrink-0 sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4">
                                <button wire:click="newsletter" wire:loading.attr="disabled" wire:target="newsletter" type="button" class="dark:disabled:bg-zinc-500 dark:disabled:text-zinc-400 disabled:cursor-not-allowed disabled:!bg-gray-400 disabled:text-gray-500 h-14 w-full bg-primary-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-sm font-bold tracking-wider text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600">
                                    <?php echo e(__('messages.t_signup')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php $__env->startPush('scripts'); ?>

    
    <?php if(settings('appearance')->is_featured_categories && $categories && $categories->count()): ?>
        <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#featured-categories-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 6,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#featured-categories-slick').removeClass('hidden');
            });
        </script>
    <?php endif; ?>

    
    <?php if(settings('appearance')->is_best_sellers && $sellers && $sellers->count()): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#top-sellers-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 5,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#top-sellers-slick').removeClass('hidden');
            });
        </script>
    <?php endif; ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>

    
    <?php if(settings('appearance')->is_featured_categories): ?>
        <link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';"/>
    <?php endif; ?>
        
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/home/home.blade.php ENDPATH**/ ?>