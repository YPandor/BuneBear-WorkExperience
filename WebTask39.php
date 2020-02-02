<?php
class Beverage
{
  public $name;
  function __construct()
   {
      echo "New Beverage was created . <br/>";   
	 }
   function __clone() {
      echo "Existing Beverage was cloned . <br/>";
   }
   function __unset($name) {
      echo "Existing Beverage was deleted. <br/>";
   }
 }

// Create an object of Beverage
// $coke = new Beverage();
// $coke->__construct();
$coke = new Beverage("coke");


// // Clone an Object of Beverage
$coke->__clone();

// // Delete or unset an object of Beverage.
$coke->__unset($coke);

?>
