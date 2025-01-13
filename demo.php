<?php 

echo 'Hello 2';

// date from date function 

$dater = date("D M Y");  // wow


echo $dater;
// constants => variables that wont change

$first_contst =  define('APPLE', 'Mac');


echo ('Apple');
echo ('Apple');
//  Arrays 




// normal array 
$stuff = [1,2,3,4,5];

// assocaitive arrays

// $todo = [
//     'house' => 'April',
//     'setup' => 'June'
// ];

// object another angle


$jayson = [
    'todo1' => [
        'house' => 'April',
        'setup' => 'June',
    ],
    'todo2' => [
        'house' => 'April',
        'setup' => 'June',
    ],
];

// Accessing and printing one of the todos
echo "House for todo1: " . $jayson['todo1']['house'] . "\n";
echo "Setup for todo2: " . $jayson['todo2']['setup'] . "\n";



// ternary operators 
// ? 
$x =9 ;

echo $x === 9 ? 'yes': 'no', "\n";
echo $x === 7 ? 'yes': 'no';