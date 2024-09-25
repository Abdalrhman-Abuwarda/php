<?php

// use Exception;
// use InvalidArgumentException;
// final class Person // if we use final thats mean the class can not inherit from him
 class Person
{
    // Properties (Local varible in the class)
    // there are three type for Properties : (Public , Protectrd , Private)

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    public $name;

    // protected aloow access in child 
    protected $gender;
    // private not allow in child   
    private $birthday;
    private $extraData = [];

    // Constant Properties

    const MALE = "M";
    const FEMALE = "F";

    // Methods:

    // we return this for return the object
    public function setGender($gender)
    {
        if(!$gender){
            throw new Exception("Empty Gender Value");
        }

        elseif($gender !== "male" || $gender !== "female"){
            throw new InvalidArgumentException("Invalid Gender Value");
        }
        else {
            $this->gender = $gender;
        }
        // Magic Constant
        echo __METHOD__ . "\n";
        
        return $this;
    }

    // we can detect the override for the function in the parent by using final keyword
    public function setBithday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    // Static Properties

    public static $country;

    //static methods

    // here we make the set and get in the same method
    public static function selectCountry($country = null)
    {
        if ($country) {
            Person::$country = $country;
            return;
        }
        return self::$country;
        // return static::$country; more jeneral than self keyword in inhertance
    }


    // this function call when kill the object or finish tha app
    public function __destruct()
    {
        echo "Killed! \n";
    }

    // Magic methods: methods that the app call ... the context

    public function __toString()
    {
        return $this->name;
    }

    // for dynamic properties
    public function __set($name, $value)
    {
        $this->extraData[$name] = $value;
    }

    // for dynamic properties
    public function __get($name)
    {
        return $this->extraData[$name] ?? null;
    }

    //for dynamic methods

    public function __call($name, $arguments)
    {
        echo "Call $name(" . implode(',' , $arguments) . ") \n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Call static $name(" . implode(',' , $arguments) . ") \n";
    }

    public function __clone()
    {
        // return new self; // for return new objest
        return $this;
    }
}
