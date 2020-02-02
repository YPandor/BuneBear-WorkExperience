<h1>PHP Arrays Functions</h1>
<?php
	/*This function accepts a paramter which needs to Output following
		Total Items in array : 10
		Maximum element in array : 100
		Minimum element in array: 1
		Sorted Array ( Ascending Order )
		Sorted Array ( Descending Order )
		Sum Of Array : 
		String : 1 * 23 * 43 * 54 * 51 * 65 * 73 * 82 * 91 * 100

	*/

	function performArrayFunctions($arr) {

		global $arr;
		$arrayLength = count($arr);


		echo "Total Items in array : ". $arrayLength ."\n";
		echo "Maximum element in array : ". max($arr) ."\n";
		echo "Minimum element in array: ". min($arr). "\n";

		sort($arr);
		for ($i=0; $i < $arrayLength ; $i++) { 
			echo $arr[$i];
		}
		echo "\n";

		rsort($arr);
		for ($i=0; $i < $arrayLength ; $i++) { 
			echo $arr[$i];
		}		
		echo "\n";

		echo "Sum Of Array : ". array_sum($arr). "\n";
		echo "String : ". implode(" * ", $arr);
					

	}
	$arr = [1,23,43,54,51,65,73,82,91,100]; // global scope
	
	performArrayFunctions($arr); // outputs as described in the doc
?>


<hr>
<h1>PHP String Functions</h1>

<?php
	/*This function accepts a paramter which needs to Output following
		Extracted String = 
		String Length =
		Upper Case String =
		Lower Case String = 
		First Letter Uppercase of Sentence =
		First Letter Uppercase of each word = 
	*/
	
	function performStringFunctions ($str) {
		$stringPosition = strpos($str, "jumped");

		echo "Extracted String = ". substr($str, $stringPosition). "\n";
		echo "String Length = ". strlen($str). "\n";
		echo "Upper Case String = ". strtoupper($str). "\n";
		echo "Lower Case String = ". strtolower($str). "\n";
		echo "First Letter Uppercase of Sentence = ". ucfirst($str). "\n";
		echo "First Letter Uppercase of each word = ". ucwords($str). "\n";

		
	}
	$str = "The quick brown fox jumped over the lazy dog";
	performStringFunctions($str);
	
?>
<hr>
<hr>