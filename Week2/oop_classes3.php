<?php

class Person {
	function say_hello() {
		echo "Hello from inside a class.<br />";
	}
}

//Instantiate or add two (2) copies of Person to the Class.
$person = new Person();
$person2 = new Person();

echo get_class($person) . "<br />";

//Use "is_a" to go check to see if Instance "$person1" is part of the Class.
if(is_a($person, 'Person')) {
	echo "Yup, it's a Person.<br />";
} else {
	echo "Not a Person.<br />";
}

//Use variable + "arrow notation" to invoke the Method "say_hello" inside of the Class
$person->say_hello();

?>