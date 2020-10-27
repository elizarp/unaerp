<?php

class Cat{
	private $mood = 0;
	private $hungry = 0;
	private $energy = 0;

	public function sleep(){
		$this->hungry++;
		$this->energy++;
	}

	public function play(){
		$this->mood++;
		$this->energy--;
		$this->meow();
	}

	public function getHungry(){
		return $this->hungry;
	}

	private function meow(){
		echo "Meow!\n";
	}
}

$garfield = new Cat();
#echo $garfield->getHungry();
$garfield->meow();
#echo $garfield->getHungry();