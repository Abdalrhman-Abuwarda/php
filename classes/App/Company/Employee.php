<?php

namespace App\Company;
use Person;
use HasName;

require_once './classes/HasName.php';

class Employee extends Person implements HasName
{
    public $jop;
    public $workplace;

    public function __construct($name, $jop = null)
    {
        // $this->name = $name;
        parent::__construct($name, Employee::MALE);
        $this->jop = $jop;
        // $this->$birthday = new DateTime();
    }

    function hasName($name = "abd"){}
    

}
