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

<?php

// Creating an Associative Array
$name_one = [
	"Zack" => "Zara",
	"Anthony" => "Any",
	"Ram" => "Rani",
	"Salim" => "Sara",
	"Raghav" => "Ravina",
];

// Looping through an array using foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val => $val_value) {
	echo "Husband is " . $val . " and Wife is " . $val_value . "\n";
}

// Looping through an array using for
echo "\nLooping using for: \n";
$keys = array_keys($name_one);
$round = count($name_one);

for ($i = 0; $i < $round; ++$i) {
	echo $keys[$i] . " " . $name_one[$keys[$i]] . "\n";
}
?>