<?php

# Single Level Inheritance
class Animal
{
    public $name;
    
    public function greet()
    {
        return "Hello, I'm some sort of animal and my name is " . $this->name;
    }

    public function sleep(){
        return "Sleeping...";
    }
}

class Dog extends Animal
{
    public function greet()
    {
        return "Hello, I'm a dog and my name is " . $this->name;
    }
}

#$animal = new Animal();
#$animal->name = "Bob";
#echo $animal->greet();
$animal = new Dog();
$animal->name = "Bob2";
echo $animal->sleep();