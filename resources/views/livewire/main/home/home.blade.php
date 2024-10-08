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

        {{-- Fatured categories --}}
        @if (settings('appearance')->is_featured_categories && $categories && $categories->count())
            <div class="col-span-12 mt-6 xl:mt-6 mb-16">
                <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block">{{ __('messages.t_featured_categories') }}</span>
                <div class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="featured-categories-slick" wire:ignore>

                    @foreach ($categories as $category)
                    <a href="{{ url('categories', $category->slug) }}" class="relative !h-44 rounded-lg !p-6 !flex !flex-col overflow-hidden group mx-5">
                        <span aria-hidden="true" class="absolute inset-0">
                            <img src="{{ placeholder_img() }}" data-src="{{ src($category->image) }}" alt="{{ $category->name }}" class="lazy w-full h-full object-center object-cover opacity-70 group-hover:opacity-100">
                        </span>
                        <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-90"></span>
                        <span class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name }}</span>
                    </a>
                    @endforeach
                            
                </div>
            </div>
        @endif

        {{-- Bestsellers --}}
        @if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
            
        @endif

        {{-- Random gigs --}}
        @if ($gigs && !$gigs->isEmpty())
            <div class="col-span-12 mb-16">

                {{-- Section title --}}
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block">
                                @lang('messages.t_selected_gigs_for_u')    
                            </span>
                        </div>

                        <div>
                            <a href="{{ url('search') }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                    @foreach ($gigs as $gig)
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $gig->uid))
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- List of categories in home --}}
        @foreach ($categories as $category)
            @if ($category->gigs()->active()->count())
                
                {{-- Section title --}}
                <div class="col-span-12">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">{{ $category->name }}</span>
                        </div>

                        <div>
                            <a href="{{ url('categories', $category->slug) }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- List of gigs --}}
                <div class="col-span-12 mb-16">
                    <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                        @foreach ($category->gigs()->active()->inRandomOrder()->take(4)->get() as $gig)
                            <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 xl:col-span-3">
                                @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $category->id . '-' . $gig->uid))
                            </div>
                        @endforeach
                    </div>
                </div>

            @endif
        @endforeach

        {{-- Latest projects --}}
        @if (settings('projects')->is_enabled && !is_null($projects) && !$projects->isEmpty())
            <div class="col-span-12 mb-16">
            
                {{-- Section title --}}
                <div class="block mb-6">
                    <div class="flex justify-between items-center bg-transparent py-2">

                        <div>
                            <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">
                                @lang('messages.t_latest_projects')    
                            </span>
                        </div>

                        <div>
                            <a href="{{ url('explore/projects') }}" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                {{ __('messages.t_view_more') }}
                                
                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>

                                {{-- RTL arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Projects --}}
                <div class="space-y-6">
                    @foreach ($projects as $project)

                        @livewire('main.cards.project', [ 'id' => $project->uid ], key('project-card-id-' . $project->uid))
                        
                    @endforeach
                </div>

            </div>
        @endif

        {{-- Newsletter --}}
        @if (settings('newsletter')->is_enabled)
            <div class="col-span-12">
                <div class="bg-gray-100 dark:bg-zinc-800 rounded-md p-6 flex items-center sm:p-10">
                    <div class="max-w-lg mx-auto">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">{{ __('messages.t_sign_up_for_newsletter') }}</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">{{__('messages.t_sign_up_for_newsletter_subtitle')}}</p>
                        <div class="mt-4 sm:mt-6 sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input wire:model.defer="email" id="email-address" type="text" autocomplete="email" required="" placeholder="{{ __('messages.t_enter_email_address') }}" class="h-14 appearance-none min-w-0 w-full bg-white dark:bg-zinc-700 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm py-2 px-4 text-sm text-gray-900 dark:text-gray-300 placeholder-gray-500 focus:outline-none focus:border-primary-600 focus:ring-1 focus:ring-primary-600" readonly onfocus="this.removeAttribute('readonly');">
                            <div class="mt-3 sm:flex-shrink-0 sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4">
                                <button wire:click="newsletter" wire:loading.attr="disabled" wire:target="newsletter" type="button" class="dark:disabled:bg-zinc-500 dark:disabled:text-zinc-400 disabled:cursor-not-allowed disabled:!bg-gray-400 disabled:text-gray-500 h-14 w-full bg-primary-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-sm font-bold tracking-wider text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600">
                                    {{ __('messages.t_signup') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>

@push('scripts')

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories && $categories && $categories->count())
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
    @endif

    {{-- Bestsellers --}}
    @if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
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
    @endif
    
@endpush

@push('styles')

    {{-- Slick Plugin --}}
    @if (settings('appearance')->is_featured_categories)
        <link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';"/>
    @endif
        
@endpush
