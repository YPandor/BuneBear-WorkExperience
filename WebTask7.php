<h1>Local and Global Scope</h1>
<?php
	$number = 10; // global scope
	
	//echo $number; // outputs 10

	/*This function accepts a paramter which needs to be multiplied with a global variable*/
	function multiply ($multiplyBy) {
		global $number;
		//echo $number; // $number is undefined here
		return $multiplyBy * $number;
	}
	echo "Number Output: " . multiply (5);
?>

<hr>
<h1>Static Variables</h1>
<?php
	/* This function has a number variable. Use Static variable power so that
	variable value stays in memory */

	function printNumber () {
		static $number = 0; // declare static variable
		
		if ($number == 0) {
			print $number."\n";
			$number = $number + 5;
		}else {
			$number = $number + 5;
			print $number."\n";
		}
		
	}
	
	printNumber(); //test(); // 0
	printNumber(); //test(); // 5
	printNumber(); //test(); // 10
?>
<hr>
<hr>