<?php

interface Shape
{
    public function area();
}

class Rectangle implements Shape
{
    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Board
{
    public $shapes;

    public function calculateArea()
    {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}
