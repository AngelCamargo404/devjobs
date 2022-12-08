@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'border border-red-500 text-sm text-red-700 font-bold space-y-1 bg-red-50 p-2 font.bold uppercase']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
