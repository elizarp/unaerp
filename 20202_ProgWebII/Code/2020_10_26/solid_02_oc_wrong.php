<?php

class Rectangle
{
    public $width;
    public $height;
}

class Board
{
    public $rectangles = [];
    public function calculateArea()
    {
        $area = 0;
        foreach ($this->rectangles as $rectangle) {
            $area += $rectangle->width * $rectangle->height;
        }
    }
}
