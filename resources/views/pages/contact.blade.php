<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100"
                height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>


    @php
        if (!session()->has('user_id')) {
            header("Location: " . url(route('login')));
            exit;
        }
    @endphp

    <div class="container">
        <h1>{{ __('contact.contact_title') }}</h1>
        <p>{{ __('contact.contact_info') }}</p>

        <form action="/contact" method="POST">
            @csrf
            <div>
                <label for="name">{{ __('contact.your_name') }}</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="email">{{ __('contact.your_email') }}</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="message">{{ __('contact.message') }}</label>
                <textarea name="message" id="message" rows="4" required></textarea>
            </div>
            <div class="contactButton">
                <button type="submit">{{ __('contact.send_message') }}</button>
            </div>
        </form>

    </div>
</x-layouts.app>