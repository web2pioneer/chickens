<?php
require_once('behavior.php');
require_once('bird.php');

	class Chicken extends Bird implements Behavior{
		/**
		* Chicken extending a Bird with one more property $_courted
		* Chicken implements the fly() and the lay_eggs methods from the <br />
		* behavior interface
		*/

		private $_courted = False;
		
		public function __construct($weight, $age){
			parent::__construct($weight, $age);
		}
		
		public function fly(){
			return 'i only fly small distances';
		}

		public function __toString(){
			return 'I m '.$this->get_name().' and i am a '.get_class();
		}
		public function set_courted_to_true(){
			// set to True when courted by a rooster
			$this->_courted = True;
		}
		public function lay_eggs($number_eggs=2){
			// a chicken lays a maximum of 2 eggs a day if she is courted
			if($this->_courted and $number_eggs<=2){
				return $this->get_name().' lays eggs : laying '.$number_eggs.' eggs';
			}
			elseif($this->_courted and $number_eggs>2)
			{
				return $this->get_name().' lays eggs : I can only lay'. $number_eggs.' maximum a day';
			}
			else{
				return $this->get_name().' lay eggs : no rooster courted me yet. Talk to him :)';
			}
		}

	}
?>