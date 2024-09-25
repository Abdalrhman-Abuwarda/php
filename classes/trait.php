<?php
// The trait is not class and can not make a bject of them
// we can use them just inside the class
// we can use this code for muultipe class without have the same parent for the classes
//we can make override for the trait;

trait WithName{

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }
}