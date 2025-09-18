<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(config()->get('direction')); ?>">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php echo SEO::generate(); ?>


        
        <link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        
        <?php echo \Livewire\Livewire::styles(); ?>


        
        <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('public/css/custom.css')); ?>" rel="stylesheet">

        
		<?php echo settings('appearance')->font_link; ?>


		
        <style>
            :root {
                --color-primary  : <?php echo e(settings('appearance')->colors['primary']); ?>;
                --color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0]); ?>;
                --color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1]); ?>%;
                --color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2]); ?>%;
            }
            html {
                font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
            }
        </style>

        
        <?php echo $__env->yieldPushContent('styles'); ?>

        
        <script>
            __var_app_url        = "<?php echo e(url('/')); ?>";
            __var_app_locale     = "<?php echo e(app()->getLocale()); ?>";
            __var_rtl            = <?php echo \Illuminate\Support\Js::from(config()->get('direction') === 'ltr' ? false : true)->toHtml() ?>;
            __var_primary_color  = "<?php echo e(settings('appearance')->colors['primary']); ?>";
            __var_axios_base_url = "<?php echo e(url('/')); ?>/";
            __var_currency_code  = "<?php echo e(settings('currency')->code); ?>";
        </script>

        
        <?php if(settings('appearance')->custom_code_head_main_layout): ?>
            <?php echo settings('appearance')->custom_code_head_main_layout; ?>

        <?php endif; ?>

    </head>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.header')->html();
} elseif ($_instance->childHasBeenRendered('AykdxD7')) {
    $componentId = $_instance->getRenderedChildComponentId('AykdxD7');
    $componentTag = $_instance->getRenderedChildComponentTagName('AykdxD7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AykdxD7');
} else {
    $response = \Livewire\Livewire::mount('main.includes.header');
    $html = $response->html();
    $_instance->logRenderedChild('AykdxD7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden <?php echo e(app()->getLocale() === 'ar' ? 'application-ar' : ''); ?>">

        
        <?php if (isset($component)) { $__componentOriginal92d1a160a4445015711a1d3715ec46524d39b3ba = $component; } ?>
<?php $component = WireUi\View\Components\Notifications::resolve(['position' => 'top-center','zIndex' => 'z-[60]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Notifications::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92d1a160a4445015711a1d3715ec46524d39b3ba)): ?>
<?php $component = $__componentOriginal92d1a160a4445015711a1d3715ec46524d39b3ba; ?>
<?php unset($__componentOriginal92d1a160a4445015711a1d3715ec46524d39b3ba); ?>
<?php endif; ?>

        
        <div class="flex-grow">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 min-h-screen">
                <div class="w-full lg:px-0 my-4">
            <div class="relative px-3 py-3 lg:py-16 lg:px-16 bg-white dark:bg-zinc-800 overflow-hidden shadow-sm border border-gray-100 dark:border-zinc-700">
                        <!-- <div class="auth-left-imag">
                            <img src="<?php echo e(url('public/img/home/authimage.jpg')); ?>" class="p-4 bg-white">  
                        </div> -->
                        <main class="flex flex-col items-center dark:bg-navy-700 lg:max-w-lg">            
                            <?php echo $__env->yieldContent('content'); ?>
                        </main>
                    </div>
                </div>
            </div>
        </div>

        
        <?php echo \Livewire\Livewire::scripts(); ?>


        
        <script >window.Wireui = {hook(hook, callback) {window.addEventListener(`wireui:${hook}`, () => callback())},dispatchHook(hook) {window.dispatchEvent(new Event(`wireui:${hook}`))}}</script>
<script src="http://localhost/WedLively/wireui/assets/scripts?id=be97ebae74d62aa4c86689a6528b707f" defer ></script>

        
        <script defer src="<?php echo e(mix('js/app.js')); ?>"></script>

        
        <script src="<?php echo e(url('public/js/utils.js')); ?>"></script>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

        
        <?php if(settings('appearance')->custom_code_footer_main_layout): ?>
            <?php echo settings('appearance')->custom_code_footer_main_layout; ?>

        <?php endif; ?>

    </body>
	    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.footer')->html();
} elseif ($_instance->childHasBeenRendered('llQqAQA')) {
    $componentId = $_instance->getRenderedChildComponentId('llQqAQA');
    $componentTag = $_instance->getRenderedChildComponentTagName('llQqAQA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('llQqAQA');
} else {
    $response = \Livewire\Livewire::mount('main.includes.footer');
    $html = $response->html();
    $_instance->logRenderedChild('llQqAQA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<style>.disabled\:text-zinc-500:disabled{color: #FFF !important}</style>
</html><?php /**PATH C:\xampp\htdocs\WedLively\resources\views/livewire/main/auth/layout/auth.blade.php ENDPATH**/ ?>