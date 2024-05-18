<?php 

$strings = ["Hello", "World", "PHP", "Programming"];

function vowelsCount($str){

    $vowels = ['a','e','i','o','u'];
    $count = 0;

    for($i=0;$i<strlen($str);$i++){
        if(in_array(strtolower($str[$i]),$vowels)){
            $count++;
        }
    }
    return $count;
}

foreach($strings as $string){

   $vowelsCount = vowelsCount($string);

   $reverseString = strrev($string);

   echo "Original String: $string, Vowel Count: $vowelsCount, Reversed String: $reverseString\n";
}


?>