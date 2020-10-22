<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 4: Largest Palindrome Product</h2>
<p>A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.<br><br>

	Find the largest palindrome made from the product of two 3-digit numbers.</p>

<h3>Answer:</h3>
<?php

//checkEqualPairs();

//function checkEqualPairs() {
//
//    $current_palindrome = 0;
//    $product = 100000;
//    $i = 999;
//
//    while ($product != $current_palindrome) {
//        $product = $i * $i;
//
//        if (isThisPalindrome( $product ) == true && $product > $current_palindrome) {
//            $current_palindrome = $product;
//			return checkUnequalPairs($current_palindrome);
//        } elseif ($product <= $current_palindrome) {
//            return checkUnequalPairs($current_palindrome);
//        } else {
//            $i--;
//        }
//
//
//    }
//
//    return "No palindromes found";
//
//}

checkUnequalPairs(8008);
function checkUnequalPairs($current_palindrome) {

    $product = 1000000;
    $i = 999;
    $j = 999;

    while ($product != $current_palindrome) {
        while ($product != $current_palindrome) {
			$product = $i * $j;

			if ( isThisPalindrome( $product ) == true && $product > $current_palindrome ) {
				return "The largest palindrome made from the product of two 3-digit numbers is " . $current_palindrome;
			}

			$j--;
		}

		$i--;
	}



	return "No palindromes found";

}


function isThisPalindrome($product) {

	$first_digit = substr($product, 0,1);
	$last_digit = substr($product, -1, 1);
	$second_digit = substr($product, 1,1);
	$second_last_digit = substr($product, -2, 1);
	$third_digit = substr($product, 2,1);
	$third_last_digit = substr($product, -3, 1);

	if ( $first_digit == $last_digit ) {
		if ( $second_digit == $second_last_digit ) {
			if ( $third_digit == $third_last_digit ) {
				return true;
			}


		}


	}

	return false;
}

?>
</body>
</html>
