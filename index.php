<?php
// Sum of two number.
// Define variables
$number1 = 10;
$number2 = 10;
// Sum of two variables
$sum = $number1 + $number2;
// Display the result
echo "The total sum is: " .$sum;
// for line break
echo " <br>";
// determine three largest number.
//Define variables
$a = 10;
$b = 20;
$c = 30;
// find the largest number
if($a >$b && $a>$c){
    echo "The largest number is A: " .$a;
}
elseif($b>$a && $b>$c){
    echo "The largest number is B: " .$b;
}
else{
    echo "The largest number is C: " .$c;
}
// for line break
echo " <br>";
// justify even and odd number
$number = 6;
// Check if the number is even
if($number % 2 == 0){
    echo "This is even number";
} else {
    echo "This is odd number";
}
?>