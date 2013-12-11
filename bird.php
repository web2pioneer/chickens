<?php
abstract class Bird{
	/**
	* An abstract class representing the bird
	*/

	private $_name;
	private $_weight;
	private $_age;
	private $_gender;

	public function __construct($name, $weight, $age, $gender = 'FEMALE' ){
		$this->_name = $name;
		$this->_weight = $weight;
		$this->_age = $age;
		$this->_gender = $gender;
	}
	public function __destruct(){
		return get_class(). 'is for dinner'; 
	}
	public function __toString(){
		return 'I am '.$this->_name. ' and i am a '.get_class();
	}
	public function get_name(){
		return $this->_name;
	}
	public function set_name($new_name){
		$this->_name = $new_name;
	}
	public function get_gender(){
		return $this->_gender;
	}
	public function get_weight($unit='pound'){
		return $this->_weight .' pound(s)';
	}

}

?>