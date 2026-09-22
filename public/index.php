<?php
require_once('../vendor/autoload.php');

use App\Student;
use App\Supplies;
use App\Tutor;
use App\pieceSupplies;  
use App\weightSupplies;

$supplies = [
    new pieceSupplies(1, "чайник1", -2000),
    new pieceSupplies(2, "чайник2", 1000),
    new pieceSupplies(3, "чайник3", 1590),
    new pieceSupplies(4, "чайник4", 590),

    new weightSupplies(5, "чайник5", 100, "кг"),
    new weightSupplies(6, "чайник6", 2,5, "л")
];

foreach ($supplies as $supplie) {
    echo "Название: " . $supplie->getName() . "<br>";
    echo "Цена: " . $supplie->getPrice() . "<br>";
}

// $student = new Student("ольга",  17);
// $student->setAge(23);
// $student->learn();
// echo $student->getAge();

// echo $student->addMark(5)->addMark(3)->addMark(2)->resultMark();

// $tutor = new Tutor("олег", 18, [5, 4, 2], "P-45");
// $tutor->learn();

// echo $tutor->group;
