<div
    {{
        $attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-ta-text grid w-full gap-y-1',
                'px-3 py-4' => ! $isInline(),
            ])
    }}
>
    <div class="flex">
        @include($getThemeView())
    </div>
</div>
