<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <h1>{{ $brand->name }}</h1>


    @php
        $topTypes = \App\Models\Manual::orderBy('views', 'desc')->take(5)->get();
    @endphp
    <b>{{ __('misc.top5') }}</b><br>
    <ul style="list-style-type: disc; padding-left: 1.5em;">
        @foreach ($topTypes as $manual)
            <li style="margin-bottom: 0.5em;">{{ $manual->name }}</li>
        @endforeach
    </ul>


    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem;">
        @foreach ($manuals as $manual)
            <div style="border: 1px solid #ccc; border-radius: 4px; padding: 8px; text-align: center; margin-bottom: 0.5em;">
                @if ($manual->locally_available)
                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/"
                       title="{{ $manual->name }}">
                        {{ $manual->name }}
                    </a>
                    <div style="font-size: 0.85em; color: #666; margin-top: 4px;">
                        ({{ $manual->filesize_human_readable }})
                    </div>
                @else
                    <a href="{{ route('manual.redirect', ['manual' => $manual->id]) }}" target="new" title="{{ $manual->name }}">
                        {{ $manual->name }}
                    </a>
                @endif
            </div>
        @endforeach
    </div>

</x-layouts.app>
