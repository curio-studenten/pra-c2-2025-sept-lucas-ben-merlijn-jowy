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


    <div class="container">
        <h1>{{ __('beheer.beheertitle') }}</h1>

        @if (Auth::check())
            <h3>{{ __('beheer.begroeting') }} {{ Auth::user()->name }} </h3>
        @endif

        <form action="{{ route('beheer.store') }}" method="POST">
            @csrf
            <label for="name">Manual toevoegen aan brand naam:</label>
            <select name="brand_name">
                @foreach($BrandsList as $brand)
                <option value="{{$brand->name}}">{{ $brand->name }}</option>
                @endforeach
            </select>



            <label for="Manual_name">Naam vaan de manual:</label>
            <input type="text" name="manual_name" id="manual_name" required>

            <label for="File_name">Naam van de file:</label>
            <input type="text" name="file_name" id="file_name" required>


            @if(isset($manualUrl))
            <p>Gegenereerde URL: <a href="{{ $manualUrl }}" target="_blank">{{ $manualUrl }}</a></p>
            @endif

            <div class="submit-button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <!--todo:
database manuals
id: auto incremented
brand_id -> brands id
choose manual name
filesize: default 0
origin URL: http://manualsonline.com/manuals/mfg/ALCATEL_Mobile_Phones/A392G.html
                                                    /\                   /\
                                                   brand_id           manual name
filename: choose name
downloadedServer: TransIP
created at: datetime now
-->



</x-layouts.app>