<?php

// declaring a local variable to be local inside a funtion
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15


// 



?>
<!-- 
 
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):
-->

<?php 

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15


// random calculations 
echo "\n";
echo 'mytest 3';
function myTest3($firstNum, $secondNum) {

    echo $firstNum **2+ $secondNum **2;

    // check type of firstname 
    echo "type($firstNum)";

}

myTest3(3, 5);



?>