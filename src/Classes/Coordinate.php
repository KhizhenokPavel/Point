<?php

namespace Pavelkhizhenok\Point\Classes;

class Coordinate {
    protected float $value;

    public function __construct(float $value) {
        $this->setValue($value);
    }

    public function getValue(): float {
        return $this->value;
    }

    public function setValue($value): void {
        $this->value = $value;
    }

    public function __toString(): string {
        return $this->value;
    }
}