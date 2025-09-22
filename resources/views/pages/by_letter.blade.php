<x-layouts.app>
    <h1>Merken die beginnen met "{{ $letter }}"</h1>

    @if($brands->isEmpty())
        <p>Geen merken gevonden voor deze letter.</p>
    @else
        <ul>
            @foreach($brands as $brand)
                <li>
                    <a href="{{ route('brands.show', ['brand_id' => $brand->id, 'brand_slug' => \Illuminate\Support\Str::slug($brand->name)]) }}">
                        {{ $brand->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</x-layouts.app>
