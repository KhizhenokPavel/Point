<?php

namespace Pavelkhizhenok\Point\Classes;

class Point {
    protected Coordinate $x;
    protected Coordinate $y;

    public function __construct(Coordinate|float $x, Coordinate|float $y) {
        $this->setX($x);
        $this->setY($y);
    }

    public function getX(): Coordinate {
        return $this->x;
    }

    public function getY(): Coordinate {
        return $this->y;
    }

    public function setX(Coordinate|float $x): void {
        if (is_numeric($x)) {
            $this->x = new Coordinate($x);

            return;
        }

        $this->x = $x;
    }

    public function setY(Coordinate|float $y): void {
        if (is_numeric($y)) {
            $this->y = new Coordinate($y);

            return;
        }

        $this->y = $y;
    }
}