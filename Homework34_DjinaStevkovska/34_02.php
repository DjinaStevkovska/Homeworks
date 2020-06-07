<?php

class Person {
    public $name;
    public $job;
    public $age;

    function __construct($name, $job, $age) {
        $this->name = $name;
        $this->job  = $job;
        $this->age  = $age;
    }

     function changeJob($newjob) {
         $this->job = $newjob;
    }

    function hbd() {
        ++$this->age;
   }
}
$djina = new Person("Djina", "student", 22);
echo "<pre>Djina: ", print_r($djina, TRUE), "</pre>";
// var_dump($djina);

$djina->changeJob('developer');
$djina->hbd();
echo "<pre>Djina: ", print_r($djina, TRUE), "</pre>";

