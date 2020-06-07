<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    function getName() {
        return $this->name."<br>";
    }
    function getAge() {
        return $this->age."<br>";
    }
}

$djina = new Person("Djina", 22);
echo $djina->getName();
echo $djina->getAge();
var_dump($djina);

