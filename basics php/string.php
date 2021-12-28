<?php

$str = "this is a string ";
echo $str;

$ayan = strlen($str);
echo "the length of string is ". $ayan  . " thank you <br>" ;
echo "the length of string is "  . str_word_count($str). " thank you <br>" ;
echo "the reverse of string is "  . strrev($str). " thank you <br>" ;
echo "the position of is in this string is "  . strpos($str, "is"). " thank you <br>" ;
echo "the replaced string is "  . str_replace( "is","at", $str). " thank you <br>" ;
// echo $ayan;
?>