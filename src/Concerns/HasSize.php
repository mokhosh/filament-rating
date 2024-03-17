<?php

namespace Mokhosh\FilamentRating\Concerns;

trait HasSize
{
    public string $size = 'md';

    public function size(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}
