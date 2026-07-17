<?php

class Student{

    public $name = "Ram";

    public function display(){

        echo "Student Name: " . $this->name;

    }

}

$obj = new Student();

$obj->display();

?>