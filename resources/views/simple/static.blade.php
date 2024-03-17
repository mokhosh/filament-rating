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
@endphp

<div class="flex">
    @if ($shouldAllowZero())
        <div
            @class([
                "text-slate-300" => $state !== 0,
                "text-danger-500" => $state === 0,
            ])
        >
            <x-icon name="heroicon-c-no-symbol" class="w-6 h-6 pointer-events-none" />
        </div>
    @endif

    @foreach ($getStarsArray() as $value)
        <div
            @class([
                "text-slate-300" => $state < $value,
                $colorClass => $state >= $value,
            ])
        >
            <x-icon name="heroicon-s-star" class="w-6 h-6 pointer-events-none" />
        </div>
    @endforeach
</div>
