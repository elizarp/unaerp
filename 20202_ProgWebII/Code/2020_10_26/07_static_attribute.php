<?php

class Software{
    private $id;
    private $name;
    public static $counter;

    function __construct($name)
    {
        self::$counter++;
        $this->id = self::$counter;
        $this->name = $name;

        echo "Software {$this->id} - {$this->name} <br/> \n";
    }
}

// create new objects
$software_01 = new Software('Gimp');
$software_02 = new Software('Visual Studio Code');
$software_03 = new Software('Photoshop');

echo 'Quantidade criada = ' . Software::$counter;