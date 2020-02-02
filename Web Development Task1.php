<?php
function showVariableDataType() {
    $x = 3; $y = "hello"; $z = 5.67; $a = array(1,2); 
    /*
      Sample Output 
      $x is integer
      $y is string
      $z is Floating Point
      $a is an array */
      print "x is ".gettype($x)."\n";
      print "y is ".gettype($y)."\n";
      print "z is ".gettype($z)."\n";
      print "a is an ".gettype($a)."\n";
}
showVariableDataType();
 
 
function changeDataType() {
    //For changing Datatype of variable code should be in this function
 
    $a = 1; $b = "2";
    
    settype ($a, "string");
    settype ($b, "integer");

    print gettype($a)."\n";
    print gettype($b)."\n";

}
changeDataType();
 
function typeCastVariables() {
    //For casting Variables code should be in this function
    $a = 1; $b = "2";

    $a = (string) $a;
    $b = (integer) $b;

    print gettype($a)."\n";
    print gettype($b)."\n";

}
typeCastVariables();


?>
