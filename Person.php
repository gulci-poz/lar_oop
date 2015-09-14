<?php

class Person {

    private $age = null;

    public function __construct($name) {

        $this->name = $name;
    }

    public function setAge($age) {

        if($age < 18) {

            throw new Exception("nieletni");

        } else {

            $this->age = $age;

        }
    }

    public function getAge() {

        return $this->age * 365;
    }

}

$gulci = new Person("gulci");
$gulci->setAge(32);
var_dump($gulci->getAge());
var_dump($gulci);

$young = new Person("young");
//$young->setAge(17);
var_dump($young);