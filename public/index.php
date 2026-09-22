<?php
require_once('../vendor/autoload.php');

use App\Student;
use App\Supplies;
use App\Tutor;

$supplies = [
    new Supplies(1, "чайник1", 2000),
    new Supplies(2, "чайник2", 1000),
    new Supplies(3, "чайник3", 1590),
    new Supplies(4, "чайник4", 590)
];

foreach($supplies as $supplie){
     echo "Цена: $supplie->$getPrice()";
}

// $student = new Student("ольга",  17);
// $student->setAge(23);
// $student->learn();
// echo $student->getAge();

// echo $student->addMark(5)->addMark(3)->addMark(2)->resultMark();

// $tutor = new Tutor("олег", 18, [5, 4, 2], "P-45");
// $tutor->learn();

// echo $tutor->group;
