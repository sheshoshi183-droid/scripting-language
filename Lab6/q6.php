<?php

class Animal{

    public function sound(){

        echo "Animal makes sound.<br>";

    }

}

class Dog extends Animal{

    public function bark(){

        echo "Dog Barks.";

    }

}

$obj = new Dog();

$obj->sound();

$obj->bark();

?>