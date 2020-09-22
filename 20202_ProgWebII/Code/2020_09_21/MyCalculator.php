<?php

class MyCalculator {
	private $number1;
	private $number2;
	public $resto;

	public function __construct($par_number1, $par_number2)
	{
		if(is_numeric($par_number1)){
			$this->number1 = $par_number1;
		}

		if(is_numeric($par_number2)){
			$this->number2 = $par_number2;
		}
	}

	public function	add(){
		return $this->number1 + $this->number2;
	}

	public function	multiply(){
		return $this->number1 * $this->number2;
	}

	public function	subtract(){
		return $this->number1 - $this->number2;
	}

	public function	divide(){
		return $this->number1 / $this->number2;
	}

	public function	divideInt(){
		$this->resto = $this->number1 % $this->number2;

		return intval($this->number1 / $this->number2);
	}
}
/*
$mycalc = new MyCalculator(12, 5); 
echo "add:" . $mycalc->add() . "<br/>";
echo "multiply:" . $mycalc->multiply() . "<br/>";
echo "subtract:" . $mycalc->subtract() . "<br/>";
echo "divide:" . $mycalc->divide() . "<br/>";
echo "divideInt:" . $mycalc->divideInt() . "<br/>";
echo "resto:" . $mycalc->resto . "<br/>";
*/
?>