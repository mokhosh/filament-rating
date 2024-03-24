@php
    $id = $getId();
    $isDisabled = $isDisabled();
    $color = $getColor();
    $colorClass = match ($color) {
        'danger' => 'text-danger-500',
        'gray' => 'text-gray-500',
        'info' => 'text-info-500',
        'primary' => 'text-primary-500',
        'success' => 'text-success-500',
        'warning' => 'text-warning-500',
        default => "text-{$color}-500",
    };
    $groupHoverColorClass = match ($color) {
        'danger' => 'group-hover:!text-danger-500',
        'gray' => 'group-hover:!text-gray-500',
        'info' => 'group-hover:!text-info-500',
        'primary' => 'group-hover:!text-primary-500',
        'success' => 'group-hover:!text-success-500',
        'warning' => 'group-hover:!text-warning-500',
        default => "group-hover:!text-{$color}-500",
    };
    $size = $getSize();
    $sizeClass = match ($size) {
        'xs' => 'w-3 h-3',
        'sm' => 'w-4 h-4',
        'md' => 'w-6 h-6',
        'lg' => 'w-8 h-8',
        'xl' => 'w-10 h-10',
    };
    $halfSizeClass = match ($size) {
        'xs' => 'w-[.375rem] h-3',
        'sm' => 'w-2 h-4',
        'md' => 'w-3 h-6',
        'lg' => 'w-4 h-8',
        'xl' => 'w-5 h-10',
    };
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="flex group">
        @if ($shouldAllowZero())
            <input
                type="radio"
                value="0"
                id="{{ $id }}-star-0"
                class="!hidden peer"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >

            <label
                for="{{ $id }}-star-0"
                @class([
                    "text-slate-300 peer-checked:text-danger-500",
                    "group-hover:!text-slate-300 peer-hover:!text-danger-500 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-c-no-symbol" class="{{ $sizeClass }} pointer-events-none" />
            </label>
        @endif

        @foreach ($getStarsArray() as $value)
            <label
                for="{{ $id }}-star-{{ $value - 0.5 }}"
                @class([
                    "shrink-0 relative {$halfSizeClass} overflow-hidden {$colorClass} peer-checked:text-slate-300",
                    "{$groupHoverColorClass} peer-hover:!text-slate-300 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-s-star" class="absolute start-0 {{ $sizeClass }} pointer-events-none" />
            </label>

            <input
                type="radio"
                value="{{ $value - 0.5 }}"
                id="{{ $id }}-star-{{ $value - 0.5 }}"
                class="!hidden peer"
                wire:loading.attr="disabled"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >

            <label
                for="{{ $id }}-star-{{ $value }}"
                @class([
                    "shrink-0 relative {$halfSizeClass} overflow-hidden {$colorClass} peer-checked:text-slate-300",
                    "{$groupHoverColorClass} peer-hover:!text-slate-300 cursor-pointer" => ! $isDisabled,
                ])
            >
                <x-icon name="heroicon-s-star" class="absolute end-0 {{ $sizeClass }} pointer-events-none" />
            </label>

            <input
                type="radio"
                value="{{ $value }}"
                id="{{ $id }}-star-{{ $value }}"
                class="!hidden peer"
                wire:loading.attr="disabled"
                @disabled($isDisabled)
                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
            >
        @endforeach
    </div>
</x-dynamic-component>
