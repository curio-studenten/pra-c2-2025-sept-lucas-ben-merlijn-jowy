<x-layouts.app>
    <div class="container">
        <h1>Registreren</h1>
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
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name" placeholder="Naam" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Herhaal wachtwoord:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Herhaal wachtwoord" required>
            </div>
            <div class="contactButton">
                <button type="submit">Registreren</button>
            </div>
        </form>
    </div>
</x-layouts.app>