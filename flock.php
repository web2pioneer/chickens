<?php
require_once('chicken.php');
require_once('rooster.php');

class Flock{
	/**
	* Chickens are gregarious birds and live together in flocks. 
	* A flock has a leader(a rooster )
	*/
	private $_name;
	private $_members = array();

	public function __construct($name, $members)
	{
		$this->_name = $name;
		$this->_members = $members;
	}
	private function _get_number_members(){
		return count($this->_members);
	}
	public function get_members(){
		// loop through the flock's members
		$members_string = '';
		foreach($this->_members as $member){
			$members_string .= $member.', ';
		}

		return 'This flock has '.$this->_get_number_members().' members : ['. $members_string.']';
	}
	
	public function get_leader(){
		// returns the leader of the flock
		foreach($this->_members as $member){
			if($member instanceof Rooster){
				return $member. ' and i am the leader of this flock '.$this->_name;
			}
			else{
				return 'this flock needs a rooster';
			}
		}
	}
}

?>