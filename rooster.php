<?php
require_once('behavior.php');
require_once('bird.php');

	class Rooster extends Bird implements Behavior{
		/**
		* Rooster extending a Bird with one more method court()
		* Rooster implements the fly() and the lay_eggs methods from the <br />
		* behavior interface
		*/
		
		public function __construct($name, $weight, $age, $gender='MALE'){
			parent::__construct($name, $weight, $age, $gender);
		}
		
		public function court(Chicken $chicken){
			// court only if it's a chicken
			if($chicken instanceof Chicken){
				$chicken->set_courted_to_true();
				return 'I m '.$this->get_name().' the '.get_class().' turn on cirle around (courting) '. $chicken->get_name();
			}else{
				return 'i only court chickens, i mean females';
			}
		}

		public function fly(){
			return "i don't fly, i walk and show my plumage , i am a ROOSTER for God..." ;
		}
		public function lay_eggs(){
			return $this->get_name().' lay eggs : since i am a '.$this->get_gender().', i refuse to be a chicken';
		}

		public function __toString(){
			return 'I m '.$this->get_name().' and i am a '.get_class();
		}

	}
?>