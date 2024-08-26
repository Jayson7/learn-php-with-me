<?php

// Creating an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

// One way of Looping through an array using foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val){
	echo $val. "\n";
}

// count() function is used to count 
// the number of elements in an array
$round = count($name_one); 
echo "\nThe number of elements are $round \n";


// Another way to loop through the array using for
echo "Looping using for: \n";
for($n = 0; $n < $round; $n++){
	echo $name_one[$n], "\n";
}




?>