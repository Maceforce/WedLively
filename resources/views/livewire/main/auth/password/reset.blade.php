<div class="flex-grow">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 min-h-screen">
            <div class="w-full lg:px-0 my-4">
                <div class="relative px-3 py-3 lg:py-16 lg:px-16 bg-white dark:bg-zinc-800 overflow-hidden shadow-sm border border-gray-100 dark:border-zinc-700">
                        <main class="flex flex-col items-center dark:bg-navy-700 lg:max-w-lg"> 
                            <div class="flex w-full max-w-md grow flex-col justify-center px-12 py-14 login-form shadow-md border border-gray-100 dark:border-zinc-700">
                                {{-- Session error message --}}
                                @if (session()->has('error'))
                                    <div class="mb-6 sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                                        <div class="rounded-md bg-red-100 p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-red-400" x-description="Heroicon name: solid/x-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <p class="text-sm font-medium text-red-800">{{ session()->get('error') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="dark:bg-zinc-800 sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                                            {{-- Section title --}}
                                            <div class="mb-6 text-center">
                                                <h1 class="text-2xl font-bold text-gray-800 capitalize mb-2">
                                                {{ __('messages.t_reset_ur_password') }}
                                                </h1>
                                
                                                <p class="text-sm font-normal text-gray-400 dark:text-gray-300">
                                                    {{ __('messages.t_reset_ur_password_subtitle') }}
                                                </p>
                                            </div>

                                            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                                                {{-- E-mail address --}}
                                                <div class="col-span-12">
                                                    <x-forms.text-input
                                                        :label="__('messages.t_email_address')"
                                                        :placeholder="__('messages.t_enter_email_address')"
                                                        model="email"
                                                        type="email"
                                                        icon="at"
                                                        class="rounded-none	" />
                                                </div>

                                                {{-- Send --}}
                                                <div class="col-span-12">
                                                    <x-forms.button class="duration-300 hover:underline" action="send" :text="__('messages.t_reset_password')" :block="true" />
                                                </div>

                                            </div>

                                    {{-- Footer --}}
                                        <a href="{{ url('auth/login') }}" class="w-full mt-4 text-sm leading-5 text-white flex items-center justify-center font-reselu inline-flex items-center justify-center rounded-sm border border-red-400 bg-red-400 p-3 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                                            <span class="font-medium">{{ __('messages.t_back_to_sign_in') }}</span>
                                        </a>

                                    

                                </div>
                            </div>
                        </main>
                </div>
            </div>
    </div>
</div>