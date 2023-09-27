<?php
$text = "The quick brown fox jumps over the lazy dog.";
function toLowerCase($string)
{
    $lowerCaseString = strtolower($string);
    $search = "brown";
    $replace = "red";
    $newString = str_replace($search, $replace, $lowerCaseString);
    echo $newString;

}
toLowerCase($text);
?>