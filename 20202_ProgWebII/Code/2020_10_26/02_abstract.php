<?php

abstract class Product {
    protected $name;
    protected $type;

    public function __construct($name, $type){
        $this->type = $type;
        $this->name = $name;
    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function getTypeName();
}

class Paper extends Product {
    
    public function getTypeName() {
        return $this->name .':'. $this->type;
    }

}

$product = new Paper('Sulfite','80g');
echo $product->getName();