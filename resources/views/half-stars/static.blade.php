@php
    $state = $getState();
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

<div class="flex">
    @if ($shouldAllowZero())
        <div
            @class([
                "text-slate-300" => $state !== 0,
                "text-danger-500" => $state === 0,
            ])
        >
            <x-icon name="heroicon-c-no-symbol" class="{{ $sizeClass }}" />
        </div>
    @endif

    @foreach ($getStarsArray() as $value)
        <div
            @class([
                "shrink-0 relative {$halfSizeClass} overflow-hidden",
                "text-slate-300" => $state < ($value - 0.5),
                $colorClass => $state >= ($value - 0.5),
            ])
        >
            <x-icon name="heroicon-s-star" class="absolute start-0 {{ $sizeClass }}" />
        </div>

        <div
            @class([
                "shrink-0 relative {$halfSizeClass} overflow-hidden",
                "text-slate-300" => $state < $value,
                $colorClass => $state >= $value,
            ])
        >
            <x-icon name="heroicon-s-star" class="absolute end-0 {{ $sizeClass }}" />
        </div>
    @endforeach
</div>
