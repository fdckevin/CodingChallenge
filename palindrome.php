<?php
	function isPalindrome(string $str) {
    // Convert the string to lowercase
    $str = strtolower($str);
    // Remove any non-alphanumeric characters
    $str = preg_replace("/[^a-z0-9]/i", "", $str);
    // Reverse the string
    $reversed = strrev($str);
    // Compare the original and reversed strings
    if ($str == $reversed) {
        return true;
    } else {
        return false;
    }
}

$input = "poop";
$result = isPalindrome($input);

if($result) {
  
  echo $input . " is a palindrome";
} else {
  echo $input . " is not a palindrome";
}


?>