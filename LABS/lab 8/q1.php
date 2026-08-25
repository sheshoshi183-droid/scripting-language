<?php
class Student {
    public $name;
    public $rollNo;
    public $course;

    function displayDetails() {
        echo "Name: $this->name<br>";
        echo "Roll No: $this->rollNo<br>";
        echo "Course: $this->course<br><br>";
    }
}

$student1 = new Student();
$student1->name = "Ram";
$student1->rollNo = 101;
$student1->course = "BCA";

$student2 = new Student();
$student2->name = "Sita";
$student2->rollNo = 102;
$student2->course = "BCA";

$student1->displayDetails();
$student2->displayDetails();
?>
