<?php
$text =  "The quick brown fox jumps over the lazy dog.";

function myFunction($txt){

    $convertedTxt = strtolower($txt);
    return str_replace("brown","red",$convertedTxt);
}

echo myFunction($text);