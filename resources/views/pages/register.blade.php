<x-layouts.app>
    <div class="container">
        <h1>{{ __('login.register') }}</h1>
        <form action="/register" method="POST">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="name">{{ __('login.name') }}</label>
                <input type="text" name="name" id="name" placeholder={{ __('login.name') }} value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">{{ __('login.email') }}</label>
                <input type="email" name="email" id="email" placeholder={{ __('login.email') }} value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">{{ __('login.password') }}</label>
                <input type="password" name="password" id="password" placeholder={{ __('login.password') }} required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">{{ __('login.password_confirm') }}</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder={{ __('login.password_confirm') }} required>
            </div>
            <div class="contactButton">
                <button type="submit">{{ __('login.register') }}</button>
            </div>
        </form>
    </div>
</x-layouts.app>