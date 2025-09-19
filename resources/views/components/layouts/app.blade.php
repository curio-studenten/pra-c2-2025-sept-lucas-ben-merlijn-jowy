<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>

    <x-navbar />

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <x-header />

                <div class="langselect">
                    <form method="post" action="{{ route('set-locale') }}">
                        @csrf
                        <label for="language"></label>
                        <select name="language" id="language">
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>en</option>
                            <option value="nl" {{ app()->getLocale() == 'nl' ? 'selected' : '' }}>nl</option>
                        </select>
                        <button type="submit">Opslaan</button>
                    </form>
                </div>

                <ul class="breadcrumb">
                    <li><a href="/" title="{{ __('misc.home_alt') }}"
                            alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}</a></li>
                    {{ $breadcrumb ?? '' }}
                </ul>

                @if ( isset($_GET['q']) )
                <x-search_results />
                @else
                {{ $slot }}
                @endif

                <ul class="breadcrumb">
                    <li>
                        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}</a>
                    </li>
                    {{ $breadcrumb ?? '' }}
                </ul>

            </div>
        </div>
    </div>

    <div class="footer">
        <x-footer />
    </div>





    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        //window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="{{ asset('/js/app.js') }}"></script>

</body>

</html>