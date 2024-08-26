<?php
// Here we can see that all echo 
// statements are executed in the same manner
 
$variable = 25;
echo $variable, '\n';
ECHO $variable, '\n';
EcHo $variable, '\n';

// but this line will show RUNTIME ERROR as
// "Undefined Variable"
// echo $VARIABLE





?>

<?php
  
 $input  = <<<testHeredoc

Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.
I am enjoying this.

testHeredoc;
  
echo $input;

/* 


*/
?>

<?php

$input = <<<'testNowdoc'

Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.

testNowdoc;

echo $input;

// Directly printing string without any variable
echo <<<'Nowdoc'
Welcome to GFG .
Learning PHP is fun in GFG.
    
Nowdoc;
    
?>