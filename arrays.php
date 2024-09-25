<?php

$array = array(10 , 2 , 5,);
$programming_language = ["PHP" , "Paython" , "Java" , "dart" , "Perl"];

for($i = 0 ; $i < count($array) ; $i++){
    echo("This is index of array =>> " . $array[$i] . "\n");
}

foreach($array as $value) {
     echo($value . "\n");
}

foreach($array as $key => $value) {
    echo("This is the key ==>> $key " . "This is the value : $value \n");
}


$test_array = [10 , "mohammed" , true , ["secound array" , "hello"] , null ];

if( isset($test_array[4]) ){
    echo($test_array(4));
}

if( array_key_exists(4 , $test_array)){
    echo("The key is exsists \n");
}

if(in_array("mohammed" , $test_array)){
    echo("The value is founded \n");
}

var_dump(array_search("mohammed" , $test_array));
$array[7] = 5;
$array[] = 'laravel';
//we can select the index (key) like this :
//we can set setring for the key value
$advance_array = [3 => 1 , 5 , 6 , 7 ,];

echo("This is first index in array ==> $array[0] \n");
echo($test_array[3][0] . "\n");
var_dump($array);
var_dump($test_array);
var_dump($advance_array);
?>

<!DOCTYPE html>
<html>
    <title>Arrays</title>
    <body>
        <h2>This is the common use programming language:</h2>
        <ol>
            <?php foreach($programming_language as $language) : ?>
                <li><?= ($language)?> </li> 
                <?php endforeach ?>
        </ol>
    </body>
</html>



