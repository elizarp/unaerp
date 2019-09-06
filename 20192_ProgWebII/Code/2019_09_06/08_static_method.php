<?php

class Software{
    private $id;
    private $name;
    private static $counter;

    function __construct($name)
    {
        self::$counter++;
        $this->id = self::$counter;
        $this->name = $name;

        print "Software {$this->id} - {$this->name} <br/> \n";
    }

    public static function getCounter(){
        return self::$counter;
    }
}

// create new objects
$software_01 = new Software('Gimp');
$software_02 = new Software('Visual Studio Code');
$software_03 = new Software('Photoshop');

echo 'Quantidade criada = ' . Software::getCounter();