<?php

function Pali($string){
    if (strrev($string)==$string){
        return 1;
    } else{
        return 0;
    }
}

$a = "rully";
if(Pali($a)){
    echo "$a = Kata Palindrome";
}
else {
    echo "$a = Bukan Kata Palindrome";
}