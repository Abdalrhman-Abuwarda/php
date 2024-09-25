<?php

spl_autoload_register(function($classname){

    // PSR4 "PHP STANDARD RECOMNDATION" (Standard Method for aoutoloading)
    echo "classname: $classname \n";
    require __DIR__ . "/classes/{$classname}.php";
});