<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header mr-auto">
            <a class="navbar-brand" href="/" title="{{ __('misc.home_alt') }}">{{ __('misc.homepage_title') }}</a>
            <a class="navbar-brand" href="/contact" title="{{ __('misc.contact_alt') }}">{{ __('contact.contact') }}</a>
        </div>
        <div id="navbar" class="form-inline">

            <script>
                (function() {
                    var cx = 'partner-pub-6236044096491918:8149652050';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <gcse:searchbox-only></gcse:searchbox-only>

            <div class="ml-3">
                <a href="{{ route('language.change', 'nl') }}" class="btn btn-sm btn-outline-light">NL</a>
                <a href="{{ route('language.change', 'en') }}" class="btn btn-sm btn-outline-light">EN</a>
            </div>

            <div class="checklogin">
                @if (Auth::check())
                    <a class="navbar-brand" href="{{ route('logout') }}">Uitloggen</a>
                @else
                    <a class="navbar-brand" href="{{ route('login') }}">Inloggen</a>
                @endif
            </div>


        </div><!--/.navbar-collapse -->
    </div>
</nav>