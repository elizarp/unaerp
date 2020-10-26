<?php

class Rectangle
{
    public function setWidth($w)
    {
        $this->width = $w;
    }

    public function setHeight($h)
    {
        $this->height = $h;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle
{
    public function setWidth($w)
    {
        $this->width = $w;
        $this->height = $w;
    }

    public function setHeight($h)
    {
        $this->height = $h;
        $this->width = $h;
    }
}
