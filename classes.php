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

?>