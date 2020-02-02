<h1>Reverse Array</h1>
<?php
	function reverseArray($Arr) {

		$reversed = array_reverse($Arr);
		print_r($reversed);

	}
	$fruits = ["Mango","Strawberry","Bananas","Pineapple"];
	$result = reverseArray($fruits);
?>


<hr>
<h1>Find Max Number in Array</h1>
<?php
	function findMaxOfArray($Arr) {

		$max = max($Arr);
		print_r($max);

	}
	$numbers = [23,41,633,14,54,11,66,0];
	$result = findMaxOfArray($numbers);
?>
<hr>
<hr>
<h1>Find and Return List of Even and Odd Numbers</h1>
<?php
	/*@return Array in this format: array(
		"even" => [2,4,6,8,10,12,14]
		"odd"  => [1,3,5,7,9,11,13]
	) */
	function getEvenAndOddNumbers($Arr) {

		$evenNumbers = array();
		$oddNumbers = array();

		for ($i=1; $i <= count($Arr) ; $i++) { 
			if ($i % 2 == 0) {
				array_push($oddNumbers,$Arr[$i]);
			}else{
				array_push($evenNumbers, $Arr[$i]);
			}
		}

		print_r($evenNumbers);
		print_r($oddNumbers);


	}
	$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
	$result = getEvenAndOddNumbers($numbers);
?>
<hr>