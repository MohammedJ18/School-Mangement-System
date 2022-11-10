@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-end text-secondary-400']) }}>
    {{ $value ?? $slot }}
</label>
