<?php
interface Animal {
    public function breath();
    public function eat();
}

class Dog implements Animal{
    //new method
    public function bark() {
        return 'au au';
    }

    //implemented methods
    public function breath() {
        return 'breathing';
    }

    public function eat() {
        return 'eating';
    }
}

$dog = new Dog();
echo $dog -> breath() . "<br/"; //breathing
echo $dog -> bark() . "<br/"; //au au
echo $dog -> eat() . "<br/"; //eating