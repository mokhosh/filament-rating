<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    @foreach ($getStars() as $value)
        <input
            type="radio"
            value="{{ $value }}"
            id="star-{{ $value }}"
            {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            wire:loading.attr="disabled"
        />
        <label for="star-{{ $value }}"></label>
    @endforeach
</x-dynamic-component>
