@php($state = $getState())

<div class="flex">
    @if ($shouldAllowZero())
        <div
            @class([
                "text-slate-300" => $state !== 0,
                "text-danger-500" => $state === 0,
            ])
        >
            <x-icon name="heroicon-c-no-symbol" class="w-6 h-6" />
        </div>
    @endif

    @foreach ($getStarsArray() as $value)
        <div
            @class([
                "shrink-0 relative w-3 h-6 overflow-hidden",
                "text-slate-300" => $state < ($value - 0.5),
                "text-primary-500" => $state >= ($value - 0.5),
            ])
        >
            <x-icon name="heroicon-s-star" class="absolute start-0 w-6 h-6" />
        </div>

        <div
            @class([
                "shrink-0 relative w-3 h-6 overflow-hidden",
                "text-slate-300" => $state < $value,
                "text-primary-500" => $state >= $value,
            ])
        >
            <x-icon name="heroicon-s-star" class="absolute end-0 w-6 h-6" />
        </div>
    @endforeach
</div>
