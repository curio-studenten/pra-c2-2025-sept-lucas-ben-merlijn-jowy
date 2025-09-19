<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 0.5rem;">
        <div class="manual-container">
            @foreach ($manuals as $manual)
                <div style="border: 1px solid #ccc; border-radius: 4px; padding: 6px; text-align: center;">
                    @if ($manual->locally_available)
                        <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/"
                           title="{{ $manual->name }}">
                            {{ $manual->name }}
                        </a>
                        <div class="manual-container">
                        <div style="font-size: 0.85em; color: #666;">
                            ({{ $manual->filesize_human_readable }})
                        </div>
                    @else
                        <a href="{{ $manual->url }}" target="new" title="{{ $manual->name }}">
                            {{ $manual->name }}
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
