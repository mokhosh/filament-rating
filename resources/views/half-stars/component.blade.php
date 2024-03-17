@php($isDisabled = $isDisabled())

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="flex group">
        @if ($shouldAllowZero())
            <input
                type="radio"
                value="0"
                id="star-0"
                class="!hidden peer"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >

            <label
                for="star-0"
                @class([
                    "text-slate-300 peer-checked:text-danger-500",
                    "group-hover:!text-slate-300 peer-hover:!text-danger-500 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-c-no-symbol" class="w-6 h-6 pointer-events-none" />
            </label>
        @endif

        @foreach ($getStarsArray() as $value)
            <label
                for="star-{{ $value - 0.5 }}"
                @class([
                    "shrink-0 relative w-3 h-6 overflow-hidden text-primary-500 peer-checked:text-slate-300",
                    "group-hover:!text-primary-500 peer-hover:!text-slate-300 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-s-star" class="absolute start-0 w-6 h-6 pointer-events-none" />
            </label>

            <input
                type="radio"
                value="{{ $value - 0.5 }}"
                id="star-{{ $value - 0.5 }}"
                class="!hidden peer"
                wire:loading.attr="disabled"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >

            <label
                for="star-{{ $value }}"
                @class([
                    "shrink-0 relative w-3 h-6 overflow-hidden text-primary-500 peer-checked:text-slate-300",
                    "group-hover:!text-primary-500 peer-hover:!text-slate-300 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-s-star" class="absolute end-0 w-6 h-6 pointer-events-none" />
            </label>

            <input
                type="radio"
                value="{{ $value }}"
                id="star-{{ $value }}"
                class="!hidden peer"
                wire:loading.attr="disabled"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >
        @endforeach
    </div>
</x-dynamic-component>
