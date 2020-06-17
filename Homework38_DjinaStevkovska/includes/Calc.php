<?php

namespace Calculator;

class Calc {
	public $num1;
	public $num2;
	public $calc;

	function __construct($num1, $num2, $calc) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->calc = $calc;
	}

	public function calcMethod() {
		if($this->calc === 'add') {
			return $this->num1 + $this->num2;
		} elseif ($this->calc === 'sub') {
			return $this->num1 - $this->num2;
		} elseif ($this->calc === 'mul') {
			return $this->num1 * $this->num2;
		} else {
			return false;
		}
	} 
}
