<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="flex group">
        @foreach ($getStars() as $value)
            <label for="star-{{ $value }}" class="text-primary-500 peer-checked:text-slate-300 group-hover:!text-primary-500 peer-hover:!text-slate-300 cursor-pointer">
                <x-icon name="heroicon-s-star" class="w-6 h-6 pointer-events-none"/>
            </label>

            <input
                type="radio"
                value="{{ $value }}"
                id="star-{{ $value }}"
                class="!hidden peer"
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                wire:loading.attr="disabled"
            />
        @endforeach
    </div>
</x-dynamic-component>
