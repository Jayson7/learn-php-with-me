<?php

class gfg {
  var $message;
  
  function __construct($message) {
    $this->message = $message;
  }
  
  function msg() {
    return "This is an example of " . $this->message . "!";
  }
}

// instantiating an object
$newObj = new gfg("Object Data Type");
echo $newObj->msg();



echo "\n";

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>