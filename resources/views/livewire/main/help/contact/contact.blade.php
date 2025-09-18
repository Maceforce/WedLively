<div class="w-full mt-4">

    <div class="mb-4 bg-white dark:bg-zinc-800 shadow shadow-gray-100 border border-gray-200 dark:border-zinc-700 dark:shadow-none mx-auto">
        
        {{-- Section title --}}
        <div class="bg-white px-8 pt-4">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                <div class="ltr:ml-4 rtl:mr-4 mt-4">
                <h3 class="text-lg leading-6 font-semibold text-red-400 tracking-wide mb-2">{{ __('messages.t_contact_us') }}</h3>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">{{ __('messages.t_contact_us_subtitle') }}</p>
                </div>
            </div>
        </div>

        {{-- Section content --}}
        <div class="px-8 py-6">
            <div class="grid grid-cols-12 gap-3">

                {{-- Fullname --}}
                <div class="col-span-6">
                    <x-forms.text-input 
                        :label="__('messages.t_name')"
                        :placeholder="__('messages.t_enter_your_fullname')"
                        icon="account"
                        model="name" />
                </div>

                {{-- Email address --}}
                <div class="col-span-6">
                    <x-forms.text-input 
                        :label="__('messages.t_email_address')"
                        :placeholder="__('messages.t_enter_email_address')"
                        icon="at"
                        model="email"
                        type="email" />
                </div>

                {{-- Subject --}}
                <div class="col-span-12">
                    <x-forms.text-input 
                        :label="__('messages.t_subject')"
                        :placeholder="__('messages.t_enter_message_subject')"
                        icon="format-text"
                        model="subject" />
                </div>

                {{-- Message --}}
                <div class="col-span-12">
                    <x-forms.textarea 
                        :label="__('messages.t_message')"
                        :placeholder="__('messages.t_descibe_ur_message_in_details')"
                        icon="file"
                        model="message" />
                </div>

                {{-- Submit --}}
                <div class="col-span-12 ml-auto mt-2">
                    <div class="max-w-20">
                        <x-forms.button action="contact" :text="__('messages.t_lets_talk')" :block="true" />
                    </div>
                </div>

            </div>
        </div>

        {{-- Footer --}}
        <div class="px-4 py-6 bg-gray-50 dark:bg-zinc-700 border-t border-gray-200 dark:border-zinc-700 sm:px-10 text-center">
            <p class="text-xs leading-5 text-gray-500 dark:text-gray-300">
                {!! __('messages.t_by_continue_agree_terms_privacy', [
                    'privacy_link' => settings('footer')->privacy ? url('page', settings('footer')->privacy->slug) : "#",
                    'privacy_text' => settings('footer')->privacy ? settings('footer')->privacy->title : __('messages.t_privacy_policy'),
                    'terms_link'   => settings('footer')->terms ? url('page', settings('footer')->terms->slug) : "#",
                    'terms_text'   => settings('footer')->terms ? settings('footer')->terms->title : __('messages.t_terms_of_service'),
                ]) !!}
            </p>
        </div>

    </div>
</div>