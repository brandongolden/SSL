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
}

$person = new Person();
echo $person->arm_count . "<br />";

$person->arm_count = 3;
$person->first_name = 'Lucy';

$new_person = new Person();
$new_person->first_name = 'Ethel';

echo $person->first_name . "<br />";
echo $new_person->first_name . "<br />";

?>