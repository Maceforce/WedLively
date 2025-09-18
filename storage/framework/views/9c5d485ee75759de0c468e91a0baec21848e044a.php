<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(config()->get('direction')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dark' => current_theme() === 'dark']) ?>">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php echo SEO::generate(); ?>

        <?php echo JsonLd::generate(); ?>


        
		<?php echo settings('appearance')->font_link; ?>


        
        <link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

        
		<?php if(settings('hero')->enable_bg_img): ?>

            
            <?php if(settings('hero')->background_small): ?>
                <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_small)); ?>" type="image/webp" />
            <?php endif; ?>

            
            <?php if(settings('hero')->background_medium): ?>
                <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_medium)); ?>" type="image/webp" />
            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
                <link rel="preload prefetch" as="image" href="<?php echo e(src(settings('hero')->background_large)); ?>" type="image/webp" />
            <?php endif; ?>

        <?php endif; ?>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        
        <?php echo \Livewire\Livewire::styles(); ?>


        
        <link rel="preload" href="<?php echo e(mix('css/app.css')); ?>" as="style">
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('public/css/custom.css')); ?>">

        
        <link rel="preload" href="<?php echo e(livewire_asset_path()); ?>" as="script">
	

		
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
            .home-hero-section {
                background-color: <?php echo e(settings('hero')->bg_color); ?>;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: <?php echo e(settings('hero')->bg_large_height); ?>px;
            }
            
            
            <?php if(settings('hero')->enable_bg_img): ?>
                
                
                <?php if(settings('hero')->background_small): ?>
                
                    @media only screen and (max-width: 600px) {
                        .home-hero-section {
                            background-image: url('<?php echo e(src(settings('hero')->background_small)); ?>');
                            height: <?php echo e(settings('hero')->bg_small_height); ?>px;
                        }
                    }

                <?php endif; ?>

                
                <?php if(settings('hero')->background_medium): ?>
                
                    @media only screen and (min-width: 600px) {
                        .home-hero-section {
                            background-image: url('<?php echo e(src(settings('hero')->background_medium)); ?>')
                        }
                    }

                <?php endif; ?>

                
                <?php if(settings('hero')->background_large): ?>
                
                    @media only screen and (min-width: 768px) {
                        .home-hero-section {
                            background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                        }
                    }

                <?php endif; ?>

                
                <?php if(settings('hero')->background_large): ?>
                
                    @media only screen and (min-width: 992px) {
                        .home-hero-section {
                            background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                        }
                    }

                <?php endif; ?>

                
                <?php if(settings('hero')->background_large): ?>
                
                    @media only screen and (min-width: 1200px) {
                        .home-hero-section {
                            background-image: url('<?php echo e(src(settings('hero')->background_large)); ?>');
                        }
                    }

                <?php endif; ?>

            <?php endif; ?>
            
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

        
        <?php if(advertisements('header_code')): ?>
            <?php echo advertisements('header_code'); ?>

        <?php endif; ?>

        
        <?php if(settings('appearance')->custom_code_head_main_layout): ?>
            <?php echo settings('appearance')->custom_code_head_main_layout; ?>

        <?php endif; ?>
	<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>-->
    </head>

    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll <?php echo e(app()->getLocale() === 'ar' ? 'application-ar' : ''); ?>" style="overflow-y: scroll">

        
        <?php if (isset($component)) { $__componentOriginal92d1a160a4445015711a1d3715ec46524d39b3ba = $component; } ?>
<?php $component = WireUi\View\Components\Notifications::resolve(['position' => 'top-center','zIndex' => 'z-[65]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

        
        <?php if (isset($component)) { $__componentOriginale493c5d5924168c8fa93ba20d3735dcd8704830c = $component; } ?>
<?php $component = WireUi\View\Components\Dialog::resolve(['zIndex' => 'z-[65]','blur' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dialog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Dialog::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale493c5d5924168c8fa93ba20d3735dcd8704830c)): ?>
<?php $component = $__componentOriginale493c5d5924168c8fa93ba20d3735dcd8704830c; ?>
<?php unset($__componentOriginale493c5d5924168c8fa93ba20d3735dcd8704830c); ?>
<?php endif; ?>

		
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.header')->html();
} elseif ($_instance->childHasBeenRendered('rnss1c1')) {
    $componentId = $_instance->getRenderedChildComponentId('rnss1c1');
    $componentTag = $_instance->getRenderedChildComponentTagName('rnss1c1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rnss1c1');
} else {
    $response = \Livewire\Livewire::mount('main.includes.header');
    $html = $response->html();
    $_instance->logRenderedChild('rnss1c1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        
   

        
        <main class="flex-grow"> 
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 min-h-screen">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>

        
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.footer')->html();
} elseif ($_instance->childHasBeenRendered('vuFEyOC')) {
    $componentId = $_instance->getRenderedChildComponentId('vuFEyOC');
    $componentTag = $_instance->getRenderedChildComponentTagName('vuFEyOC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vuFEyOC');
} else {
    $response = \Livewire\Livewire::mount('main.includes.footer');
    $html = $response->html();
    $_instance->logRenderedChild('vuFEyOC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        
        <?php echo \Livewire\Livewire::scripts(); ?>


        
        <script >window.Wireui = {hook(hook, callback) {window.addEventListener(`wireui:${hook}`, () => callback())},dispatchHook(hook) {window.dispatchEvent(new Event(`wireui:${hook}`))}}</script>
<script src="http://localhost/WedLively/wireui/assets/scripts?id=be97ebae74d62aa4c86689a6528b707f" defer ></script>

        
        <script defer src="<?php echo e(mix('js/app.js')); ?>"></script>

        
        <script defer src="<?php echo e(url('public/js/utils.js?v=1.3.1')); ?>"></script>
        <script src="<?php echo e(url('public/js/components.js?v=1.3.1')); ?>"></script>

        
        <script defer>
            
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
            
        </script>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

        
        <?php if(settings('appearance')->custom_code_footer_main_layout): ?>
            <?php echo settings('appearance')->custom_code_footer_main_layout; ?>

        <?php endif; ?>

    </body>

</html><?php /**PATH C:\xampp\htdocs\WedLively\resources\views/livewire/main/layout/app.blade.php ENDPATH**/ ?>