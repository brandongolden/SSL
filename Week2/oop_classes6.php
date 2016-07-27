<?php

class Person {

	var $first_name; //Always use "var" keyword when creating Class variables!
	var $last_name;

	var $arm_count = 2;
	var $leg_count = 2;

	function say_hello() {
		echo "Hello from inside a class " . get_class($this) . ".<br />";
	}
	function hello() {
		$this->say_hello();
	}
	function full_name() {
		return $this->first_name . " " . $this->last_name;
	}
}

$person = new Person();
echo $person->arm_count . "<br />";

$person->arm_count = 3;
$person->first_name = 'Lucy';
$person->last_name = 'Ricardo';

$new_person = new Person();
$new_person->first_name = 'Ethel';
$new_person->last_name = 'Mertz';

echo $person->full_name() . "<br />";
echo $new_person->full_name() . "<br />";

?>