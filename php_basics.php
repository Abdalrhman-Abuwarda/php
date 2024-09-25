<?php

$name = "Abdalrhman";
$age = 15;
$job = "Programmer";
$null = null;

var_dump(isset($null));

define('LARAVEL' , 8);
const HTML = 5;


echo ("Hello, $name \n");
echo ('Hello $name \n' . "\n");
echo ("Hello, \ \"$name\" \n ");
echo ("Hello, \ \"$name\" \\ \n");
echo(LARAVEL);
?>

<!DOCTYPE html>
<html lang = "en">
   <head>
        <meta charset = "UTF-8">
        <title>Document</title>
    </head>

    <body>
        <h2> <?php echo($name) ?> </h2>
        <ol>
            <?php for($i = 0 ; $i < 5 ; $i++) : ?>
            <!-- <li> <?php echo ($i) ?></li> -->
            <li> <?= ($i) ?></li>
           <?php endfor ?>
        </ol>
    </body>
</html>