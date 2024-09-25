<?php

namespace App;

include __DIR__ . "/autoload.php";
require_once "./classes/trait.php";
// require_once "./classes/Animals/Animal.php";
// require_once './classes/Person.php';
// require './classes/Employee.php';

// make import for namespace like this
use Animals\Animal;
use App\Company\Employee;
use Exception;
use Person;

//you can use calass inside namespace like this 
// $animal = new \Animals\Animal;

// or like this
$animal = new Animal;
$animal->setName("Jojo");
var_dump($animal);
echo $animal->getName() . "\n";

$employee = new Employee("Abood", "Full Stack");


try {
        $employee->setGender(Employee::MALE);
} catch (Exception $e) {
        echo $e->getMessage() . "\n",
        "in file : ->>" . $e->getFile(),
        "\n in Line" . $e->getLine() . "\n",
        $e->getTraceAsString() . "\n";

}

var_dump($employee);
exit;
$person = new \Person("abdalrhman", Person::MALE);
$person->name = "Abdalrhman";
$person->setGender(Person::MALE);
$person->setBithday("2002-3-3");
var_dump($person);

if ($person instanceof Person) {
        echo "\n Yes! this is person object \n";
}

if ($person instanceof Employee) {
        echo "\n Yes! this is person object \n";
}



$person2 = new Person("Aya", Person::FEMALE);
$person2->name = "Aya";
$person2->setBithday("2011-20-7")
        ->setGender(Person::FEMALE);

var_dump($person2);

// the defult assigment method for objects  is by referance
$person = $person2;

$person2->name = "Ahmed";
var_dump($person, $person2);

// we can void the by referance assigment by use the (clone) keyword
// when use clone we make just a coby for the instance value
// when change some values for the one of tow objecct the other object values dont effict

$person2 = clone $person;

$person2->name = "Mohammed";
$person2->age = "18 \n";
var_dump($person, $person2);

// call static Properties
// is we change the static value for one instance the other instance will take the same value because this is the static:-)
Person::$country = "Palestine";
echo $person::$country . "\n";
echo $person2::$country . "\n";

// call static methods
Person::selectCountry();
echo $person::$country . "\n";

Person::selectCountry("USA");
echo $person::$country . "\n";

$person3 = clone $person;

var_dump($person3);
// for kill or delete the object use (unset) function;

echo $person3->age("18");
echo $person3->sup(15, 16);
echo Person::selectity();

unset($person3);
