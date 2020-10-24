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

checkEqualPairs();

function checkEqualPairs(){

    $i = 999;
    $palindrome_found = false;

    while ($palindrome_found == false) {
        $product = $i * $i;

        if (isThisPalindrome( $product ) == true) {
			$palindrome_found = true;
			break;
		}

        $i--;
    }

	return checkUnequalPairs( $product);

}


function checkUnequalPairs($current_palindrome) {

    $i = 999;
    $j = 999;
    $palindrome_found = false;

    while ($palindrome_found == false) { //looping through decreasing values of i
        while ($j < 500) { //looping through decreasing values of j
			$product = $i * $j;

			if ( isThisPalindrome( $product ) == true ) {
			    $palindrome_found = true;

			    if ($current_palindrome > $product) {
					echo "The largest palindrome made from the product of two 3-digit numbers is " . $current_palindrome;
				} else {
			        echo "The largest palindrome made from the product of two 3-digit numbers is " . $product;
                }

			    break;
			}

			$j--;
		}

		$i--;
	}


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
