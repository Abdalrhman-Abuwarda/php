<?php

function shout($name , $greeting = ""){
    return "Hello! $greeting: $name \n";
}
echo shout("abdalrhman" , "dev");

function sum($num1 , $num2 , ...$numbers){
    $numbersValue = 0;
    foreach($numbers as $num){
        $numbersValue += $num;
    }
    return $num1 + $num2 + $numbersValue;
}

echo sum(1 , 2 , 4 , 5) . "\n";

function simpleSum(...$numbers){
    return array_sum($numbers);
}

echo simpleSum(1 , 2 , 3) . "\n";


//example for callback function :
// the callback function that function call anuther function    
function math($opperation , ...$numbers){
    return $opperation(...$numbers);
}

echo math("sum" , 1 , 2 ,3) . "\n";

$arrowFunction = fn($name) => "hello $name";
echo $arrowFunction("abdalrhman");