@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-300 mb-1']) }}>
    {{ $value ?? $slot }}
</label>
