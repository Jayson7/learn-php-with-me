<?php 

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str)."\n";
echo preg_match_all($pattern, $str)."\n";
echo preg_replace($pattern, "JTS", $str)."\n";


?>