<h1>Find Tallest Candles To Blow</h1>
<?php
	/*This function accepts an array and it should find the maximum of the array 
	and return its total Count*/
	function findCandles($Arr) {

		$highistNumber = max ($Arr);
		$count = 0;
		
		foreach ($Arr as $key => $value) {
			if ($value == $highistNumber) {
				$count ++;
			}
		}
		
		return $count;
		
	}
	
	$ar = [1, 2, 3, 4,4];
	echo "Candles Count: " . findCandles($ar);
?>
<hr>
<h1>Convert 12 Hour Format Time String to 24 Hour Format String</h1>
<?php
	function convertTimeFormat($time12Hour) {
		$time24Hour = ""; //final result should go in this string
		$Split = explode(":",$time12Hour); // split string into an array separated by :
		$Hour = $Split[0]; // gets the first array value which is the hour and puts in $Hour
		$Split[2] = substr($Split[2],0,2); //gets the third value in the array which is seconds+AM/PM
		
		if($Hour == '12' && strpos($time12Hour,"AM")!== FALSE) { //If time is in the hour of 12AM
			echo $time24Hour = str_replace("AM", "", $time12Hour);
		} elseif(strpos($time12Hour,"PM")!== FALSE && $Hour != "12") { //if time is in the PM and it's not 12(pm)
			$Hour = $Hour + 12;
			$minutes = $Split[1];
			$seconds = $Split[2];
			echo $time24Hour = $Hour,":",$minutes,":",$seconds; 
		} elseif ($Hour == '12' && strpos($time12Hour,"PM")!== FALSE) { //if time is in the PM and it is 12(pm)
			echo $time24Hour = str_replace("PM", "", $time12Hour);
		}elseif (strpos($time12Hour,"AM")!== FALSE && $Hour != "12") { //if time is in the AM and it is not 12(am)
			echo $time24Hour = str_replace("AM", "", $time12Hour);
		}
		return  $time24Hour;
	}
	//$time12Hour = "12:40:03AM";
	//$time12Hour = "06:40:03PM";
	//$time12Hour = "12:40:03PM";
	$time12Hour = "01:40:03AM";
	$result = convertTimeFormat($time12Hour);
?>
<hr>
<hr>