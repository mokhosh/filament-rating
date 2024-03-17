<div class="flex">
    @if ($shouldAllowZero())
        <div
            @class([
                "text-slate-300" => $getState() !== 0,
                "text-danger-500" => $getState() === 0,
            ])
        >
            <x-icon name="heroicon-c-no-symbol" class="w-6 h-6 pointer-events-none" />
        </div>
    @endif

    @foreach ($getStars() as $value)
        <div
            @class([
                "text-slate-300" => $getState() < $value,
                "text-primary-500" => $getState() >= $value,
            ])
        >
            <x-icon name="heroicon-s-star" class="w-6 h-6 pointer-events-none" />
        </div>
    @endforeach
</div>
