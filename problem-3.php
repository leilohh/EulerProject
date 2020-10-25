<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lei Huang</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 3: Largest Prime Factor</h2>
<p>The prime factors of 13195 are 5, 7, 13 and 29.<br><br>

    What is the largest prime factor of the number 600851475143 ?</p>

<?php

//function isThisPrime( $maybe_prime ) {
//	for ( $j = 2; $j < $maybe_prime; $j++ ) {
//		if ( $maybe_prime % $j == 0 ) { //if $maybe_prime is divisible by any number smaller than it, it is not prime
//			return false;
//		}
//	}
//
//	return true;
//}

//$num = 600851475143;
//$starting_point = 550851475143;
//$test = 600851475143;
//
//do {
//	$next_prime = gmp_nextprime($starting_point);
//	//echo $next_prime, "\n";
//        if ( $num % $next_prime == 0 ) { //means this is a factor
//            echo "The largest prime factor of the number " . $num . " is " . $next_prime . ".\n";
//        }
//	$starting_point = $next_prime;
//
//} while ($next_prime < $test);


// This code should work, but takes too long to find an answer for a number of this size
//for ( $i = $num; $i > 0; $i -= 2 ) { //decrease by 2 because only odd numbers can be prime (except for 2 itself)
//	if ( $num % $i == 0 ) { //means this is a factor
//		if ( isThisPrime( $i ) == true ) { //and if this factor is prime, then we have found the largest prime factor
//			echo "The largest prime factor of the number " . $num . " is " . $i . ".";
//		}
//	}
//}

?>
</body>
</html>
