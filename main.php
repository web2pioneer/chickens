<?php
require_once('chicken.php');
require_once('rooster.php');
require_once('flock.php');

function bird_life($bird){
	// Illustrates some chicken behavior
	echo $bird;
	echo '<br />';
	echo $bird->fly();
	echo '<br />';
	echo $bird->lay_eggs();
	echo '<br />';
	echo '<br />';
}

function main(){
	// Chicken has a boring life
	echo '<h4>Chicken has a boring life</h4>';
	$chicken1 = new Chicken('Jennifer', 2, 1);
	$chicken2 = new Chicken('Heidi', 3, 4);
	bird_life($chicken1);
	bird_life($chicken2);

	$rooster = new Rooster('John',3,2);
	bird_life($rooster);

	// Chicken's life gets interesting
	echo "<h4>Chicken's life gets interesting</h4>";
	echo $rooster->court($chicken2);
	echo '<br/>';
	echo $chicken2->lay_eggs();
	echo '<br/>';
	echo $chicken2->lay_eggs(5);
	echo '<br/>';
	echo $chicken1->lay_eggs();
	echo '<br/><h5><em>Asking a rooster to lay eggs</em></h5>';
	echo $rooster->lay_eggs();
	echo '<br/>';

	// Chickens live in a flock
	echo '<h4>Chicken live in flocks</h4>';
	$chicken_array = array($rooster, $chicken1, $chicken2);
	$first_flock = new Flock('Packers', $chicken_array);
	echo '<h5><em>Left deliberatly to show the properties of an object with print_r()</em></h5>';
	print_r($first_flock);
	echo '<br/><br />';
	echo $first_flock->get_members();
	echo '<br/>';
	echo $first_flock->get_leader();
	echo '<br/>';
	echo '<br/>';

	// Chickens with no rooster ( leader)
	$flock_with_no_rooster = array($chicken1, $chicken2);
	$second_flock = new Flock('Raiders', $flock_with_no_rooster);
	echo $second_flock->get_members();
	echo '<br/>';
	echo $second_flock->get_leader();

}

main();

?>