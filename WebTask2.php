<?php
/* Q.1 Write program to show desired output as following */

function conditionalOperators() {
	$a = 42;          $b = 0;

	//TEST1 : Either a or b is false
	if( $a && $b ) {
		echo "TEST1 : Both a and b are true\n";
	}
	else {
		echo "TEST1 : Either a or b is false\n";
	}
	// TEST2 : Either a or b is false
	$b= true;
	$a = false;

	if( $a && $b ) {
		echo "TEST2 : Both a and b are true\n";
	}
	else {
		echo "TEST2 : Either a or b is false\n";
	}

	//TEST3 : Either a or b is true. Write Code for this condition

	$a = true;
	$b = false;

	if ($a Or $b) {
		echo "TEST3 : Either a or b is true\n";
	}else {
		echo "TEST3 : Either a or b is false\n";
	}


	//TEST4 : Either a or b is true. Write Code for this condition

	$a = true;
	$b = false;

	if ($a || $b) {
		echo "TEST4 : Either a or b is true\n";
	}else {
		echo "TEST4 : Either a or b is false\n";
	}

	// TEST5 : a is true  . Write Code for this condition

	$a = 1;
	$b = 2;

	if ($a == 1) {
		echo "TEST5 : a is true\n";
	}else {
		echo "TEST5 : a is false\n";
	}


	// TEST6 : b is true  . Write Code for this condition

	$a = 1;
	$b = 2;

	if ($b == 2) {
		echo "TEST6 : b is true\n";
	}else{
		echo "TEST6: b is true\n";
	}

	// TEST7 : a is false . Write Code for this condition

	$a = 1;
	$b = 2;

	if (!$a) {
		echo "TEST7 : a is true\n";
	}else {
		echo "TEST7 : a is false\n";
	}


	// TEST8 : b is false. Write Code for this condition

	$a = 1;
	$b = 2;

	if (!$b) {
		echo "TEST8 : b is true\n";
	}else {
		echo "TEST8 : b is false\n";
	}

}
/* Use all conditional operators between $a and $b to display following Output.
TEST1 : Either a or b is false
TEST2 : Either a or b is false
TEST3 : Either a or b is true
TEST4 : Either a or b is true
TEST5 : a is true
TEST6 : b is true
TEST7 : a is false
TEST8 : b is false */

conditionalOperators();




function numberInSingleLine () {
// your code is here
  $x = 0;$y = 1;$z = 2;$a = 3;
  echo $x.$y.$z.$a;
}

numberInSingleLine();







function iterateVariables () {

   for ($x = 1; $x <= 10; $x++) {

    if($x==4 || $x == 6) {
    	continue;
    }
	// your code is here

	if ($x == 9) {
		break;
	}
	    echo $x;
   }
}

iterateVariables();




?>