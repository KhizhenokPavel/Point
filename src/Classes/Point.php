<?php

namespace Pavelkhizhenok\Point\Classes;

class Point {
    protected Coordinate $x;
    protected Coordinate $y;

    public function __construct(Coordinate|int $x, Coordinate|int $y) {
        $this->setX($x);
        $this->setY($y);
    }

    public function getX(): Coordinate {
        return $this->x;
    }

    public function getY(): Coordinate {
        return $this->y;
    }

    public function setX(Coordinate|int $x): void {
        if (is_integer($x)) {
            $this->x = new Coordinate($x);

            return;
        }

        $this->x = $x;
    }

    public function setY(Coordinate|int $y): void {
        if (is_integer($y)) {
            $this->y = new Coordinate($y);

            return;
        }

        $this->y = $y;
    }
}