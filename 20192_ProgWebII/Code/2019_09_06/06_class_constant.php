<?php

class Person
{
    private $name;
    private $genre;
    const GENRES = array('M' => "Male", "F" => "Female");

    public function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function getName(){
        return $this->name;
    }

    public function getGenreDescription(){
        return self::GENRES[$this->genre];
    }
}
